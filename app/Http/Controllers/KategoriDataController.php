<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriDataRequest;
use App\Http\Requests\UpdateKategoriDataRequest;
use App\Models\KategoriData;

use Illuminate\Support\Str;

class KategoriDataController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Kategori';
        return view('admin.kategoridata.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KategoriData::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreKategoriDataRequest $storeKategoriDataRequest)
    {
        $data = array();
        try {
            $data = new KategoriData();
            $data->nama_kategori = $storeKategoriDataRequest->nama_kategori;
            $data->slug = Str::slug($storeKategoriDataRequest->nama_kategori);
            $data->status = $storeKategoriDataRequest->status;
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
            $data = KategoriData::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreKategoriDataRequest $storeKategoriDataRequest, $params)
    {
        try {
            $data = KategoriData::where('uuid', $params)->first();
            $data->nama_kategori = $storeKategoriDataRequest->nama_kategori;
            $data->slug = Str::slug($storeKategoriDataRequest->nama_kategori);
            $data->status = $storeKategoriDataRequest->status;
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
            $data = KategoriData::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
