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
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">Event Dispora
                        </h1>
                        <div>Kalender Event</div>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">Event</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="row-gap: 20px">
            @php
                function potongTeks($teks, $panjang_maks = 200)
                {
                    if (strlen($teks) > $panjang_maks) {
                        $teks = substr($teks, 0, $panjang_maks);
                        $posisi_spasi_terakhir = strrpos($teks, ' ');
                        $teks = substr($teks, 0, $posisi_spasi_terakhir);
                        $teks .= '...';
                    }
                    return $teks;
                }
            @endphp

            @foreach ($data as $item)
                @php
                    $teks_pendek = potongTeks(strip_tags($item->konten));
                @endphp
                <div class="col-md-4">
                    <div class="card shadow-lg h-500px">
                        <img src="{{ asset('event/' . $item->foto) }}" class="w-100 h-200px" alt="">
                        <div class="card-body">
                            <div class="fw-bolder text-primary fs-5">{{ $item->nama_event }}</div>
                            <div class="fs-6">{{ $item->tanggal }}</div>
                            <div class="fs-6 fw-bolder">{{ $item->lokasi }}</div>
                            <div>{{ $teks_pendek }}</div>
                            <a href="{{ route('detail-event', ['params' => $item->slug]) }}"
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
