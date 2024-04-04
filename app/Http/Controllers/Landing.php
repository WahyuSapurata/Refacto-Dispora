<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;

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
        // $featured = DB::table('posting')->get();
        // dd($featured);

        try {
            $pdo = new PDO("mysql:host=dispora.makassarkota.go.id;dbname=disporamakassar_U1236as17", "disporamakassar_U1236as17", "=U,Re~PrfMdQ!fK7p,");
            echo "Koneksi ke database berhasil!";
        } catch (PDOException $e) {
            echo "Koneksi ke database gagal: " . $e->getMessage();
        }
        return view('landing.artikel', compact('module'));
    }
}
