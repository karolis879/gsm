<!-- Preloader -->
<!--<div class="preloader">
    <div class="spinner">
        <div class="circles"></div>
    </div>
</div>-->
<!-- End of Preloader -->

<!-- Header -->
@if (Request::path() == '/')
    <header class="spyre-navbar navbar navbar-expand-lg bg-secondary fixed-top align-items-center" data-text-color="#ffffff">
@else
    <header class="spyre-navbar navbar navbar-expand-lg bg-secondary fixed-top align-items-center" data-text-color="#ffffff">
@endif
    <div class="container">
        <a class="navbar-brand mr-lg-5 mr-xl-7" href="{{ url('/')}}">
            <img src="{{ asset('/img/logo-tran-2x.png') }}" class="d-none d-lg-block" alt="Global Service Management AG" width="207" />
            <img src="{{ asset('/img/logo-tran-2x.png') }}" class="d-block d-lg-none" alt="Global Service Management AG" width="100" style="" />
        </a>
        <span class="navbar-text flex-fill d-none d-md-inline-block">
            <!--<a href="#" class="robot-regular-16-black mr-4">info@gsmanagement.ch</a><a href="#" class="robot-regular-16-black">+41(0) 43 322 22 11</a>-->
            <a href="{{ url('/about-us')}}" class="proxima-bold-white-18 {{ (request()->is('about-us')) ? 'active10' : '' }}">{{ __('menu.about') }}</a>
            <a href="{{ url('/services')}}" class="proxima-bold-white-18 {{ (request()->is('services')) ? 'active10' : '' }}">{{ __('menu.services') }}</a>
            <a href="{{ url('/projects')}}" class="proxima-bold-white-18 {{ (request()->is('projects')) ? 'active10' : '' }}">{{ __('menu.projects') }}</a>
            <a href="{{ url('/carrers')}}" class="proxima-bold-white-18 {{ (request()->is('carrers')) ? 'active10' : '' }}">{{ __('menu.carrers') }}</a>
            <a href="{{ url('/contact-us')}}" class="proxima-bold-white-18 {{ (request()->is('contact-us')) ? 'active10' : '' }}">{{ __('menu.contact') }}</a>
        </span>

        <div class="search d-none d-lg-flex justify-content-end ml-auto mr-2">
            @if ( Config::get('app.locale') == 'de')
                <a href="{{ url('locale/en') }}"><img src="{{ asset('/img/EN.svg') }}" class="d-none d-lg-block"></a>
            @elseif ( Config::get('app.locale') == 'en' )
                <a href="{{ url('locale/de') }}"><img src="{{ asset('/img/DE.svg') }}" class="d-none d-lg-block"></a>
            @endif
        </div>

        <div class="menu-toggle d-lg-none">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="cross">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="spyre-navbar-overlay overlay-slide">
        <div class="container">
            <div class="row">
                <div class="spyre-navbar-nav-container col-md-6 col-lg-5 col-xl-4 bg-white ext-l">
                    <nav class="spyre-navbar-nav">
                        <ul class="spyre-nav">
                            <li class="spyre-nav-item"><a href="{{ url('/about-us')}}" class="spyre-nav-link {{ (request()->is('about-us')) ? 'active' : '' }}">{{ __('menu.about') }}</a></li>
                            <li class="spyre-nav-item"><a href="{{ url('/services')}}" class="spyre-nav-link {{ (request()->is('services')) ? 'active' : '' }}">{{ __('menu.services') }}</a></li>
                            <li class="spyre-nav-item"><a href="{{ url('/projects')}}" class="spyre-nav-link {{ (request()->is('projects')) ? 'active' : '' }}">{{ __('menu.projects') }}</a></li>
                            <li class="spyre-nav-item"><a href="{{ url('/carrers')}}" class="spyre-nav-link {{ (request()->is('carrers')) ? 'active' : '' }}">{{ __('menu.carrers') }}</a></li>
                            <li class="spyre-nav-item"><a href="{{ url('/contact-us')}}" class="spyre-nav-link {{ (request()->is('contact-us')) ? 'active' : '' }}">{{ __('menu.contact') }}</a></li>
                            <li class="spyre-nav-item">
                                @if ( Config::get('app.locale') == 'de')
                                    <a href="{{ url('locale/en') }}" class="spyre-nav-link"><img src="{{ asset('/img/EN.svg') }}"></a>
                                @elseif ( Config::get('app.locale') == 'en' )
                                    <a href="{{ url('locale/de') }}" class="spyre-nav-link"><img src="{{ asset('/img/DE.svg') }}"></a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>    <p></p>

                <div class="col-lg-7 col-xl-8 d-none d-md-block">
                    <div class="d-flex flex-column h-100">
                        <div class="d-flex h-100">
                            <div class="align-self-center">
                                <div class="text-uppercase"
                                    data-background-text="communication"
                                    data-color="#7079a2"
                                    data-opacity="0.02"
                                    data-font-size="85px"
                                    data-font-weight="500"
                                    data-offset-x="-5%"
                                    data-letter-spacing="5px"
                                ></div>
                                <div class="text-uppercase"
                                    data-background-text="planning"
                                    data-color="#7079a2"
                                    data-opacity="0.04"
                                    data-font-size="175px"
                                    data-font-weight="500"
                                    data-offset-x="29%"
                                    data-padding="7vh 0 2vh 0"
                                    data-letter-spacing="5px"
                                ></div>
                                <div class="text-uppercase"
                                    data-background-text="delivering"
                                    data-color="#7079a2"
                                    data-opacity="0.03"
                                    data-font-size="140px"
                                    data-font-weight="500"
                                    data-offset-x="15%"
                                    data-letter-spacing="5px"
                                ></div>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <ul class="nav flex-nowrap float-right">
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="#" target="_blank">
                                        <i class="zmdi zmdi-twitter text-white"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="#" target="_blank">
                                        <i class="zmdi zmdi-instagram text-white"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="#" target="_blank">
                                        <i class="zmdi zmdi-facebook-box text-white"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="#" target="_blank">
                                        <i class="zmdi zmdi-pinterest text-white"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="#" target="_blank">
                                        <i class="zmdi zmdi-flickr text-white"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="#" target="_blank">
                                        <i class="zmdi zmdi-youtube text-white"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Overlay -->
</header>
<!-- End of Header -->
