<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaranaRequest;
use App\Http\Requests\UpdateSaranaRequest;
use App\Models\Sarana;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SaranaController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Fasilitas';
        return view('admin.sarana.index', compact('module'));
    }

    public function add()
    {
        $module = 'Tambah Fasilitas';
        return view('admin.sarana.tambah', compact('module'));
    }

    public function edit($params)
    {
        $module = 'Edit Fasilitas';
        $this->show($params);
        return view('admin.sarana.edit', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Sarana::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreSaranaRequest $storeSaranaRequest)
    {
        $data = array();

        $newFoto = '';
        if ($storeSaranaRequest->file('foto')) {
            $extension = $storeSaranaRequest->file('foto')->extension();
            $newFoto = $storeSaranaRequest->nama_sarana . '-' . now()->timestamp . '.' . $extension;
            $storeSaranaRequest->file('foto')->storeAs('sarana', $newFoto);
        }

        try {
            $data = new Sarana();
            $data->nama_sarana = $storeSaranaRequest->nama_sarana;
            $data->slug = Str::slug($storeSaranaRequest->nama_sarana);
            $data->kategori = $storeSaranaRequest->kategori;
            $data->konten = $storeSaranaRequest->konten;
            $data->lokasi = $storeSaranaRequest->lokasi;
            $data->status = $storeSaranaRequest->status;
            $data->foto = $newFoto;
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
            $data = Sarana::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreSaranaRequest $storeSaranaRequest, $params)
    {
        $data = Sarana::where('uuid', $params)->first();

        // Simpan nama foto lama untuk dihapus
        $oldFotoPath = public_path('sarana/' . $data->foto);

        $newFoto = '';
        if ($storeSaranaRequest->file('foto')) {
            $extension = $storeSaranaRequest->file('foto')->extension();
            $newFoto = $storeSaranaRequest->nama_sarana . '-' . now()->timestamp . '.' . $extension;
            $storeSaranaRequest->file('foto')->move(public_path('sarana'), $newFoto);

            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
        }

        try {
            $data->nama_sarana = $storeSaranaRequest->nama_sarana;
            $data->slug = Str::slug($storeSaranaRequest->nama_sarana);
            $data->kategori = $storeSaranaRequest->kategori;
            $data->konten = $storeSaranaRequest->konten;
            $data->lokasi = $storeSaranaRequest->lokasi;
            $data->status = $storeSaranaRequest->status;
            $data->foto = $storeSaranaRequest->file('foto') ? $newFoto : $data->foto;
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
            $data = Sarana::where('uuid', $params)->first();
            // Simpan nama foto lama untuk dihapus
            $oldFotoPath = public_path('sarana/' . $data->foto);
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
