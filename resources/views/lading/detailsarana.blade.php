@extends('landing.layout')
@section('head-background')
    <div class="position-absolute w-100 z-index-n2 bg-others">
        <img src="{{ asset('bg.jpg') }}" class="w-100 backgriund-landing" alt="">
    </div>
@endsection
@section('content')
    <div class="container py-15">
        <div class="card">
            <div class="card-body border-primary" style="border-left: 5px solid; border-radius: 5px">
                <div class="row">
                    <div class="col-md-8">
                        <div class="fs-lg-2x fw-bolder">
                            {{ $module }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3"><a href="{{ route('sarana-landing') }}"
                                    class="pe-3">Sarana</a>
                            </li>
                            <li class="breadcrumb-item pe-3 text-muted">Detail Sarana</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-20 py-20">
            <table class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300">
                <thead class="text-center">
                    <tr class="fw-bolder fs-6 text-gray-800">
                        <th>Nama Fasilitas Olahraga</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">No data available in table</td>
                        </tr>
                    @else
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->nama_fasilitas }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->kelurahan }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
