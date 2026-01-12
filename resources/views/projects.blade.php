@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="main minh-100vh">
        <!-- Section -->
        <section class="py-0 overflow-hidden text-center extraextra">
            <div class="bg-container parallax" data-rellax-percentage="0.5"
                 style="background-image: url({{ asset('/img/projects3.jpg') }})"></div>
            <div class="container">


                <div class="row align-items-center">
                    <div class="col">
                        <p class="abc-proxima-bold-white-30 text-uppercase animated slideInLeft delay-1s"
                           style="margin-top:200px;" data-aos="zoom-in" data-aos-duration="1000">SUSTAINABLE AND
                            INNOVATIVE</p>
                        <h1 class="proxima-extra-condensed-105 text-uppercase animated slideInRight delay-1s">{!! __('projects.1') !!}</h1>
                    </div>
                </div>


            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <section class="pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-7 mb-lg-0">
                        <h3 class="robot-bold-20-purple text-uppercase">{!! __('projects.current') !!}</h3>
                        <h2 class="proxima-bold-black-26 text-uppercase">{!! __('projects.projects') !!}</h2>
                        <br><br>
                        <p class="mb-4 robot-regular-16-second-black">{!! __('projects.2') !!}</p><br>
                    </div>
                </div>
                <div class="row">
                    @include('projects.current')
                </div>
            </div>
        </section>
        <!-- End of Section -->

        <section class="pb-18">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-7 mb-lg-0">
                        <h3 class="robot-bold-20-purple text-uppercase">{!! __('projects.completed') !!}</h3>
                        <h2 class="proxima-bold-black-26 text-uppercase">{!! __('projects.projects2') !!}</h2>
                        <br><br>
                        <p class="mb-4 robot-regular-16-second-black"></p><br>
                    </div>
                </div>
                <div class="row">
                    @include('projects.completed')
                </div>
            </div>
        </section>
        <!-- End of Section -->

    </main>
    <!-- End of Main Content -->
@endsection
