<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | Landing</title>
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
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/jquery-ui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="position-relative">
                <div class="position-absolute w-100 z-index-n2">
                    <img src="{{ asset('bg.jpg') }}" loading="lazy" class="w-100 backgriund-landing" alt="">
                </div>
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
                                    <img alt="Logo" src="{{ asset('Logo_dispora.png') }}"
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
                                        id="kt_landing_menu" style="align-items: center">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#home"
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
                                                Data</a>
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
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9"
                    data-kt-sticky="true" data-kt-sticky-name="landing-partner"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bolder fs-3x fs-lg-4x mb-15">Dinas Pemuda Dan Olahraga
                            <br />Kota Makassar
                        </h1>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->

        <!--begin::How It Works Section-->
        <div class="mb-20 z-index-2 content-deskripsi">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="row justify-content-between mb-20">
                    <div class="col-md-5">
                        <div class="d-grid gap-5">
                            <!--begin::Text-->
                            <h3 class="fs-3hx text-white">
                                Makassar Half Marthon 2024</h3>
                            <div class="text-white fs-5">
                                MAKASSAR HALF MARATHON adalah lomba lari massal jalan raya di Kota Makassar yang telah
                                di
                                selenggarakan dengan konsep baru sejak tahun 2002. Lomba lari ini dimaksudkan juga
                                sebagai
                                lomba
                                lari berstandar nasional yang juga akan menjadi salah satu spart destination penting di
                                Indonesia Timur. Sejauh ini telah pula menjadi lomba pilihan para pelari dari berbagai
                                wilayah,
                                selain Sulawesi Selatan dan sekitarnya.
                            </div>
                            <div>
                                <a class="read-more fw-bloder fs-5" href="">read more...</a>
                            </div>
                            <!--end::Text-->
                        </div>
                    </div>
                    <!--begin::Title-->
                    <div class="col-md-5">
                        <img class="w-100 rounded-2" src="{{ asset('home/poster-03.jpg') }}" alt="">
                    </div>
                    <!--end::Title-->
                </div>

                <div class="row justify-content-between mb-20">
                    <!--begin::Title-->
                    <div class="col-md-5">
                        <img class="w-100 rounded-2" src="{{ asset('home/poster-04.jpg') }}" alt="">
                    </div>
                    <!--end::Title-->
                    <div class="col-md-5">
                        <div class="d-grid gap-5">
                            <!--begin::Text-->
                            <h3 class="fs-3hx text-white">
                                Makassar Passion and Tech Week 2024</h3>
                            <div class="text-white fs-5">
                                Don't miss the chance for you to Meet the Passionate! Daftarkan diri dan bersiap untuk
                                rasakan pengalaman menyenangkan dan penuh insight dari rangkaian acara Makassar Passion
                                and Tech Week 2023! Eksplore arti passion dan manfaat besar teknologi, hanya di MPTW
                                2023! 23-24 Agustus 2023, Ballroom Hotel Unhas Makassar Segera daftarkan dirimu melalui
                                link <a
                                    href="https://www.loket.com/event/makassar-passion-tech-week-vvl">bit.ly/registrasimptw2023</a>,
                                GRATIS!!
                            </div>
                            <div>
                                <a class="read-more fw-bloder fs-5" href="">read more...</a>
                            </div>
                            <!--end::Text-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>

        <!--begin::Wrapper-->
        <div class="pt-20 mt-20 mb-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-5">
                    <!--begin::Title-->
                    <h3 class="fs-3hx text-white mt-10" id="clients"
                        data-kt-scroll-offset="{default: 125, lg: 150}">
                        Makassar Sport Festival</h3>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <div class="tns tns-default mt-20">
                    <!--begin::Slider-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-items="3" data-tns-nav-position="bottom"
                        data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">

                        <!--begin::Item-->
                        <div class="text-center px-5 py-5">
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                                Makassar!</div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="text-center px-5 py-5">
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                                Makassar!</div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="text-center px-5 py-5">
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                                Makassar!</div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="text-center px-5 py-5">
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                                Makassar!</div>
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Slider-->

                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
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
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
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
        <!--end::Wrapper-->

        <!--begin::Wrapper-->
        <div class="pt-20 mt-20 mb-20">
            <!--begin::Container-->
            <div class="container">
                <!--end::Heading-->
                <div class="tns tns-default mt-20">
                    <!--begin::Slider-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-items="2" data-tns-nav-position="bottom"
                        data-tns-prev-button="#kt_team_slider_prev2" data-tns-next-button="#kt_team_slider_next2">

                        <!--begin::Item-->
                        <div class="text-center d-grid gap-10 px-5 py-5">
                            <!--begin::Heading-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-white mt-10" id="clients"
                                    data-kt-scroll-offset="{default: 125, lg: 150}">
                                    Makassar Internationl Jet Ski Competition 2023!</h3>
                                <!--end::Title-->
                            </div>
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Kenangan tak terlupakan dari aksi seru di Makassar
                                International Jet Ski Competition 2023! Suasana penuh semangat, keahlian jet ski yang
                                memukau, dan persaingan yang ketat. Nikmati kembali momen-momen spektakuler ini dalam
                                after movie kami.</div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn-read-more">read more</a>
                            </div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="text-center d-grid gap-10 px-5 py-5">
                            <!--begin::Heading-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-white mt-10" id="clients"
                                    data-kt-scroll-offset="{default: 125, lg: 150}">
                                    Makassar Internationl Jet Ski Competition 2023!</h3>
                                <!--end::Title-->
                            </div>
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Kenangan tak terlupakan dari aksi seru di Makassar
                                International Jet Ski Competition 2023! Suasana penuh semangat, keahlian jet ski yang
                                memukau, dan persaingan yang ketat. Nikmati kembali momen-momen spektakuler ini dalam
                                after movie kami.</div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn-read-more">read more</a>
                            </div>
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="text-center d-grid gap-10 px-5 py-5">
                            <!--begin::Heading-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-white mt-10" id="clients"
                                    data-kt-scroll-offset="{default: 125, lg: 150}">
                                    Makassar Internationl Jet Ski Competition 2023!</h3>
                                <!--end::Title-->
                            </div>
                            <iframe width="560" height="315" class="card-rounded mw-100"
                                src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="text-white fs-5">Kenangan tak terlupakan dari aksi seru di Makassar
                                International Jet Ski Competition 2023! Suasana penuh semangat, keahlian jet ski yang
                                memukau, dan persaingan yang ketat. Nikmati kembali momen-momen spektakuler ini dalam
                                after movie kami.</div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn-read-more">read more</a>
                            </div>
                        </div>
                        <!--end::Item-->
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
        <!--end::Wrapper-->

        <!--begin::foothers-->
        <div class="pt-20 mt-20 mb-20">
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

        <div class="pt-20 mb-20">
            <!--begin::Container-->
            <!--end::Heading-->
            <div class="text-center mb-8s">
                <!--begin::Title-->
                <h3 class="fs-2hx text-white mt-10" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">
                    Dispora Makassar</h3>
                <!--end::Title-->
            </div>
            <div>
                <img class="w-100 mt-5" src="{{ asset('home/poster-10.jpg') }}" alt="">
            </div>
            <!--end::Container-->
        </div>

        <div class="pt-20 mb-20">
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
                                Data</a>
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
                    <div class="landing-dark-separator mt-12 mb-12"></div>
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
        var hostUrl = "admin/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('admin/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ asset('admin/assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            @if (Session::has('status'))
                Swal.fire({
                    icon: 'success',
                    title: 'Mantap',
                    text: @json(Session::get('message')),
                    showConfirmButton: false,
                    timer: 3000
                })
            @endif
        });
    </script>

</body>
<!--end::Body-->

</html>
