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

        try {
            $data = new Sarana();
            $data->nama_fasilitas = $storeSaranaRequest->nama_fasilitas;
            $data->slug = Str::slug($storeSaranaRequest->nama_fasilitas);
            $data->alamat = $storeSaranaRequest->alamat;
            $data->kecamatan = $storeSaranaRequest->kecamatan;
            $data->kelurahan = $storeSaranaRequest->kelurahan;
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
        try {
            $data = Sarana::where('uuid', $params)->first();
            $data->nama_fasilitas = $storeSaranaRequest->nama_fasilitas;
            $data->slug = Str::slug($storeSaranaRequest->nama_fasilitas);
            $data->alamat = $storeSaranaRequest->alamat;
            $data->kecamatan = $storeSaranaRequest->kecamatan;
            $data->kelurahan = $storeSaranaRequest->kelurahan;
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
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
