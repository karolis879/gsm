@extends('layouts.app')

@section('content')
<!-- Main Content -->
<main class="main minh-100vh">
    <!-- Section -->
    <section class="py-0 overflow-hidden text-center extraextra">
        <div class="bg-container parallax" data-rellax-percentage="0.5" style="background-image: url({{ asset('/img/carreers3.jpg') }})"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                        <p class="abc-proxima-bold-white-30 text-uppercase animated slideInLeft delay-1s" style="margin-top:200px;" data-aos="zoom-in" data-aos-duration="1000">EXCELLENT AND CHALLENGING</p>
                    <h1 class="proxima-extra-condensed-105 text-uppercase animated slideInRight delay-1s">{!! __('carrier.1') !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section -->

    <!-- Section -->
    <section class="pb-7">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <h3 class="robot-bold-20-purple text-uppercase">Join Us</h3>
                    <h2 class="proxima-bold-black-26 text-uppercase mb-2">{!! __('carrier.vacancies') !!}</h2>
                    <br>
                    <p class="mb-4 robot-regular-16-second-black">{!! __('carrier.2') !!}</p>

                    <a href="{{ asset('/img/Stellenbeschrieb-GSM-NEU.pdf') }}" download class="btn btn-grey btn-lg mt-4 px-6">DOWNLOAD PDF</a>
                    <br>
                    <br>
                    <br>
                    <p class="mb-4 robot-regular-16-second-black">{!! __('carrier.3') !!}</p>
                        <b>Global Services Management AG</b><br>
                        Usteristrasse 19<br>
                        CH-8001 Zurich<br>
                        <a class="robot-regular-16-second-black" href="/contact-us">Contact Us</a><br><br>
                    </p>

                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/img-51.jpg') }}" class="img-fluid w-100 mb-4 mb-lg-0" alt="" />
                    <img src="{{ asset('/img/img-52.jpg') }}" class="img-fluid w-100 ml-lg-neg-7 mt-lg-neg-9" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section -->
</main>
<!-- End of Main Content -->
@endsection
