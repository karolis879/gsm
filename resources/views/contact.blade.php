@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="main minh-100vh">
        <!-- Section -->
        <section class="py-0 overflow-hidden text-center extraextra">
            <div class="bg-container parallax" data-rellax-percentage="0.5"
                 style="background-image: url({{ asset('/img/contact3.jpg') }})"></div>
            <div class="container">

                <div class="row align-items-center">
                    <div class="col">
                        <p class="abc-proxima-bold-white-30 text-uppercase animated slideInLeft delay-1s"
                           style="margin-top:200px;" data-aos="zoom-in"
                           data-aos-duration="1000">{!! __('contact.questions') !!}</p>
                        <h1 class="proxima-extra-condensed-105 text-uppercase animated slideInRight delay-1s">{!! __('contact.1') !!}</h1>
                    </div>
                </div>

            </div>
        </section>
        <!-- End of Section -->

        <!-- Section -->
        <section id="section-2" class="pb-0">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="robot-bold-20-purple text-uppercase">Get in touch</h3>
                        <h2 class="proxima-bold-black-26 text-uppercase mb-2">{!! __('contact.1') !!}</h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="mb-6 robot-regular-16-second-black">Global Services Management AG
                            <br>Usteristrasse 19
                            <br>CH-8001 Zürich<br> <a href="tel:+410433222211" class="robot-regular-16-second-black">+41(0)
                                43 322 22 11</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6">
                        <iframe style="border: 0;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1966.6090171461815!2d8.528961930805702!3d47.372341943868356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a04dd93034d%3A0x59bc7ef2daaa9813!2sGlobal+Services+Management+AG!5e0!3m2!1sde!2sch!4v1502966753360"
                                width="100%" height="474" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <div class="col-md-6 bg-blue-light overflow-hidden">
                        <div class="row h-100 align-items-center">
                            <form class="col px-5 px-lg-8 py-6 py-lg-0" name="contactform" method="post"
                                  action="send_form_email.php">
                                <div class="form-group mb-4">
                                    <input type="text" required class="form-control" name="first_name" id="name"
                                           placeholder="{!! __('contact.name') !!}"
                                           style="font-family: 'Roboto', sans-serif !important;">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="email" required class="form-control" name="email" id="email"
                                           placeholder="{!! __('contact.email') !!}"
                                           style="font-family: 'Roboto', sans-serif !important;">
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control" required rows="8" name="comments" id="message"
                                              placeholder="{!! __('contact.message') !!}"
                                              style="font-family: 'Roboto', sans-serif !important;"></textarea>
                                </div>
                                <button type="submit button" value="Submit"
                                        class="btn btn-primary btn-block">{!! __('contact.send') !!}<i
                                        class="zmdi zmdi-mail-send ml-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

    </main>
    <!-- End of Main Content -->
@endsection
