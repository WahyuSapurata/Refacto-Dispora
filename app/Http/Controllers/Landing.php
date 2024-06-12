<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Event;
use App\Models\Galeri;
use App\Models\kategori;
use App\Models\KategoriData;
use App\Models\Like;
use App\Models\Posting;
use App\Models\Sarana;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Landing extends BaseController
{
    public function home()
    {
        $module = 'Home';

        error_reporting(0);
        function get_curl($urlna)
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $urlna);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);

            return json_decode($result, true);
        }

        $channel = get_curl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC2o13QIB9_NODrWigTgvQrw&key=AIzaSyCdY0RDgXZ53u_XjpdJUJa4HuvXfg4a_f0');

        $youtubeprofile = $channel['items'][0]['snippet']['thumbnails']['medium']['url'];
        $namachannel = $channel['items'][0]['snippet']['title'];
        $subreker = $channel['items'][0]['statistics']['subscriberCount'];

        $pideona = get_curl('https://www.googleapis.com/youtube/v3/search?key=AIzaSyCdY0RDgXZ53u_XjpdJUJa4HuvXfg4a_f0&channelId=UC2o13QIB9_NODrWigTgvQrw&maxResult=3&order=date&part=snippet');

        $idpideo = [];

        foreach ($pideona['items'] as $p) {
            $idpideo[] = $p['id']['videoId'];
        }

        return view('landing.home', compact('module', 'namachannel', 'subreker', 'idpideo'));
    }

    public function artikel()
    {
        $module = 'Artikel';
        // Ambil 9 data dengan status 'Aktiv' untuk pagination
        // Ambil data postingan dengan status 'Aktiv' dan lakukan pagination
        $dataArtikel = Posting::where('status', 'Aktiv')->paginate(9);

        // Iterasi setiap item dalam hasil pagination
        $dataArtikel->each(function ($item) {
            // Ambil nama kategori untuk item saat ini
            $dataKategori = Kategori::where('uuid', $item->uuid_kategori)->first();
            $dataLike = Like::where('uuid_posting', $item->uuid)->count();
            $dataView = View::where('uuid_posting', $item->uuid)->count();

            // Jika kategori ditemukan, tambahkan nama kategori ke dalam item
            if ($dataKategori) {
                $item->kategori = $dataKategori->nama_kategori;
            }
            $item->jumlah_like = $dataLike;
            $item->jumlah_view = $dataView;
        });

        // $combinedData sekarang sudah memiliki nama kategori untuk setiap item

        // Ambil 3 data terbaru dari 9 data yang diambil
        $newArtikel = Posting::where('status', 'Aktiv')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.artikel', compact('module', 'dataArtikel', 'newArtikel'));
    }
    public function detail_artikel($params)
    {
        // Ambil data artikel berdasarkan slug
        $data = Posting::where('slug', $params)->first();

        // Jika artikel ditemukan
        if ($data) {
            // Ambil nama kategori untuk artikel saat ini
            $dataKategori = Kategori::where('uuid', $data->uuid_kategori)->first();

            // Jika kategori ditemukan, tambahkan nama kategori ke dalam artikel
            if ($dataKategori) {
                $data->kategori = $dataKategori->nama_kategori;
            }

            // Setelah mengambil data artikel dan kategori, kirim ke tampilan
            $module = $data->judul;
            return view('lading.detailartikel', compact('module', 'data'));
        } else {
            // Jika artikel tidak ditemukan, mungkin Anda ingin menangani ini dengan cara yang sesuai
            abort(404);
        }
    }

    public function event()
    {
        $module = 'Event';
        $data = Event::where('status', 'Aktiv')->paginate(9);
        return view('landing.event', compact('module', 'data'));
    }
    public function detail_event($params)
    {
        $data = Event::where('slug', $params)->first();
        $module = $params;
        return view('lading.detailevent', compact('module', 'data'));
    }

    public function sarana()
    {
        $module = 'Sarana';
        $Biringkanaya = Sarana::where('kecamatan', 'Biringkanaya')->count();
        $Bontoala = Sarana::where('kecamatan', 'Bontoala')->count();
        $Makassar = Sarana::where('kecamatan', 'Makassar')->count();
        $Mamajang = Sarana::where('kecamatan', 'Mamajang')->count();
        $Manggala = Sarana::where('kecamatan', 'Manggala')->count();
        $Mariso = Sarana::where('kecamatan', 'Mariso')->count();
        $Panakkukang = Sarana::where('kecamatan', 'Panakkukang')->count();
        $Rappocini = Sarana::where('kecamatan', 'Rappocini')->count();
        $Tallo = Sarana::where('kecamatan', 'Tallo')->count();
        $Tamalanrea = Sarana::where('kecamatan', 'Tamalanrea')->count();
        $Ujung_Pandang = Sarana::where('kecamatan', 'Ujung Pandang')->count();
        $Ujung_Tanah = Sarana::where('kecamatan', 'Ujung Tanah')->count();
        $Wajo = Sarana::where('kecamatan', 'Wajo')->count();
        return view('landing.sarana', compact(
            'module',
            'Biringkanaya',
            'Bontoala',
            'Makassar',
            'Mamajang',
            'Manggala',
            'Mariso',
            'Panakkukang',
            'Rappocini',
            'Tallo',
            'Tamalanrea',
            'Ujung_Pandang',
            'Ujung_Tanah',
            'Wajo',
        ));
    }
    public function detail_sarana($params)
    {
        $data = Sarana::where('kecamatan', $params)->get();
        $module = $params;
        return view('lading.detailsarana', compact('module', 'data'));
    }

    public function galeri()
    {
        $module = 'Galeri';
        $data = Galeri::where('status', 'Aktiv')->paginate(9);
        return view('landing.galeri', compact('module', 'data'));
    }
    public function detail_galeri($params)
    {
        $data = Galeri::where('slug', $params)->first();
        // Jika artikel ditemukan
        if ($data) {
            // Ambil nama kategori untuk artikel saat ini
            $dataAlbum = Album::where('uuid', $data->uuid_album)->first();

            // Jika kategori ditemukan, tambahkan nama kategori ke dalam artikel
            if ($dataAlbum) {
                $data->album = $dataAlbum->nama_album;
            }

            // Setelah mengambil data artikel dan kategori, kirim ke tampilan
            $module = $params;
            return view('lading.detailgaleri', compact('module', 'data'));
        } else {
            // Jika artikel tidak ditemukan, mungkin Anda ingin menangani ini dengan cara yang sesuai
            abort(404);
        }
    }

    public function open_data()
    {
        $module = 'Open Data';
        return view('landing.opendata', compact('module'));
    }

    public function program($params)
    {
        $module = $params;
        $dataKategori = Kategori::where('slug', $params)->first();
        $dataPosting = Posting::where('uuid_kategori', $dataKategori->uuid)->paginate(9);
        $dataPosting->each(function ($item) {
            // Ambil nama kategori untuk item saat ini
            $dataKategori = Kategori::where('uuid', $item->uuid_kategori)->first();
            $dataLike = Like::where('uuid_posting', $item->uuid)->count();
            $dataView = View::where('uuid_posting', $item->uuid)->count();

            // Jika kategori ditemukan, tambahkan nama kategori ke dalam item
            if ($dataKategori) {
                $item->kategori = $dataKategori->nama_kategori;
            }
            $item->jumlah_like = $dataLike;
            $item->jumlah_view = $dataView;
        });
        return view('landing.program', compact('module', 'dataKategori', 'dataPosting'));
    }

    public function kontak()
    {
        $module = 'Kontak';
        return view('landing.kontak', compact('module'));
    }

    public function selayang_pandang()
    {
        $module = 'Selayang Pandang';
        return view('landing.selayangpandang', compact('module'));
    }

    public function visi_misi()
    {
        $module = 'Visi Misi';
        return view('landing.visimisi', compact('module'));
    }

    public function struktur()
    {
        $module = 'Struktur Organisasi';
        return view('landing.struktur', compact('module'));
    }

    public function profil()
    {
        $module = 'Profil Kepala Dinas';
        return view('landing.profil', compact('module'));
    }

    public function pejabat_struktural()
    {
        $module = 'Pejabat Struktural';
        return view('landing.pejabat', compact('module'));
    }

    public function tupoksi()
    {
        $module = 'Tupoksi';
        return view('landing.tupoksi', compact('module'));
    }
}
