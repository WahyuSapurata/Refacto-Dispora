@php
    use Carbon\Carbon;
@endphp
@extends('landing.layout')
@section('head-background')
    <div class="position-absolute w-100 z-index-n2 bg-other">
        <img src="{{ asset('bg.jpg') }}" class="w-100 backgriund-landing" alt="">
    </div>
@endsection
@section('heading')
    <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9" data-kt-sticky="true"
        data-kt-sticky-name="landing-partner" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Heading-->
        <!--begin::Container-->
        <div class="container">
            <!--end::Heading-->
            <div class="tns tns-default mt-1">
                <!--begin::Slider-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-items="1"
                    data-tns-nav-position="bottom" data-tns-prev-button="#kt_team_slider_prev2"
                    data-tns-next-button="#kt_team_slider_next2" style="height: 395px;">

                    @foreach ($newArtikel as $item)
                        @php
                            // Tanggal dalam format ISO 8601
                            $tanggalISO = $item->created_at;

                            // Membuat objek Carbon dari string tanggal ISO
                            $tanggal = Carbon::createFromFormat('Y-m-d H:i:s', $tanggalISO);

                            // Mengatur zona waktu menjadi Waktu Indonesia Tengah (WITA)
                            $tanggal->setTimezone('Asia/Makassar');

                            // Memformat tanggal menjadi format Indonesia
                            $tanggalIndonesia = $tanggal->format('d F Y');
                        @endphp

                        <!--begin::Item-->
                        <div class="position-relative background-overlay">
                            <div class="w-100">
                                <img src="{{ asset('posting/' . $item->foto) }}" class="w-100 rounded-2"
                                    style="height: 395px;" alt="">
                            </div>
                            <div class="p-5 position-absolute w-100 bottom-0">
                                <div class="fs-lg-2hx text-white fw-bolder">{{ $item->judul }}</div>
                                <div class="text-white fs-5">{{ $tanggalIndonesia }}</div>
                                <a href="{{ route('detail-artikel', ['params' => $item->slug]) }}"
                                    class="btn btn-primary mt-2">Lihat Detail</a>
                            </div>
                        </div>
                        <!--end::Item-->
                    @endforeach

                </div>
                <!--end::Slider-->

                <!--begin::Slider button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev2">
                    <span class="svg-icon svg-icon-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                </button>
                <!--end::Slider button-->

                <!--begin::Slider button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next2">
                    <span class="svg-icon svg-icon-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                </button>
                <!--end::Slider button-->
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('content')
    <div class="container py-15">
        <div class="row" style="row-gap: 20px">
            @foreach ($dataArtikel as $rowArtikel)
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
            {{-- {{ $dataArtikel->links() }} --}}
            <ul class="pagination">
                <!-- Link navigasi untuk halaman sebelumnya -->
                <li class="page-item previous {{ $dataArtikel->previousPageUrl() ? '' : 'disabled' }}">
                    <a href="{{ $dataArtikel->previousPageUrl() }}" class="page-link"><i class="previous"></i></a>
                </li>

                <!-- Link navigasi untuk setiap halaman -->
                @for ($i = 1; $i <= $dataArtikel->lastPage(); $i++)
                    <li class="page-item {{ $i == $dataArtikel->currentPage() ? 'active' : '' }}">
                        <a href="{{ $dataArtikel->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Link navigasi untuk halaman berikutnya -->
                <li class="page-item next {{ $dataArtikel->nextPageUrl() ? '' : 'disabled' }}">
                    <a href="{{ $dataArtikel->nextPageUrl() }}" class="page-link"><i class="next"></i></a>
                </li>
            </ul>

        </div>
    </div>
@endsection
