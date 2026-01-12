@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="main minh-100vh">
        <!-- Section -->
        <section class="py-0 overflow-hidden text-center extraextra">
            <div class="bg-container parallax" data-rellax-percentage="0.5"
                 style="background-image: url({{ asset('/img/about3.jpg') }})"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <p class="abc-proxima-bold-white-30 text-uppercase animated slideInLeft delay-1s"
                           style="margin-top:200px;" data-aos="zoom-in" data-aos-duration="1000">OUR EXPERIENCE
                            SPEAKS</p>
                        <h1 class="proxima-extra-condensed-105 text-uppercase animated slideInRight delay-1s">{{ __('about.1') }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <section class="pb-0 mb-6">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 mb-7 mb-lg-0">
                        <h3 class="robot-bold-20-purple text-uppercase">{{ __('about.1') }}</h3>
                        <h2 class="proxima-bold-black-26 text-uppercase mb-4">{{ __('about.company') }}</h2>
                        <p class="mb-4 robot-regular-16-second-black">{!! __('about.2') !!}</p>
                        <a href="{{ url('/services')}}"
                           class="btn btn-grey btn-lg mt-4 px-6 text-uppercase">{!! __('about.our-services') !!}</a>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/img-41.jpg') }}" class="img-fluid w-100 mb-4 mb-lg-0" alt=""/>
                        <img src="{{ asset('/img/img-42.jpg') }}" class="img-fluid w-100 ml-lg-neg-7 mt-lg-neg-9"
                             alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <!--<section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="robot-bold-20-purple text-uppercase">Our Team</h3>
                    <h2 class="proxima-bold-black-26 text-uppercase">Leadership</h2>
                </div>
            </div>
            <div class="card-columns mt-neg-5">
                <div class="card mt-6">
                    <div class="px-3 mt-neg-4">
                        <img src="{{ asset('') }}" class="card-img" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title mb-0 text-uppercase proxima-regular-black-26">Branko T. Kunovic</h6>
                        <p class="card-text mb-3 fs--1 text-primary robot-regular-16-blue">Partner</p>
                        <p class="card-text fs--1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                </div>
                <div class="card mt-6">
                    <div class="px-3 mt-neg-4">
                        <img src="{{ asset('') }}" class="card-img" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title mb-0 text-uppercase proxima-regular-black-26">Dave Loremipsum</h6>
                        <p class="card-text mb-3 fs--1 text-primary robot-regular-16-blue">Partner</p>
                        <p class="card-text fs--1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                </div>
                <div class="card mt-6">
                    <div class="px-3 mt-neg-4">
                        <img src="{{ asset('') }}" class="card-img" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title mb-0 text-uppercase proxima-regular-black-26">Yeti Loremipsum</h6>
                        <p class="card-text mb-3 fs--1 text-primary robot-regular-16-blue">Member of the Board </p>
                        <p class="card-text fs--1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                </div>
                <div class="card mt-6">
                    <div class="px-3 mt-neg-4">
                        <img src="{{ asset('') }}" class="card-img" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title mb-0 text-uppercase proxima-regular-black-26">Veli Incesu</h6>
                        <p class="card-text mb-3 fs--1 text-primary robot-regular-16-blue">Member of the Board</p>
                        <p class="card-text fs--1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

        <!-- Section -->
        <section style="padding-top:1rem !important;">
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
        <section class="py-0">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-md-6 py-8">
                        <div class="bg-container" style="background-image: url({{ asset('/img/our.jpg') }});"></div>
                    </div>
                    <div class="col-md-6 py-6 py-lg-8 overflow-hidden" style="background-color: #F3F8FC !important;">
                        <div class="row h-100 align-items-center">
                            <div class="col px-5 px-lg-8 px-xl-10">
                                <h3 class="robot-bold-20-purple text-uppercase">{{ __('about.our') }}</h3>
                                <h2 class="mb-4 proxima-bold-black-26 text-uppercase">{{ __('about.serices') }}</h2>
                                <p class="mb-0 fs--1">{{ __('about.our-serices-text') }}</p>
                                <a href="{{ url('/services')}}"
                                   class="btn btn-purple btn-lg mt-4 px-6">{{ __('about.see-our-serices') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

    </main>
    <!-- End of Main Content -->
@endsection
