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
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">Galeri Dispora
                        </h1>
                        <div>Daftar Galeri</div>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">Galeri</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="row-gap: 20px">
            @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="position-relative background-overlay">
                        <div class="w-100">
                            <img src="{{ asset('galeri/' . $item->foto) }}" class="w-100 h-225px rounded-2" alt="">
                        </div>
                        <div class="p-5 position-absolute w-100 bottom-0">
                            <div class="text-white fw-bolder fs-3">{{ $item->nama_galeri }}</div>
                            <a href="{{ route('detail-galeri', ['params' => $item->slug]) }}"
                                class="btn btn-primary mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <ul class="pagination">
                <!-- Link navigasi untuk halaman sebelumnya -->
                <li class="page-item previous {{ $data->previousPageUrl() ? '' : 'disabled' }}">
                    <a href="{{ $data->previousPageUrl() }}" class="page-link"><i class="previous"></i></a>
                </li>

                <!-- Link navigasi untuk setiap halaman -->
                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li class="page-item {{ $i == $data->currentPage() ? 'active' : '' }}">
                        <a href="{{ $data->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Link navigasi untuk halaman berikutnya -->
                <li class="page-item next {{ $data->nextPageUrl() ? '' : 'disabled' }}">
                    <a href="{{ $data->nextPageUrl() }}" class="page-link"><i class="next"></i></a>
                </li>
            </ul>
        </div>
    </div>
@endsection
