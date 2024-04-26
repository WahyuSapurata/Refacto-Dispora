<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;
use App\Models\kategori;

use Illuminate\Support\Str;

class KategoriController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Kategori';
        return view('admin.kategori.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = kategori::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StorekategoriRequest $storekategoriRequest)
    {
        $data = array();
        try {
            $data = new kategori();
            $data->nama_kategori = $storekategoriRequest->nama_kategori;
            $data->slug = Str::slug($storekategoriRequest->nama_kategori);
            $data->status = $storekategoriRequest->status;
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
            $data = kategori::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StorekategoriRequest $storekategoriRequest, $params)
    {
        try {
            $data = kategori::where('uuid', $params)->first();
            $data->nama_kategori = $storekategoriRequest->nama_kategori;
            $data->slug = Str::slug($storekategoriRequest->nama_kategori);
            $data->status = $storekategoriRequest->status;
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
            $data = kategori::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
