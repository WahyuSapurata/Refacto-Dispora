<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Models\Album;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AlbumController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Album';
        return view('admin.album.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Album::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreAlbumRequest $storeAlbumRequest)
    {
        $data = array();

        $newFoto = '';
        if ($storeAlbumRequest->file('foto')) {
            $extension = $storeAlbumRequest->file('foto')->extension();
            $newFoto = $storeAlbumRequest->nama_album . '-' . now()->timestamp . '.' . $extension;
            $storeAlbumRequest->file('foto')->storeAs('album', $newFoto);
        }

        try {
            $data = new Album();
            $data->nama_album = $storeAlbumRequest->nama_album;
            $data->slug = Str::slug($storeAlbumRequest->nama_album);
            $data->foto = $newFoto;
            $data->status = $storeAlbumRequest->status;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }

    public function show($params)
    {
        $data = array();
        try {
            $data = Album::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreAlbumRequest $storeAlbumRequest, $params)
    {
        $data = Album::where('uuid', $params)->first();
        // Simpan nama foto lama untuk dihapus

        $oldFotoPath = public_path('album/' . $data->foto);

        $newFoto = '';
        if ($storeAlbumRequest->file('foto')) {
            $extension = $storeAlbumRequest->file('foto')->extension();
            $newFoto = $storeAlbumRequest->nama_album . '-' . now()->timestamp . '.' . $extension;
            $storeAlbumRequest->file('foto')->move(public_path('album'), $newFoto);

            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
        }

        try {
            $data->nama_album = $storeAlbumRequest->nama_album;
            $data->slug = Str::slug($storeAlbumRequest->nama_album);
            $data->foto = $storeAlbumRequest->file('foto') ? $newFoto : $data->foto;
            $data->status = $storeAlbumRequest->status;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }

        return $this->sendResponse($data, 'Update data success');
    }

    public function delete($params)
    {
        $data = array();
        try {
            $data = Album::where('uuid', $params)->first();
            // Simpan nama foto lama untuk dihapus
            $oldFotoPath = public_path('album/' . $data->foto);
            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
