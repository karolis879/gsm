@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="main minh-100vh">
        <!-- Section -->
        <section class="py-0"
                 style="background-image: url({{ asset('/img/footer.png') }}); background-repeat: no-repeat; background-position: top right;">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-lg-8 minh-100vh col-xl-7 bg-white pt-0 pt-lg-6 pb-6 pb-lg-3">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-10 pb-3">
                                <h1 class="fs-3 fs-lg-5 title-underline mb-5 pb-3 anim-proxima-bold-black-46">{{ __('home.glance') }}
                                    <br><!--<span class="anim-proxima-bold-purple-46">{{ __('home.your') }}</span>-->
                                    <span class="typed anim-proxima-bold-purple-46" data-typed-text="
                                {{ __('home.promo1') }}
                                {{ __('home.promo2') }}
                                {{ __('home.promo3') }}
                                {{ __('home.promo4') }}
                                {{ __('home.promo5') }}
                                {{ __('home.promo6') }}
                                {{ __('home.promo7') }}
                                " data-typed-loop="true" data-typed-id="typed_0"></span><span
                                        class="typed-cursor typed-cursor--blink"></span>
                                </h1>

                                <p class="mb-7 robot-regular-16-second-black">{{ __('home.2') }}</p>

                                <div class="row justify-content-center justify-content-lg-start">
                                    <div class="col-8 col-lg-6">
                                        <a href="{{ url('/contact-us')}}"
                                           class="btn btn-primary btn-lg btn-block mb-2">{{ __('home.touch') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-5 order-first order-lg-2 bg-secondary ext-r pt-lg-6">
                        <div
                            class="d-flex h-100 align-items-center ml-lg-neg-7 release-container unrelease-lg-container">
                            <!-- Carousel -->
                            <div class="owl-carousel"
                                 data-carousel-options='{"items":1,"loop":true,"autoplay":true,"autoplayTimeout":5000,"autoplayHoverPause":true, "responsive":{"0":{"dots":true,"nav":false}, "992":{"dots":false,"nav":false}}}'>
                                <div>
                                    <img src="{{ asset('img/hero-new-gsm.jpg') }}" class="img-fluid w-100" alt=""/>
                                </div>
                                <div>
                                    <img src="{{ asset('img/slider1.png') }}" class="img-fluid w-100" alt=""/>
                                </div>
                            </div>
                            <!-- End of Carousel -->
                        </div>
                    </div>

                    <div class="move d-none d-lg-block">
                        <a href="#section-3" data-smooth-scroll data-smooth-scroll-hash="false">
                            <i class="zmdi zmdi-long-arrow-down zmdi-hc-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <section id="section-3" class="pt-0">
            <div class="container-fluid px-xl-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 align-self-stretch py-6 py-lg-9">
                        <div class="bg-container overlay"
                             style="background-image: url({{ asset('img/home3.jpg') }});"></div>
                        <div class="position-relative">
                            <div class="px-sm-6 px-lg-8 px-xl-10">
                                <h3 class="my-0 text-uppercase robot-bold-20-blue">{{ __('home.what') }}</h3>
                                <h2 class="mb-4 text-uppercase proxima-bold-white-26">{{ __('home.we') }}</h2>
                                <p class="mb-0 robot-regular-16-white">{!! __('home.offer') !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-sm-8 px-ld-9 px-xl-12 pt-6 pb-4 py-lg-10 py-xl-8 align-self-stretch">
                        <h3 class="my-0 mb-4 proxima-bold-black-26 text-uppercase">{{ __('home.core') }}</h3>
                        <ul class="list-unstyled mb-5">
                            <li class="mb-1"><span class="h6 robot-bold-16-blue mr-3">01</span>{{ __('home.core1') }}
                            </li>
                            <li class="mb-1"><span class="h6 robot-bold-16-blue mr-3">02</span>{{ __('home.core2') }}
                            </li>
                            <li class="mb-1"><span class="h6 robot-bold-16-blue mr-3">03</span>{{ __('home.core3') }}
                            </li>
                            <li class="mb-1"><span class="h6 robot-bold-16-blue mr-3">04</span>{{ __('home.core4') }}
                            </li>
                            <li class="mb-1"><span class="h6 robot-bold-16-blue mr-3">05</span>{{ __('home.core5') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="robot-bold-20-purple text-uppercase">{{ __('home.our') }}</h3>
                        <h2 class="proxima-bold-black-26 text-uppercase">{{ __('home.projects') }}</h2>
                    </div>
                </div>
                <div class="row">
                    @include('projects.current')
                    @include('projects.completed')
                </div>
            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <section class="pt-7 pb-0 bg-blue-light">
            <div class="container">
                <!-- Carousel -->
                <div class="owl-carousel pb-6 px-lg-8 px-xl-12"
                     data-carousel-options='{"margin":30,"nav":true,"items":1,"loop":true,"dots":false,"autoplay":true,"autoplayTimeout":5000,"autoplayHoverPause":true}'>
                    <div class="row justify-content-center">
                        <div class="col-6 col-lg-3">
                            <img src="{{ asset('img/profile-ana.jpg') }}" alt="" class="img-fluid w-100 rounded-circle"/>
                        </div>
                        <div class="col-lg-9">
                            <blockquote class="blockquote" data-aos="zoom-out-up">
                                <p class="robot-regular-16-black">{{ __('home.ana') }}</p>
                                <footer class="blockquote-footer text-right"><span class="h5 proxima-bold-purple-26">Arina Man</span><br/><span
                                        class="review robot-regular-16-blue">kasko2go AG, CEO</span></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6 col-lg-3">
                            <img src="{{ asset('img/88.jpg') }}" alt="" class="img-fluid w-100 rounded-circle"/>
                        </div>
                        <div class="col-lg-9">
                            <blockquote class="blockquote" data-aos="zoom-out-up">
                                <p class="robot-regular-16-black">{{ __('home.joachim') }}</p>
                                <footer class="blockquote-footer text-right"><span class="h5 proxima-bold-purple-26">Dr. Jur. Joachim Thilo Senst
                                </span><br/><span class="review robot-regular-16-blue">Direktor & CEO GBT GmbH</span></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6 col-lg-3">
                            <img src="{{ asset('img/tobias.jpg') }}" alt="" class="img-fluid w-100 rounded-circle"/>
                        </div>
                        <div class="col-lg-9">
                            <blockquote class="blockquote" data-aos="zoom-out-up">
                                <p class="robot-regular-16-black">{{ __('home.tobias') }}</p>
                                <footer class="blockquote-footer text-right"><span class="h5 proxima-bold-purple-26">Tobias Zimmerli</span><br/><span
                                        class="review robot-regular-16-blue">CEO & Co-Founder visaVento Holding AG</span>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <!--
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-3">
                        <img src="{{ asset('img/profile-10.jpg') }}" alt="" class="img-fluid w-100 rounded-circle" />
                    </div>
                    <div class="col-lg-9">
                        <blockquote class="blockquote">
                            <p class="robot-regular-16-black">Integer sagittis mauris massa, at dignissim est ullamcorper eu. Sed egestas lacus ut maximus semper. Duis sed velit tristique, rutrum quam nec, laoreet libero. Pellentesque laoreet laoreet rutrum. Cras sed facilisis dolor. Integer blandit, est bibendum ornare.</p>
                            <footer class="blockquote-footer text-right"><span class="h5 proxima-bold-purple-26">Lawrence Wilson</span><br/><span class="review robot-regular-16-blue">Westfield, Business Manager</span></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-3">
                        <img src="{{ asset('img/profile-11.jpg') }}" alt="" class="img-fluid w-100 rounded-circle" />
                    </div>
                    <div class="col-lg-9">
                        <blockquote class="blockquote">
                            <p class="robot-regular-16-black">Suspendisse quis ex imperdiet, consectetur justo gravida, convallis odio. Phasellus tempor non ligula non facilisis. Maecenas vel massa nec tortor vulputate auctor. Suspendisse et neque sit amet nisi facilisis tempus in non tellus. Duis nec massa purus.</p>
                            <footer class="blockquote-footer text-right"><span class="h5 proxima-bold-purple-26">Austin Cooper</span><br/><span class="review robot-regular-16-blue">GGP, CEO</span></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-3">
                        <img src="{{ asset('img/profile-12.jpg') }}" alt="" class="img-fluid w-100 rounded-circle" />
                    </div>
                    <div class="col-lg-9">
                        <blockquote class="blockquote">
                            <p class="robot-regular-16-black">Nam pulvinar sapien nec enim vestibulum, vitae porta arcu mollis. Nam vulputate porttitor neque. Ut placerat eros quam, a congue eros efficitur sed. Fusce laoreet dui et dui congue aliquam. Suspendisse lacus libero, gravida sed massa ac, interdum efficitur lectus.</p>
                            <footer class="blockquote-footer text-right"><span class="h5 proxima-bold-purple-26">Doris Bishop</span><br/><span class="review robot-regular-16-blue">AvalonBay, CEO</span></footer>
                        </blockquote>
                    </div>
                </div>-->
                </div>
                <!-- End of Carousel -->
            </div>
        </section>
        <!-- End of Section -->
    </main>
    <!-- End of Main Content -->
@endsection
