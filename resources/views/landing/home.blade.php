@extends('landing.layout')
@section('head-background')
    <div class="position-absolute w-100 z-index-n2">
        <img src="{{ asset('bg.jpg') }}" class="w-100 backgriund-landing" alt="">
    </div>
@endsection
@section('heading')
    <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9" data-kt-sticky="true"
        data-kt-sticky-name="landing-partner" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Heading-->
        <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
            <!--begin::Title-->
            <h1 class="text-white lh-base fw-bolder fs-3x fs-lg-4x mb-15">Dinas Pemuda Dan Olahraga
                <br />Kota Makassar
            </h1>
            <!--end::Title-->
        </div>
    </div>
@endsection
@section('content')
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
    <div class="mb-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-5">
                <!--begin::Title-->
                <h3 class="fs-3hx text-white mt-10" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">
                    Makassar Sport Festival</h3>
                <!--end::Title-->
            </div>
            <!--end::Heading-->
            <div class="tns tns-default mt-20">
                <!--begin::Slider-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-items="3"
                    data-tns-nav-position="bottom" data-tns-prev-button="#kt_team_slider_prev1"
                    data-tns-next-button="#kt_team_slider_next1">

                    <!--begin::Item-->
                    <div class="text-center px-5 py-5">
                        <iframe width="560" height="315" class="card-rounded mw-100"
                            src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
                        <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                            Makassar!</div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="text-center px-5 py-5">
                        <iframe width="560" height="315" class="card-rounded mw-100"
                            src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
                        <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                            Makassar!</div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="text-center px-5 py-5">
                        <iframe width="560" height="315" class="card-rounded mw-100"
                            src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
                        <div class="text-white fs-5">Get ready for a wookond of adrenaline-pumping action in
                            Makassar!</div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="text-center px-5 py-5">
                        <iframe width="560" height="315" class="card-rounded mw-100"
                            src="https://www.youtube.com/embed/snIuq52IW-g?si=srqp0rooJKs-S2dc" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
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
    <div class="mb-20 pt-20">
        <!--begin::Container-->
        <div class="container">
            <!--end::Heading-->
            <div class="tns tns-default mt-20">
                <!--begin::Slider-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                    data-tns-items="2" data-tns-nav-position="bottom" data-tns-prev-button="#kt_team_slider_prev2"
                    data-tns-next-button="#kt_team_slider_next2">

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
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
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
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
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
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
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

    <!--begin::Youtube-->
    <div class="mb-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="d-flex justify-content-between">
                <div class="mb-5">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-white" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">
                        {{ $namachannel }}</h3>
                    <div class="text-white fs-4">{{ $subreker }} Subscriber</div>
                    <!--end::Title-->
                </div>
                <div class="fs-5">
                    <script src="https://apis.google.com/js/platform.js"></script>
                    <div class="g-ytsubscribe" data-channelid="UC2o13QIB9_NODrWigTgvQrw" data-layout="default"
                        data-count="default"></div>
                </div>
            </div>
            <!--end::Heading-->
            <div class="tns tns-default">
                <!--begin::Slider-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                    data-tns-items="3" data-tns-nav-position="bottom" data-tns-prev-button="#kt_team_slider_prev3"
                    data-tns-next-button="#kt_team_slider_next3">

                    <!--begin::Item-->
                    @foreach ($idpideo as $c)
                        <div class="text-center px-5 py-5">
                            @if (!empty($c))
                                <iframe width="560" height="315" class="card-rounded mw-100"
                                    src="https://www.youtube.com/embed/{{ $c }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                                    loading="lazy"></iframe>
                            @endif
                        </div>
                    @endforeach
                    <!--end::Item-->

                </div>
                <!--end::Slider-->

                <!--begin::Slider button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev3">
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
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next3">
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
    <!--end::Youtube-->
@endsection
