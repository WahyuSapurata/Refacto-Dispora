<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EventController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Event';
        return view('admin.event.index', compact('module'));
    }

    public function add()
    {
        $module = 'Tambah Event';
        return view('admin.event.tambah', compact('module'));
    }

    public function edit($params)
    {
        $module = 'Edit Event';
        $this->show($params);
        return view('admin.event.edit', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Event::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreEventRequest $storeEventRequest)
    {
        $data = array();

        $newFoto = '';
        if ($storeEventRequest->file('foto')) {
            $extension = $storeEventRequest->file('foto')->extension();
            $newFoto = $storeEventRequest->nama_event . '-' . now()->timestamp . '.' . $extension;
            $storeEventRequest->file('foto')->storeAs('event', $newFoto);
        }

        try {
            $data = new Event();
            $data->nama_event = $storeEventRequest->nama_event;
            $data->slug = Str::slug($storeEventRequest->nama_event);
            $data->kategori = $storeEventRequest->kategori;
            $data->konten = $storeEventRequest->konten;
            $data->lokasi = $storeEventRequest->lokasi;
            $data->tanggal = $storeEventRequest->tanggal;
            $data->status = $storeEventRequest->status;
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
            $data = Event::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreEventRequest $storeEventRequest, $params)
    {
        $data = Event::where('uuid', $params)->first();
        // Simpan nama foto lama untuk dihapus

        $oldFotoPath = public_path('event/' . $data->foto);

        $newFoto = '';
        if ($storeEventRequest->file('foto')) {
            $extension = $storeEventRequest->file('foto')->extension();
            $newFoto = $storeEventRequest->nama_event . '-' . now()->timestamp . '.' . $extension;
            $storeEventRequest->file('foto')->move(public_path('event'), $newFoto);

            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
        }

        try {
            $data->nama_event = $storeEventRequest->nama_event;
            $data->slug = Str::slug($storeEventRequest->nama_event);
            $data->kategori = $storeEventRequest->kategori;
            $data->konten = $storeEventRequest->konten;
            $data->lokasi = $storeEventRequest->lokasi;
            $data->tanggal = $storeEventRequest->tanggal;
            $data->status = $storeEventRequest->status;
            $data->foto = $storeEventRequest->file('foto') ? $newFoto : $data->foto;
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
            $data = Event::where('uuid', $params)->first();
            // Simpan nama foto lama untuk dihapus
            $oldFotoPath = public_path('event/' . $data->foto);
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
