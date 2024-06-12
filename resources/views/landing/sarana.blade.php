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
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">Sarana & Prasarana Dispora</h1>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">Sarana</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="row-gap: 20px">
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Biringkanaya ( {{ $Biringkanaya }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Biringkanaya']) }}"
                            class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Bontoala ( {{ $Bontoala }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Bontoala']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Makassar ( {{ $Makassar }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Makassar']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Mamajang ( {{ $Mamajang }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Mamajang']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Manggala ( {{ $Manggala }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Manggala']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Mariso ( {{ $Mariso }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Mariso']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Panakkukang ( {{ $Panakkukang }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Panakkukang']) }}"
                            class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Rappocini ( {{ $Rappocini }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Rappocini']) }}"
                            class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Tallo ( {{ $Tallo }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Tallo']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Tamalanrea ( {{ $Tamalanrea }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Tamalanrea']) }}"
                            class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Ujung Pandang ( {{ $Ujung_Pandang }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Ujung Pandang']) }}"
                            class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Ujung Tanah ( {{ $Ujung_Tanah }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Ujung Tanah']) }}"
                            class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body d-grid">
                        <div class="fw-bolder text-primary fs-3">Wajo ( {{ $Wajo }} )</div>
                        <a href="{{ route('detail-sarana', ['params' => 'Wajo']) }}" class="btn btn-primary mt-2">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
