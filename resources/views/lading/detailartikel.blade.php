@php
    use Carbon\Carbon;
    // Tanggal dalam format ISO 8601
    $tanggalISO = $data->created_at;

    // Membuat objek Carbon dari string tanggal ISO
    $tanggal = Carbon::createFromFormat('Y-m-d H:i:s', $tanggalISO);

    // Mengatur zona waktu menjadi Waktu Indonesia Tengah (WITA)
    $tanggal->setTimezone('Asia/Makassar');

    // Memformat tanggal menjadi format Indonesia
    $tanggalIndonesia = $tanggal->format('d F Y');
@endphp
@extends('landing.layout')
@section('background-layout', '100vh')
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
            <div class="card">
                <div class="card-body border-primary" style="border-left: 5px solid; border-radius: 5px">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="fs-lg-2x fw-bolder">
                                {{ $data->judul }}
                            </div>
                            <div>{{ $data->kategori }}.</div>
                        </div>
                        <div class="col-md-4">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                                <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                                <li class="breadcrumb-item pe-3"><a href="{{ route('artikel') }}" class="pe-3">Artikel</a>
                                </li>
                                <li class="breadcrumb-item pe-3 text-muted">Detail Artikel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <img src="{{ asset('posting/' . $data->foto) }}" alt="" class="w-100 h-350px rounded-2">
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container py-15">
        <div class="d-grid justify-content-center">
            <div class="bg-primary p-3 d-flex rounded-1 justify-content-center gap-4 fs-5" style="width: max-content">
                <div>Author : {{ $data->author }}</div>|
                <div>Kategori : {{ $data->kategori }}</div>|
                <div>Date : {{ $tanggalIndonesia }}</div>
            </div>
        </div>
        <div class="py-10 px-20 fs-6">
            {{ strip_tags($data->konten) }}
        </div>
        <div class="px-20 d-grid gap-2">
            <div class="fw-bolder">Like dan Bagikan ke :</div>
            <div class="d-flex gap-4">
                <div id="btn-like"></div>
                <a href="" class="btn btn-success">WHATSAPP</a>
                <a href="" class="btn btn-info">FACEBOOK</a>
                <a href="" class="btn btn-dark">TWITTER</a>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            view();
            like();
        });

        function like() {
            var xsrfToken = getCookieValue('XSRF-TOKEN');
            $.ajax({
                type: 'GET',
                url: @json(route('get-like-artikel', ['params' => $data->uuid])),
                data: {
                    xsrfToken: xsrfToken
                },
                success: function(response) {
                    if (response.cookieExists) {
                        // Jika cookie sudah ada, tandai tombol sebagai "unlike"
                        $('#btn-like').html('<button class="btn btn-primary btn-unlike">UNLIKE</button>');
                    } else {
                        // Jika cookie belum ada, tandai tombol sebagai "like"
                        $('#btn-like').html('<button class="btn btn-primary btn-like">LIKE</button>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Gagal memeriksa cookie:', error);
                }
            });
        }

        // Fungsi untuk mengambil nilai cookie
        function getCookieValue(cookieName) {
            var name = cookieName + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');
            for (var i = 0; i < cookieArray.length; i++) {
                var cookie = cookieArray[i];
                while (cookie.charAt(0) == ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name) == 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }
            return "";
        }

        $(document).on('click', ".btn-like", function(e) {
            e.preventDefault();
            const token = @json(csrf_token());
            const endpoint = @json(route('like-artikel', ['params' => $data->uuid]));

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            });

            $.ajax({
                type: 'POST',
                url: endpoint,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success == true) {
                        swal
                            .fire({
                                text: `Posting berhasil di Like`,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        like();
                    } else {
                        swal.fire({
                            title: response.message,
                            text: response.data,
                            icon: "warning",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
                error: function(xhr) {
                    swal
                        .fire({
                            text: `Posting gagal di Like`,
                            icon: "warning",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                },
            });
        });

        $(document).on('click', ".btn-unlike", function(e) {
            e.preventDefault();
            const token = @json(csrf_token());
            const endpoint = @json(route('unlike-artikel', ['params' => $data->uuid]));

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            });

            $.ajax({
                type: 'DELETE',
                url: endpoint,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success == true) {
                        swal
                            .fire({
                                text: `Posting berhasil di Unlike`,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        like();
                    } else {
                        swal.fire({
                            title: response.message,
                            text: response.data,
                            icon: "warning",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
                error: function(xhr) {
                    swal
                        .fire({
                            text: `Posting gagal di Unlike`,
                            icon: "warning",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                },
            });
        });

        function view() {
            const token = @json(csrf_token());
            const endpoint = @json(route('view', ['params' => $data->uuid]));

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            });

            $.ajax({
                type: 'POST',
                url: endpoint,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success == true) {
                        console.log('telah di lihat');
                    } else {
                        console.log('gagal di lihat');
                    }
                },
            });
        }
    </script>
@endsection
