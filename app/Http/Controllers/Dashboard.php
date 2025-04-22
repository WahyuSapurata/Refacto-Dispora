<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Galeri;
use App\Models\Posting;
use Illuminate\Http\Request;

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
        $data = Posting::selectRaw('COUNT(id) as count, DATE_FORMAT(created_at, "%M") as month_name, MONTH(created_at) as month_num')
            ->whereYear('created_at', '=', date('Y'))
            ->groupByRaw('MONTH(created_at), DATE_FORMAT(created_at, "%M")')
            ->orderByRaw('month_num')
            ->get();

        $result = [
            'label' => [],
            'data' => []
        ];

        foreach ($data as $row) {
            $result['label'][] = $row->month_name;
            $result['data'][] = (int) $row->count;
        }

        return $this->sendResponse('Get data success', $result);
    }
}
