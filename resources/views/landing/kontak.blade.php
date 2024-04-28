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
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">Kontak Kami</h1>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">Kontak</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded landing-dark-border p-9 mb-10 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://maps.google.com/maps?q=Kantor%20Balaikota%20Makassar&t=&z=17&ie=UTF8&iwloc=&output=embed"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <style>
            .embed-responsive {
                position: relative;
                display: block;
                width: 100%;
                height: 55vh;
                padding: 0;
                overflow: hidden;
            }

            .embed-responsive::before {
                content: "";
                display: block;
                padding-top: 56.25%;
                /* 16:9 aspect ratio */
            }

            .embed-responsive .embed-responsive-item,
            .embed-responsive iframe,
            .embed-responsive embed,
            .embed-responsive object,
            .embed-responsive video {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
        </style>
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nama anda">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email anda">
                        </div>
                    </div>
                    <div class="mb-10">
                        <input type="text" class="form-control" placeholder="Subyek">
                    </div>
                    <div class="mb-10">
                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Pesan anda"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary">Kirim Pesan</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mb-10">
                    <div class="fs-1 fw-bolder">Say Halo</div>
                    <div class="fs-5">Email : dispora@makassarkota.go.id</div>
                    <div class="fs-5">Telepon : +62411-123456</div>
                </div>
                <div class="mb-10">
                    <div class="fs-1 fw-bolder">Cari Kami di</div>
                    <div class="fs-5">Menara Balaikota Lt. 4 Jln. Jenderal Ahmad Yani No.2 Makassar.</div>
                </div>
                <div class="mb-10">
                    <div class="fs-1 fw-bolder">Media Sosial</div>
                    <div class="d-flex align-items-center gap-5 mt-3">
                        <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                        <a href=""><i class="bi bi-tiktok text-dark fs-1"></i></a>
                        <a href=""><i class="bi bi-twitter text-secondary fs-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                        <a href=""><i class="bi bi-youtube text-danger fs-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
