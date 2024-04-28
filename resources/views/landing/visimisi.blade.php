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
        <div>
            <div class="fs-1 fw-bolder">Visi</div>
            <div class="fs-5">"Percepatan Mewujudkan Makassar Kota Dunia Yang “Sombere’ dan Smart City" dengan Imunitas
                Kuat untuk Semua"
            </div>
            <div class="fs-1 fw-bolder mt-5">Misi</div>
            <ul class="fs-5" style="list-style-type: lower-alpha;">
                <li>Revolusi Sumber Daya Manusia (SDM) dan percepatan reformasi birokrasi menuju SDM Kota yang unggul dengan
                    pelayanan public kelas dunia bersih dari indikasi korupsi. Untuk mewujudkan misi walikota, Dinas pemuda
                    dan olahraga berpartisipasi dalam cakupan 1000 beasiswa “Anak Lorong Berprestasi dan 10.000 skill
                    training gratis”, untuk merealiasikan hal tersebut dispora melaksanakan kegiatan pelatihan
                    kewirausahaan.</li>
                <li>Rekonstruksi Kesehatan, ekonomi, sosial dan budaya menuju masyarakat sejahtera dengan imunitas ekonomi
                    dan kesejahteraan kota yang kuat untuk semua. </li>
                <li>Restorasi ruang kota yang inklusif menuju kota nyaman kelas dunia yang “sombere’ dan smart” city untuk
                    semua. Untuk mewujudkan misi walikota, Dinas pemuda dan olahraga berpartisipasi dalam cakupan
                    Pembangunan infrastruktur dan kawasan “waterfront city” berbasis mitigasi dan adaptasi lingkungan.
                    Dispora melaksanakan pembangunan sarana olahraga yang juga berfungsi sebagai tempat evakuasi bencana dan
                    rumah sakit darurat.</li>
            </ul>
        </div>
    </div>
@endsection
