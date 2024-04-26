@php
    use Carbon\Carbon;
@endphp
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
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">{{ $dataKategori->nama_kategori }}
                        </h1>
                        <div>Daftar Artikel</div>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">Artikel</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="row-gap: 20px">
            @foreach ($dataPosting as $rowArtikel)
                @php
                    // Tanggal dalam format ISO 8601
                    $tanggalISO = $rowArtikel->created_at;

                    // Membuat objek Carbon dari string tanggal ISO
                    $tanggal = Carbon::createFromFormat('Y-m-d H:i:s', $tanggalISO);

                    // Mengatur zona waktu menjadi Waktu Indonesia Tengah (WITA)
                    $tanggal->setTimezone('Asia/Makassar');

                    // Memformat tanggal menjadi format Indonesia
                    $tanggalIndonesia = $tanggal->format('d F Y');
                @endphp
                <div class="col-md-4">
                    <!--begin::Item-->
                    <div class="position-relative background-overlay">
                        <div class="m-5 position-relative">
                            <div class="position-absolute mt-5 d-flex justify-content-between w-100">
                                <div class="p-2 text-white bg-primary rounded-2">
                                    {{ $rowArtikel->kategori }}
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="p-2 text-white bg-primary rounded-2"><i
                                            class="bi bi-hand-thumbs-up text-primary"></i>
                                        {{ $rowArtikel->jumlah_like }}
                                    </div>
                                    <div class="p-2 text-white bg-primary rounded-2"><i class="bi bi-eye text-primary"></i>
                                        {{ $rowArtikel->jumlah_view }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <img src="{{ asset('posting/' . $rowArtikel->foto) }}" class="w-100 h-225px rounded-2"
                                alt="">
                        </div>
                        <div class="p-5 position-absolute w-100 bottom-0">
                            <div class="text-white fw-bolder">{{ $rowArtikel->judul }}</div>
                            <div class="text-white fs-5">{{ $tanggalIndonesia }}</div>
                            <a href="{{ route('detail-artikel', ['params' => $rowArtikel->slug]) }}"
                                class="btn btn-primary mt-2">Lihat Detail</a>
                        </div>
                    </div>
                    <!--end::Item-->
                </div>
            @endforeach

            <!-- Tampilkan link navigasi pagination -->
            {{-- {{ $dataPosting->links() }} --}}
            <ul class="pagination">
                <!-- Link navigasi untuk halaman sebelumnya -->
                <li class="page-item previous {{ $dataPosting->previousPageUrl() ? '' : 'disabled' }}">
                    <a href="{{ $dataPosting->previousPageUrl() }}" class="page-link"><i class="previous"></i></a>
                </li>

                <!-- Link navigasi untuk setiap halaman -->
                @for ($i = 1; $i <= $dataPosting->lastPage(); $i++)
                    <li class="page-item {{ $i == $dataPosting->currentPage() ? 'active' : '' }}">
                        <a href="{{ $dataPosting->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Link navigasi untuk halaman berikutnya -->
                <li class="page-item next {{ $dataPosting->nextPageUrl() ? '' : 'disabled' }}">
                    <a href="{{ $dataPosting->nextPageUrl() }}" class="page-link"><i class="next"></i></a>
                </li>
            </ul>
        </div>
    </div>
@endsection
