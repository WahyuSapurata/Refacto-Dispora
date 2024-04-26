<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostingRequest;
use App\Http\Requests\UpdatePostingRequest;
use App\Models\kategori;
use App\Models\Like;
use App\Models\Posting;
use App\Models\View;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostingController extends BaseController
{
    public function index()
    {
        $module = 'Manajemen Posting';
        return view('admin.posting.index', compact('module'));
    }

    public function add()
    {
        $module = 'Tambah Posting';
        return view('admin.posting.tambah', compact('module'));
    }

    public function edit($params)
    {
        $module = 'Edit Posting';
        $this->show($params);
        return view('admin.posting.edit', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Posting::all();

        $combinedData = $dataFull->map(function ($item) {
            $dataKategori = kategori::where('uuid', $item->uuid_kategori)->first();
            $item->kategori = $dataKategori->nama_kategori;

            $date = Carbon::parse($item->created_at)->locale('id'); // Parse tanggal dan set locale ke Indonesia
            $formattedDate = $date->isoFormat('D MMMM YYYY'); // Format tanggal sesuai preferensi
            $item->tanggal_upload = $formattedDate;
            return $item;
        });

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($combinedData, 'Get data success');
    }

    public function store(StorePostingRequest $storePostingRequest)
    {
        $data = array();

        $newFoto = '';
        if ($storePostingRequest->file('foto')) {
            $extension = $storePostingRequest->file('foto')->extension();
            $newFoto = $storePostingRequest->judul . '-' . now()->timestamp . '.' . $extension;
            $storePostingRequest->file('foto')->storeAs('posting', $newFoto);
        }

        try {
            $data = new Posting();
            $data->judul = $storePostingRequest->judul;
            $data->slug = Str::slug($storePostingRequest->judul);
            $data->konten = $storePostingRequest->konten;
            $data->status = $storePostingRequest->status;
            $data->uuid_kategori = $storePostingRequest->uuid_kategori;
            $data->author = auth()->user()->role;
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
            $data = Posting::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StorePostingRequest $storePostingRequest, $params)
    {
        $data = Posting::where('uuid', $params)->first();

        // Simpan nama foto lama untuk dihapus
        $oldFotoPath = public_path('posting/' . $data->foto);

        $newFoto = '';
        if ($storePostingRequest->file('foto')) {
            $extension = $storePostingRequest->file('foto')->extension();
            $newFoto = $storePostingRequest->judul . '-' . now()->timestamp . '.' . $extension;
            $storePostingRequest->file('foto')->move(public_path('posting'), $newFoto);

            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
        }

        try {
            $data->judul = $storePostingRequest->judul;
            $data->slug = Str::slug($storePostingRequest->judul);
            $data->konten = $storePostingRequest->konten;
            $data->status = $storePostingRequest->status;
            $data->uuid_kategori = $storePostingRequest->uuid_kategori;
            $data->author = auth()->user()->role;
            $data->foto = $storePostingRequest->file('foto') ? $newFoto : $data->foto;
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
            $data = Posting::where('uuid', $params)->first();
            // Simpan nama foto lama untuk dihapus
            $oldFotoPath = public_path('posting/' . $data->foto);
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

    public function like(Request $request, $params)
    {
        $data = array();
        try {
            $data = new Like();
            $data->uuid_posting = $params;
            $data->unique_id = $request->cookie('XSRF-TOKEN');
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }
    public function unlike(Request $request, $params)
    {
        $data = array();
        try {
            $xsrfToken = $request->cookie('XSRF-TOKEN');
            // Periksa apakah cookie sudah ada di database
            $data = Like::where('unique_id', $xsrfToken)->where('uuid_posting', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }
    public function get_like(Request $request, $params)
    {
        try {
            $xsrfToken = $request->cookie('XSRF-TOKEN');
            // Periksa apakah cookie sudah ada di database
            $data = Like::where('unique_id', $xsrfToken)->where('uuid_posting', $params)->exists();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return response()->json(['cookieExists' => $data]);
    }

    public function view(Request $request, $params)
    {
        $data_view = View::where('unique_id', $request->cookie('XSRF-TOKEN'))->where('uuid_posting', $params)->first();
        $data = array();
        try {
            if ($data_view == null) {
                $data = new View();
                $data->uuid_posting = $params;
                $data->unique_id = $request->cookie('XSRF-TOKEN');
                $data->save();
            }
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }
}
