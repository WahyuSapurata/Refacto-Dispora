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
                                {{ $data->nama_galeri }}
                            </div>
                            <div>{{ $data->album }}.</div>
                        </div>
                        <div class="col-md-4">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                                <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                                <li class="breadcrumb-item pe-3"><a href="{{ route('galeri-landing') }}"
                                        class="pe-3">Galeri</a>
                                </li>
                                <li class="breadcrumb-item pe-3 text-muted">Detail Galeri</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('galeri/' . $data->foto) }}" alt="" class="w-100 h-350px rounded-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card h-350px">
                            <div class="card-body">
                                <div class="fs-4">{{ $data->ket }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
