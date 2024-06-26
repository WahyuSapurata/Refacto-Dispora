@php
    $dataKategori = DB::table('kategoris')->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | {{ $module }}</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon"
        href="https://dispora.makassarkota.go.id/images/favicon/c551664b65bad27d6b56ac71bfdd016f.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/jquery-ui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">

    <div id="loader">
        <img class="spinner" src="{{ asset('Logo_dispora-dark.png') }}" alt="Spinner">
        <div class="custom-loader"></div>
    </div>


    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home" style="height: @yield('background-layout')">
            <!--begin::Wrapper-->
            <div class="position-relative">
                @yield('head-background')
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="">
                                    <img alt="Logo" src="{{ asset('logo_dispora.png') }}"
                                        class="logo-default h-45px h-lg-65px" />
                                    <img alt="Logo" src="{{ asset('Logo_dispora-dark.png') }}"
                                        class="logo-sticky h-40px h-lg-60px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu" data-kt-menu="true" style="align-items: center">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link {{ $module == 'Home' ? 'active' : '' }} py-3 px-4 px-xxl-6"
                                                href="{{ route('home') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Home</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link {{ $module == 'Artikel' ? 'active' : '' }} py-3 px-4 px-xxl-6"
                                                href="{{ route('artikel') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Artikel</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link {{ $module == 'Event' ? 'active' : '' }} py-3 px-4 px-xxl-6"
                                                href="{{ route('event-landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Event</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link {{ $module == 'Sarana' ? 'active' : '' }} py-3 px-4 px-xxl-6"
                                                href="{{ route('sarana-landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Sarana</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link {{ $module == 'Galeri' ? 'active' : '' }} py-3 px-4 px-xxl-6"
                                                href="{{ route('galeri-landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Galeri</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link {{ $module == 'Open Data' ? 'active' : '' }} py-3 px-4 px-xxl-6"
                                                href="{{ route('opendata-landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Open
                                                Data/PPID</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                                <span class="menu-title">Program</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                                <!--begin::Menu item-->
                                                @foreach ($dataKategori as $item)
                                                    <div class="menu-item">
                                                        <a href="{{ route('program', ['params' => $item->slug]) }}"
                                                            class="menu-link {{ $module == $item->slug ? 'active' : '' }} px-1 py-3">
                                                            <span class="menu-title">{{ $item->nama_kategori }}</span>
                                                        </a>
                                                    </div>
                                                @endforeach
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                                <span class="menu-title">Tentang Kami</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('kontak-landing') }}"
                                                        class="menu-link {{ $module == 'Kontak' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Kontak</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('selayang-landing') }}"
                                                        class="menu-link {{ $module == 'Selayang Pandang' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Selayang Pandang</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('visimisi-landing') }}"
                                                        class="menu-link {{ $module == 'Visi Misi' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Visi Misi</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('struktur-landing') }}"
                                                        class="menu-link {{ $module == 'Struktur Organisasi' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Struktur Organisasi</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('profil-landing') }}"
                                                        class="menu-link {{ $module == 'Profil Kepala Dinas' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Profil Kepala Dinas</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('pejabat-landing') }}"
                                                        class="menu-link {{ $module == 'Pejabat Struktural' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Pejabat Struktural</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="{{ route('tupoksi-landing') }}"
                                                        class="menu-link {{ $module == 'Tupoksi' ? 'active' : '' }} px-1 py-3">
                                                        <span class="menu-title">Tupoksi</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="d-grid d-md-flex ms-md-10" style="align-items: center; gap: 15px">
                                <i class="bi fs-2 bi-tiktok"></i>
                                <i class="bi fs-2 bi-facebook"></i>
                                <i class="bi fs-2 bi-instagram"></i>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                @yield('heading')
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->

        <!--begin::How It Works Section-->
        @yield('content')

        <!--begin::foothers-->
        <div class="{{ $module == 'Home' ? '' : 'bg-foother' }}">
            {{-- @if ($module != 'Home')
                <div class="position-absolute w-100 z-index-n2">
                    <div
                        style="background-image: url('/bg.jpg'); background-size: cover; width: 100%; height: 100%; background-position: bottom;">
                    </div>
                </div>
            @endif --}}
            <div class="mb-20">
                <!--begin::Container-->
                <div class="container">
                    <!--end::Heading-->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="d-grid gap-5">
                                <div class="text-start mb-5">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-white mt-10" id="clients"
                                        data-kt-scroll-offset="{default: 125, lg: 150}">
                                        Dispora Makassar</h3>
                                    <!--end::Title-->
                                </div>
                                <div class="text-white fs-5">Portal informasi Dinas Pemuda dan Olahraga Pemerintah Kota
                                    Makassar.</div>
                                <div class="text-white fs-5">
                                    <div>Email. dispora@makassarkota.go.id</div>
                                    <div>Telpon. +62411-123456</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-grid gap-5">
                                <div class="text-start mb-5">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-white mt-10" id="clients"
                                        data-kt-scroll-offset="{default: 125, lg: 150}">
                                        Partner</h3>
                                    <!--end::Title-->
                                </div>
                                <div class="text-white fs-5">
                                    <ul id="list">
                                        <li>KONI</li>
                                        <li>KNPI</li>
                                        <li>NPC</li>
                                        <li>PRAMUKA</li>
                                        <li>KORNI</li>
                                        <li>PPI Paskib</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-grid gap-5">
                                <div class="text-start mb-5">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-white mt-10" id="clients"
                                        data-kt-scroll-offset="{default: 125, lg: 150}">
                                        Makassar Sites</h3>
                                    <!--end::Title-->
                                </div>
                                <div class="text-white fs-5">
                                    <ul id="list">
                                        <li>Pemkot Makassar</li>
                                        <li>Dinas Parawisata</li>
                                        <li>Dinas Koperasi & UMKM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>

            <div class="mb-20">
                <!--begin::Container-->
                <!--end::Heading-->
                <div class="text-center mb-8s">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-white mt-10" id="clients"
                        data-kt-scroll-offset="{default: 125, lg: 150}">
                        Dispora Makassar</h3>
                    <!--end::Title-->
                </div>
                <div>
                    <img class="w-100 mt-5" src="{{ asset('home/poster-10.jpg') }}" alt="">
                </div>
                <!--end::Container-->
            </div>

            <div class="mb-5">
                <!--begin::Container-->
                <div class="container">
                    <!--end::Heading-->
                    <div class="text-center mb-5">
                        <!--begin::Title-->
                        <!--begin::Menu-->
                        <div class="menu menu-column justify-content-center flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                            id="kt_landing_menu" style="align-items: center">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#home"
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Artikel</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Event</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Sarana</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Daleri</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Open
                                    Data/PPID</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Program</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href=""
                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tentang
                                    Kami</a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--begin::Separator-->
                        <div class="landing-dark-separator mt-5 mb-5"></div>
                        <!--end::Separator-->
                        <!--begin::Title-->
                        <h3 class="fs-4 fw-bloder text-white" data-kt-scroll-offset="{default: 125, lg: 150}">
                            © Copyright Dispora Kota Makassar All Rights Reserved.</h3>
                        <!--end::Title-->
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Container-->
            </div>
        </div>
        <!--end::foothers-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                        transform="rotate(90 13 6)" fill="currentColor" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script>
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                // Ketika semua proses load tampilan selesai, sembunyikan loader
                document.getElementById('loader').style.display = 'none';
            }
        };
    </script>
    @yield('script')

</body>
<!--end::Body-->

</html>
