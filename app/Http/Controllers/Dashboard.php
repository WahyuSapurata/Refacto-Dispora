<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Galeri;
use App\Models\Posting;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Dashboard extends BaseController
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->back();
        }
        return redirect()->route('login.login-akun');
    }

    public function dashboard_admin()
    {
        $module = 'Dashboard';
        $posting = Posting::count();
        $galeri = Galeri::count();
        $event = Event::count();
        return view('dashboard.admin', compact('module', 'posting', 'galeri', 'event'));
    }

    public function areaChart()
    {
        // Atur lokal Carbon ke Bahasa Indonesia
        Carbon::setLocale('id');

        $data = Posting::selectRaw('COUNT(id) as count, MONTH(created_at) as month_num')
            ->whereYear('created_at', '=', date('Y'))
            ->groupByRaw('MONTH(created_at)')
            ->orderByRaw('month_num')
            ->get();

        $result = [
            'label' => [],
            'data' => []
        ];

        foreach ($data as $row) {
            // Gunakan Carbon untuk mendapatkan nama bulan dari angka bulan
            $carbon = Carbon::createFromDate(null, $row->month_num, 1);
            $namaBulan = $carbon->translatedFormat('F'); // "F" = nama bulan lengkap

            $result['label'][] = $namaBulan;
            $result['data'][] = (int) $row->count;
        }

        return $this->sendResponse('Get data success', $result);
    }
}
