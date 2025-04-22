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
                        <h1 class="lh-base fw-bolder fs-3x fs-lg-4x">{{ $module }}</h1>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                            <li class="breadcrumb-item pe-3"><a href="{{ route('home') }}" class="pe-3">Home</a></li>
                            <li class="breadcrumb-item pe-3 text-muted">{{ $module }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md-5">
                <div class="position-relative shadow-lg">
                    <img src="https://dispora.makassarkota.go.id/images/favicon/f833f05da7f7c325ebc939b3273dee91.jpg"
                        class="w-100 rounded-2" alt="">
                    <div
                        class="d-flex align-items-center gap-5 bg-white px-20 p-5 justify-content-between position-absolute w-100 bottom-0">
                        <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                        <a href=""><i class="bi bi-twitter fs-1" style="color: #00e1ff"></i></a>
                        <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                    </div>
                </div>
            </div> --}}
            <div class="row gap-md-0 gap-5">
                <div class="col-md-6">
                    <div class="fs-1 fw-bolder">Drs. Andi Muhammad Yasir, M.Si</div>
                    {{-- <div class="fs-1 fw-bolder text-decoration-underline">Plt Kepala Dinas Pemuda dan Olahraga.</div> --}}
                    <table class="mt-5 fs-5">
                        <tr>
                            <td class="fw-bolder">NIP</td>
                            <td>:</td>
                            <td>19660510 198603 1 010</td>
                        </tr>
                        <tr>
                            <td class="fw-bolder">Jabatan</td>
                            <td>:</td>
                            <td>Plt Kepala Dinas Pemuda dan Olahraga.</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-6">
                    <div class="fs-1 fw-bolder">Andi Tenri Lengka, SH., M.Si</div>
                    {{-- <div class="fs-1 fw-bolder text-decoration-underline">Plt Kepala Dinas Pemuda dan Olahraga.</div> --}}
                    <table class="mt-5 fs-5">
                        <tr>
                            <td class="fw-bolder">NIP</td>
                            <td>:</td>
                            <td>19750604 199703 1 005</td>
                        </tr>
                        <tr>
                            <td class="fw-bolder">Jabatan</td>
                            <td>:</td>
                            <td>Sekertaris Dinas Pemuda dan Olahraga.</td>
                        </tr>
                    </table>
                </div>
                {{-- <table class="fs-5">
                    <tr>
                        <td class="fw-bolder">Riwayat Pendidikan :</td>
                    </tr>
                    <tr>
                        <td>
                            <ul style="list-style-type: lower-latin;">
                                <li>SDN 80 LALEBBATA PALOPO THN 1989-1995</li>
                                <li>SLTPN 1 PALOPO THN 1995-1998</li>
                                <li>SMUN 11 MAKASSAR THN 1998-2001</li>
                                <li>SEKOLAH TINGGI PEMERINTAHAN DALAM NEGERI THN 2001-2005</li>
                                <li>MAGISTER MANAJEMEN UNIVERSITAS MUSLIM INDONESIA MAKASSAR THN 2018-2020</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <table class="fs-5">
                    <tr>
                        <td class="fw-bolder">Riwayat Jabatan :</td>
                    </tr>
                    <tr>
                        <td>
                            <ul style="list-style-type: lower-latin;">
                                <li>LURAH SUANGGA KECAMATAN TALLO THN 2011-2015</li>
                                <li>LURAH MANGKURA KECAMATAN UJUNG PANDANG THN 2015-2016</li>
                                <li>SEKERTARIS CAMAT UJUNG PANDANG THN 2016-2018</li>
                                <li>CAMAT UJUNG PANDANG THN 2018-2021</li>
                                <li>KADISPORA KOTA MAKASSAR THN 2022 s/d SEKARANG</li>
                            </ul>
                        </td>
                    </tr>
                </table> --}}
            </div>
        </div>
    </div>
@endsection
