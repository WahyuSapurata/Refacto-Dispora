@extends('landing.layout')
@section('head-background')
    <div class="position-absolute w-100 z-index-n2 bg-others">
        <img src="{{ asset('bg.jpg') }}" class="w-100 backgriund-landing" alt="">
    </div>
@endsection
@section('content')
    <div class="container py-15">
        <div class="card mb-15">
            <div class="card-body border-primary" style="border-left: 5px solid; border-radius: 5px">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">{{ $module }}</h1>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">{{ $module }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="fs-5">
            <p style="text-align: justify">Berdasarkan pada Peraturan Daerah Kota Makassar Nomor 3 Tahun 2009 (sebagai mana
                telah di rubah dengan
                peraturan daerah nomor 7 tahun 2013 tentang struktur organisasi) tentang Pembentukan, Susunan Organisasi dan
                Tata Kerja Dinas Pemuda dan Olahraga Kota Makassar (Lembaran Daerah Nomor 147 Tahun 2007) dengan tugas pokok
                Dinas Pemuda dan Olahraga menyusun rencana, membina, mengembangkan dan mengawasi kegiatan peningkatan
                kualitas sumber daya serta pemberdayaan kelembagaan kepemudaan dan keolahragaan yang ditindak lanjuti dengan
                Peraturan Walikota Makassar Nomor 100 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi
                serta tata kerja Dinas Pemuda dan Olahraga.</p>
            <div class="mb-5">Dalam melaksanakan tugas Dinas Pemuda dan Olaharaga, sebagaimana dalam Peraturan Walikota
                Makassar Nomor
                100 Tahun 2016, yaitu dengan uraian tugas sebagai berikut: </div>
            <ul style="list-style-type: lower-alpha;">
                <li>Melakukan penyadaran, pemberdayaan dan pengembangan pemuda dan kepemudaan terhadap pemuda pelopor,
                    wirausaha muda pemula, dan pemuda kader Kota Makassar.</li>
                <li>Memberdayaan dan mengembangkan organisasi kepemudaan tingkat Kota Makassar.</li>
                <li>Membina dan mengembangkan olahraga pendidikan pada jenjang pendidikan yang menjadi kewenangan Kota
                    Makassar.</li>
                <li>Menyelenggarakan kejuaraanolahraga tingkat Kota Makassar.</li>
                <li>Membina dan mengembangkan olahraga prestasi dan olaharaga rekreasi.</li>
                <li>Membina dan mengembangkan organisasi olahraga dan organisasi kepramukaan tingkat Kota Makassar.</li>
            </ul>
        </div>
    </div>
@endsection
