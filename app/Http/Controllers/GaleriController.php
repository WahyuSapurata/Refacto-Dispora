<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;
use App\Models\Album;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GaleriController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Galeri';
        return view('admin.galeri.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Galeri::all();

        $combinedData = $dataFull->map(function ($item) {
            $dataAlbum = Album::where('uuid', $item->uuid_album)->first();
            $item->album = $dataAlbum->nama_album;

            return $item;
        });

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($combinedData, 'Get data success');
    }

    public function store(StoreGaleriRequest $storeGaleriRequest)
    {
        $data = array();

        $newFoto = '';
        if ($storeGaleriRequest->file('foto')) {
            $extension = $storeGaleriRequest->file('foto')->extension();
            $newFoto = $storeGaleriRequest->nama_galeri . '-' . now()->timestamp . '.' . $extension;
            $storeGaleriRequest->file('foto')->storeAs('galeri', $newFoto);
        }

        try {
            $data = new Galeri();
            $data->uuid_album = $storeGaleriRequest->uuid_album;
            $data->nama_galeri = $storeGaleriRequest->nama_galeri;
            $data->slug = Str::slug($storeGaleriRequest->nama_galeri);
            $data->ket = $storeGaleriRequest->ket;
            $data->foto = $newFoto;
            $data->status = $storeGaleriRequest->status;
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
            $data = Galeri::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreGaleriRequest $storeGaleriRequest, $params)
    {
        $data = Galeri::where('uuid', $params)->first();
        // Simpan nama foto lama untuk dihapus

        $oldFotoPath = public_path('galeri/' . $data->foto);

        $newFoto = '';
        if ($storeGaleriRequest->file('foto')) {
            $extension = $storeGaleriRequest->file('foto')->extension();
            $newFoto = $storeGaleriRequest->nama_album . '-' . now()->timestamp . '.' . $extension;
            $storeGaleriRequest->file('foto')->move(public_path('galeri'), $newFoto);

            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
        }

        try {
            $data->uuid_album = $storeGaleriRequest->uuid_album;
            $data->nama_galeri = $storeGaleriRequest->nama_galeri;
            $data->slug = Str::slug($storeGaleriRequest->nama_galeri);
            $data->ket = $storeGaleriRequest->ket;
            $data->foto = $storeGaleriRequest->file('foto') ? $newFoto : $data->foto;
            $data->status = $storeGaleriRequest->status;
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
            $data = Galeri::where('uuid', $params)->first();
            // Simpan nama foto lama untuk dihapus
            $oldFotoPath = public_path('galeri/' . $data->foto);
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
