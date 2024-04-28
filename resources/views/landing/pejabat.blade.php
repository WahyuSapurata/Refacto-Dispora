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
        <div class="row" style="row-gap: 20px">
            <div class="col-md-4">
                <div>
                    <div>
                        <img src="https://dispora.makassarkota.go.id/images/pejabat/bdd7d356953e9d116775b779df053716.jpeg"
                            class="w-100 rounded-2 h-300px" alt="">
                    </div>
                    <div class="mt-3 rounded-2 p-5 bg-white shadow-lg">
                        <div>
                            <div class="fs-2 fw-bolder">Ir. Tenriawaaru Natsir, M.Si</div>
                            <table class="fs-6">
                                <tr>
                                    <td class="fw-bolder">NIP</td>
                                    <td>:</td>
                                    <td>19670328 198903 2 005</td>
                                </tr>
                                <tr>
                                    <td class="fw-bolder">Jabatan</td>
                                    <td>:</td>
                                    <td>Sekretaris</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex align-items-center gap-5 mt-3 px-20 justify-content-between">
                            <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                            <a href=""><i class="bi bi-twitter fs-1" style="color: #00e1ff"></i></a>
                            <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div>
                        <img src="https://dispora.makassarkota.go.id/images/pejabat/e34517034a80a1de67873b4205e1bc06.jpeg"
                            class="w-100 rounded-2 h-300px" alt="">
                    </div>
                    <div class="mt-3 rounded-2 p-5 bg-white shadow-lg">
                        <div>
                            <div class="fs-2 fw-bolder">Ir. Tenriawaaru Natsir, M.Si</div>
                            <table class="fs-6">
                                <tr>
                                    <td class="fw-bolder">NIP</td>
                                    <td>:</td>
                                    <td>19670328 198903 2 005</td>
                                </tr>
                                <tr>
                                    <td class="fw-bolder">Jabatan</td>
                                    <td>:</td>
                                    <td>Sekretaris</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex align-items-center gap-5 mt-3 px-20 justify-content-between">
                            <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                            <a href=""><i class="bi bi-twitter fs-1" style="color: #00e1ff"></i></a>
                            <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div>
                        <img src="https://dispora.makassarkota.go.id/images/pejabat/avatar.png"
                            class="w-100 rounded-2 h-300px" alt="">
                    </div>
                    <div class="mt-3 rounded-2 p-5 bg-white shadow-lg">
                        <div>
                            <div class="fs-2 fw-bolder">Muhammad Akbal, S.T</div>
                            <table class="fs-6">
                                <tr>
                                    <td class="fw-bolder">NIP</td>
                                    <td>:</td>
                                    <td>19840427 201001 1 023</td>
                                </tr>
                                <tr>
                                    <td class="fw-bolder">Jabatan</td>
                                    <td>:</td>
                                    <td>Kabid Peningkatan Prestasi Olahraga</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex align-items-center gap-5 mt-3 px-20 justify-content-between">
                            <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                            <a href=""><i class="bi bi-twitter fs-1" style="color: #00e1ff"></i></a>
                            <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div>
                        <img src="https://dispora.makassarkota.go.id/images/pejabat/c038c418e2206e9f50cd327a12bb37a1.jpeg"
                            class="w-100 rounded-2 h-300px" alt="">
                    </div>
                    <div class="mt-3 rounded-2 p-5 bg-white shadow-lg">
                        <div>
                            <div class="fs-2 fw-bolder">Bryan Ramadhan Brahman, S.STP</div>
                            <table class="fs-6">
                                <tr>
                                    <td class="fw-bolder">NIP</td>
                                    <td>:</td>
                                    <td>19910411 201206 1 004</td>
                                </tr>
                                <tr>
                                    <td class="fw-bolder">Jabatan</td>
                                    <td>:</td>
                                    <td>Kabid Pengembangan Pemuda</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex align-items-center gap-5 mt-3 px-20 justify-content-between">
                            <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                            <a href=""><i class="bi bi-twitter fs-1" style="color: #00e1ff"></i></a>
                            <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div>
                        <img src="https://dispora.makassarkota.go.id/images/pejabat/e8cf4217bd53f49fe13aeecda3fadabf.jpg"
                            class="w-100 rounded-2 h-300px" alt="">
                    </div>
                    <div class="mt-3 rounded-2 p-5 bg-white shadow-lg">
                        <div>
                            <div class="fs-2 fw-bolder">Muhammad Dasysyara Dahyar, SE</div>
                            <table class="fs-6">
                                <tr>
                                    <td class="fw-bolder">NIP</td>
                                    <td>:</td>
                                    <td>19860731 200604 1 001</td>
                                </tr>
                                <tr>
                                    <td class="fw-bolder">Jabatan</td>
                                    <td>:</td>
                                    <td>Kabid Pemberdayaan Pemuda</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex align-items-center gap-5 mt-3 px-20 justify-content-between">
                            <a href=""><i class="bi bi-facebook text-info fs-1"></i></a>
                            <a href=""><i class="bi bi-twitter fs-1" style="color: #00e1ff"></i></a>
                            <a href=""><i class="bi bi-instagram text-primary fs-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
