<!-- Footer -->
<footer class="footer text-white"
        style="background-image: url({{ asset('/img/footer.png') }}); background-repeat: no-repeat; background-position: top right;">
    <div class="container d-flex">
        <div class="row flex-grow-1 row justify-content-center">
            <div class="col d-flex flex-column mb-2 mt-3">
                <div class="row pt-5 pt-lg-8 pb-4 pb-lg-6 justify-content-center">
                    <div class="col-12 col-lg-3 text-center text-lg-left">
                        <div class="pb-4">
                            <h6 class="mb-1 mb-lg-4 raleway-semi-white-26 text-uppercase">{{ __('menu.contact') }}</h6>
                            <ul class="pt-2 mb-5 fw-light list-unstyled">
                                <p class="mb-4 mt-2">
                                    Global Services Management AG<br/>
                                    Usteristrasse 19<br/>
                                    CH-8001 Zürich<br/>
                                </p>
                                <p><span class="text-white"><i class="zmdi zmdi-phone zmdi-hc-fw mr-1"></i><a
                                            href="tel:+410433222211"
                                            class="text-white">+41(0) 43 322 22 11</a></span><br/>
                                    <a href="mailto:info@gsmanagement.ch" class="text-white"><i
                                            class="zmdi zmdi-email zmdi-hc-fw mr-1"></i>info@gsmanagement.ch</a></p>
                                <a href="#" class="mr-1 text-white"><span class="fs--3 fs-lg--2">Find us on LinkedIn <i
                                            class="zmdi zmdi-linkedin text-white"></i></span></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 text-center text-lg-left">
                        <h6 class="mb-1 mb-lg-4 raleway-semi-white-26 text-uppercase">Menu</h6>
                        <ul class="pt-2 mb-5 fw-light list-unstyled">
                            <li class="my-1"><a href="/about-us" class="text-white">{{ __('menu.about') }}</a></li>
                            <li class="my-1"><a href="/services" class="text-white">{{ __('menu.services') }}</a></li>
                            <li class="my-1"><a href="/projects" class="text-white">{{ __('menu.projects') }}</a></li>
                            <li class="my-1"><a href="/carrers" class="text-white">{{ __('menu.carrers') }}</a></li>
                            <li class="my-1"><a href="/contact-us" class="text-white">{{ __('menu.contact') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 text-center text-lg-left">
                        <h6 class="mb-1 mb-lg-4 raleway-semi-white-26 text-uppercase">Information</h6>
                        <ul class="pt-2 mb-5 fw-light list-unstyled">
                            <li class="my-1"><a href="/terms-conditions" class="text-white">{!! __('terms.1') !!}</a>
                            </li>
                            <!--<li class="my-1"><a href="#" class="text-white">Swiss Disclaimer</a></li>-->
                        </ul>
                        <a href="https://www.regservices.ch/beraterregister/beratersuche/" target="_blank">
                            <img src="https://www.gsmanagement.ch/img/bx_158.jpg" width="158"
                                 style="margin-top: 36px;">
                        </a>
                        <br />
                        <a href="https://svc.swiss/" target="_blank">
                            <img src="https://www.gsmanagement.ch/img/swissventureclub.png" width="158"
                                 style="margin-top: 36px;">
                        </a>
                    </div>
                </div>

                <div class="text-center copy justify-content-center">
                    <span class="">&copy; <?php echo date('Y') ?> Global Services Management AG</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->
