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

                </form>
            </div>
        </div>
    </div>
@endsection
