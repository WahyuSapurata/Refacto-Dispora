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
            <div class="card">
                <div class="card-body border-primary" style="border-left: 5px solid; border-radius: 5px">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="fs-lg-2x fw-bolder">
                                {{ $data->nama_event }}
                            </div>
                            <div>{{ $data->kategori }}.</div>
                        </div>
                        <div class="col-md-4">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                                <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                                <li class="breadcrumb-item pe-3"><a href="{{ route('event-landing') }}"
                                        class="pe-3">Event</a>
                                </li>
                                <li class="breadcrumb-item pe-3 text-muted">Detail Event</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <img src="{{ asset('event/' . $data->foto) }}" alt="" class="w-100 h-350px rounded-2">
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container py-15">
        <div class="d-grid justify-content-center">
            <div class="bg-primary p-3 d-flex rounded-1 justify-content-center gap-4 fs-5" style="width: max-content">
                <div>Tanggal : {{ $data->tanggal }}</div>|
                <div>Lokasi : {{ $data->lokasi }}</div>
            </div>
        </div>
        <div class="py-10 px-20 fs-6">
            {{ strip_tags($data->konten) }}
        </div>
        <div class="px-20 d-grid gap-2">
            <div class="fw-bolder">Like dan Bagikan ke :</div>
            <div class="d-flex gap-4">
                <a href="" class="btn btn-success">WHATSAPP</a>
                <a href="" class="btn btn-info">FACEBOOK</a>
                <a href="" class="btn btn-dark">TWITTER</a>
            </div>
        </div>
    </div>
@endsection
