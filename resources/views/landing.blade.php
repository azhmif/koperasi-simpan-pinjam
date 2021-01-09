<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Konstan.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="http://www.shreethemes.in" />
    <meta name="Version" content="v2.5.1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('lib/landing/images/ICON.png') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('lib/landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('lib/landing/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('lib/landing/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('lib/landing/css/owl.theme.default.min.css') }}" />
    <!-- Main Css -->
    <link href="{{ asset('lib/landing/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('lib/landing/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="index.html">
                    <img src="{{ asset('lib/landing/images/NAMA.png') }}" class="l-dark" height="20" alt="">
                    <img src="{{ asset('lib/landing/images/NAMA.png') }}" class="l-light" height="20" alt="">
                </a>
            </div>
            
            <!-- <div class="buy-button">
                <a href="https://1.envato.market/4n73n" target="_blank">
                    <div class="btn btn-konstan login-btn-primary text-light">Buy Now</div>
                    <div class="btn btn-konstan login-btn-light text-light">Buy Now</div>
                </a>
            </div> -->
            <!--end login button-->
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#why-us">Kenapa Kami</a></li>
                    <li><a href="#pelayanan">Layanan</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="{{ route('login') }}">Admin</a></li>
                </ul>
                <!--end navigation menu-->
                <!-- <div class="buy-menu-btn d-none">
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
                </div> -->
                <!--end login button-->
            </div>

            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <section class="bg-half-170 bg-carding d-table w-100" id="home"
        style="background-image: url('lib/landing/images/25101.jpg');">
        <div class="container">
            {{-- <div class="bd-example mt-0" style="text-align: center; font-size: 16px;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> --}}
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <!-- <h4 class="text-50">We are creative</h4> -->
                        <h4 class="heading title-dark"> Konstan.id <br> Company </h4>
                        <div>
                            <a class="logo" href="index.html">
                                <img src="{{ asset('lib/landing/images/ICON.png') }}" height="90" alt="">
                            </a>
                        </div>
                        <p class="para-desc mx-auto text-50 mt-4">Konstan.id bergerak dibidang teknologi dalam software
                            development, IT Training Center, & Konsultan IT.</p>
                        <div id="why-us" class="mt-4 pt-2">
                            <a href="#why-us" class="btn btn-konstan2 text-konstan">Mulai</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <!--end col-->
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- FEATURES START -->
    <section class="section pb-4 bg-konstan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="features-absolute">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div
                                    class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow-lg text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="{{ asset('lib/landing/images/project-management.svg') }}"
                                                height="100" alt="">
                                        </div>
                                    </div>

                                    <div class="card-body p-0 content mt-4">
                                        <h5 class="mt-4"><a href="javascript:void(0)"
                                                class="title text-dark">Innovative</a></h5>
                                        <p class="text-muted">Menyelesaikan permasalahan bisnis anda dengan inovasi.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-md-0 pt-2 pt-md-0">
                                <div
                                    class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="{{ asset('lib/landing/images/expert.svg') }}" height="100" alt="">
                                        </div>
                                    </div>

                                    <div class="card-body p-0 content mt-4">
                                        <h5 class="mt-4"><a href="javascript:void(0)"
                                                class="title text-dark">Expertise</a></h5>
                                        <p class="text-muted">Tim terdiri orang berkompeten & berpengalaman.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div
                                    class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="{{ asset('lib/landing/images/rating.svg') }}" height="100" alt="">
                                        </div>
                                    </div>

                                    <div class="card-body p-0 content mt-4">
                                        <h5 class="mt-4"><a href="javascript:void(0)"
                                                class="title text-dark">Satisfy</a></h5>
                                        <p class="text-muted">Tingkat kepuasan client adalah prioritas utama kami.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div
                                    class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="{{ asset('lib/landing/images/chronometer.svg') }}" height="100"
                                                alt="">
                                        </div>
                                    </div>

                                    <div class="card-body p-0 content mt-4">
                                        <h5 class="mt-4"><a href="javascript:void(0)"
                                                class="title text-dark">Effesiency</a></h5>
                                        <p class="text-muted">Jaminan waktu yang lebih singkat.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- Price Start -->
    <section id="pelayanan" class="section"
        style="background-image: url('lib/landing/images/bk4.svg'); background-repeat: no-repeat; background-size: auto;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mt-5 pb-2">
                        <h4 class="title mb-4">Layanan</h4>
                        <!-- <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center mt-4">
                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-4">
                            <h2 class="title text-uppercase mb-4">Landing Page</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <img class="mb-3" src="{{ asset('lib/landing/images/landing-page.svg') }}" height="100"
                                    alt="">
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Domain Gratis</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Hosting Gratis</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Bisa Memilih Template</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Statis & Dinamis</li>
                            </ul>
                            <!-- <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-4">
                            <h2 class="title text-uppercase mb-4">Aplikasi Berbasi Web</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="{{ asset('lib/landing/images/web.svg') }}" height="100" alt="">
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Memudahkan Bisnis Anda</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Support Maintenance</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Teknologi Terkini</li>
                            </ul>
                            <!-- <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-4">
                            <h2 class="title text-uppercase mb-4">Aplikasi Mobile</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="{{ asset('lib/landing/images/smartphone.svg') }}" height="100" alt="">
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Memudahkan Bisnis Anda</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Support Maintenance</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Teknologi Terkini</li>
                            </ul>
                            <!-- <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-4">
                            <h2 class="title text-uppercase mb-4">Augmented Reality</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="{{ asset('lib/landing/images/virtual-reality.svg') }}" height="100"
                                        alt="">
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Memudahkan Bisnis Anda</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Support Maintenance</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i
                                            class="uim uim-check-circle"></i></span>Teknologi Terkini</li>
                            </ul>
                            <!-- <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Price End -->
    </section>
    <!--end section-->
    <!-- Counter End -->

    <!-- Partners start -->
    <!-- <section class="py-4 bg-light">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title">Partner</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div>

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Partners End -->

    <!-- Testi n Download cta start -->
    <section class="section pt-0 pb-0 bg-light">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-2 mt-4 pb-2">
                        <h4 class="title mb-4">Our Clients</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 mt-4 pt-2">
                    {{-- <div> --}}

                        <div class="card border-0 text-center bg-light">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="{{ asset('lib/landing/images/app.png') }}" height="500"
                                        class="avatar avatar-ex-large" alt="">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center bg-light">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="{{ asset('lib/landing/images/melancong.jpg') }}"
                                        class="avatar avatar-ex-large" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="card customer-testi border-0 text-center bg-light">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="{{ asset('lib/landing/images/client/google.svg') }}"
                                        class="avatar avatar-ex-sm" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="card customer-testi border-0 text-center bg-light">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="{{ asset('lib/landing/images/client/google.svg') }}"
                                        class="avatar avatar-ex-sm" alt="">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tim End -->

    <!-- Testi n Download cta start -->
    <!-- <section class="section pt-0">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Tim</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="customer-testi" class="owl-carousel owl-theme">
        
                        <div class="card customer-testi border-0 text-center">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow mx-auto text-center" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body py-3 px-0 content">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Fauzal Azhmi</a></h5>
                                    <small class="designation text-muted">C.E.O</small>
                                </div>
                            </div>
                        </div>

                        <div class="card customer-testi border-0 text-center">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body py-3 px-0 content">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Muhammad Hanafi</a></h5>
                                    <small class="designation text-muted">C.E.O</small>
                                </div>
                            </div>
                        </div>

                        <div class="card customer-testi border-0 text-center">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body py-3 px-0 content">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Novri Kurniawan</a></h5>
                                    <small class="designation text-muted">Developer</small>
                                </div>
                            </div>
                        </div>

                        <div class="card customer-testi border-0 text-center">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body py-3 px-0 content">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">M. Afdhal Fadillah</a></h5>
                                    <small class="designation text-muted">Developer</small>
                                </div>
                            </div>
                        </div>

                        <div class="card customer-testi border-0 text-center">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body py-3 px-0 content">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Emil</a></h5>
                                    <small class="designation text-muted">UI/UX</small>
                                </div>
                            </div>
                        </div>
                        

                        <div class="card customer-testi border-0 text-center">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body py-3 px-0 content">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ari Ismanto</a></h5>
                                    <small class="designation text-muted">Design</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Tim End -->

    <div id="faq" class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="faq-content mr-lg-5">
                    <div class="accordion" id="accordionExampleone">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="section-title text-left mb-2 pb-2">
                                    <h1 class="title mb-4"><b>Frequently Asked Questions</b></h1>
                                    <!-- <p class="text-muted para-desc mb-0">Start working with <span
                                            class="text-primary font-weight-bold">Landrick</span> that can provide everything you
                                        need to generate awareness, drive traffic, connect.</p> -->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <div class="card border-0 rounded mb-2">
                            <a data-toggle="collapse" href="#collapseone" class="faq position-relative collapsed"
                                aria-expanded="false" aria-controls="collapseone">
                                <div class="card-header border-0 bg-light p-3 pr-5" id="headingfifone">
                                    <h6 class="title mb-0"> Berapa Harga Pembuatan Website ?
                                    </h6>
                                </div>
                            </a>
                            <div id="collapseone" class="collapse" aria-labelledby="headingfifone"
                                data-parent="#accordionExampleone">
                                <div class="card-body px-2 py-4">
                                    <p class="text-muted mb-0 faq-ans">Mengenai harga bisa di negosiasikan pada saat
                                        kedua belah pihak bertemu. Untuk kerumitan & kelengkapan data website juga
                                        menjadi salah satu komponen penentu harga.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 rounded mb-2">
                            <a data-toggle="collapse" href="#collapsetwo" class="faq position-relative collapsed"
                                aria-expanded="false" aria-controls="collapsetwo">
                                <div class="card-header border-0 bg-light p-3 pr-5" id="headingtwo">
                                    <h6 class="title mb-0"> Data Apa Saja Yang Harus Klien Berikan ? </h6>
                                </div>
                            </a>
                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                data-parent="#accordionExampleone">
                                <div class="card-body px-2 py-4">
                                    <p class="text-muted mb-0 faq-ans">Untuk keperluan Aplikasi yang dibuat, klien wajib
                                        menyerahkan data-data untuk pengisian konten, fitur, gambar & logo yang akan
                                        ditampilkan diwebsite, dsb. Jika klien tidak memiliki sama sekali kami akan
                                        membantu memenuhinya sebisa yang kami mampu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 rounded mb-2">
                            <a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed"
                                aria-expanded="false" aria-controls="collapsethree">
                                <div class="card-header border-0 bg-light p-3 pr-5" id="headingthree">
                                    <h6 class="title mb-0"> Jangka Waktu Pengerjaan ? </h6>
                                </div>
                            </a>
                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                data-parent="#accordionExampleone">
                                <div class="card-body px-2 py-4">
                                    <p class="text-muted mb-0 faq-ans">Untuk waktu pengerjaannya kami memberikan
                                        pelayanan terbaik bagi klien. Lamanya waktu pengerjaan tergantung dari data dan
                                        kerumitan sistem yang akan dibuat. Untuk jangka waktu(estimasi) pengerjaan
                                        sesuai kesepakatan yang telah ditentukan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 rounded mb-2">
                            <a data-toggle="collapse" href="#collapsefour" class="faq position-relative collapsed"
                                aria-expanded="false" aria-controls="collapsefour">
                                <div class="card-header border-0 bg-light p-3 pr-5" id="headingfour">
                                    <h6 class="title mb-0"> Berapa Lama Masa Kontrak Website ? </h6>
                                </div>
                            </a>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordionExampleone">
                                <div class="card-body px-2 py-4">
                                    <p class="text-muted mb-0 faq-ans">Untuk masa kontrak kerja dibicarakan lebih lanjut
                                        pada saat kedua belah pihak bertemu.</p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card border-0 rounded">
                            <a data-toggle="collapse" href="#collapsefive2" class="faq position-relative collapsed"
                                aria-expanded="false" aria-controls="collapsefive2">
                                <div class="card-header border-0 bg-light p-3 pr-5" id="headingfive2">
                                    <h6 class="title mb-0"> How can i contact your technical team ? </h6>
                                </div>
                            </a>
                            <div id="collapsefive2" class="collapse" aria-labelledby="headingfive2"
                                data-parent="#accordionExampleone">
                                <div class="card-body px-2 py-4">
                                    <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <img src="{{ asset('lib/landing/images/task/task.svg') }}" alt="">
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->


    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-1 order-md-2">
                <div class="card shadow rounded border-0">
                    <div class="card-body py-5">
                        <h4 class="card-title">Get In Touch !</h4>
                        <div class="custom-form mt-4">
                            <div id="message"></div>
                            <form method="post" action="/komen" name="contact-form" id="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Nama Lengkap <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input name="nama" id="name" type="text" class="form-control pl-5"
                                                placeholder="Masukan Nama" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input name="email" id="email" type="email" class="form-control pl-5"
                                                placeholder="Masukan Email" required>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <!-- <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Subject</label>
                                            <i data-feather="book" class="fea icon-sm icons"></i>
                                            <input name="subject" id="subject" type="text" class="form-control pl-5"
                                                placeholder="Subject">
                                        </div>
                                    </div> -->
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Pesan</label>
                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                            <textarea name="komentar" id="comments" rows="4" class="form-control pl-5"
                                                placeholder="Masukan Pesan" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" id="submit" class="submitBnt btn btn-primary btn-block"
                                            value="Kirim Pesan" onclick="alert('Pesan Berhasil Dikirim')">
                                        <div id="simple-msg"></div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end custom-form-->
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <img src="{{ asset('lib/landing/images/contact.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <p>Terus Berinovasi Bersama Kami Dengan Konstan.id</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!--end icon-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Company</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                               Beranda</a></li>
                        <li><a href="#why-us" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Kenapa Kami</a></li>
                        <li><a href="#pelayanan" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Layanan</a></li>
                        <li><a href="#faq" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                FAQ</a></li>
                        <li><a href="{{ route('login') }}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Admin</a></li>
                        {{-- <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Careers</a></li>
                        <li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Blog</a></li>
                        <li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Login</a></li> --}}
                    </ul>
                </div>
                <!--end col-->

                {{-- <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Usefull Links</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms
                                of Services</a></li>
                        <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Privacy Policy</a></li>
                        <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Documentation</a></li>
                        <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Changelog</a></li>
                        <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Components</a></li>
                    </ul>
                </div> --}}
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© Konstan.id 2020.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a class="fixed-whatsapp" href="https://api.whatsapp.com/send?phone=6285247215234" rel="nofollow noopener"
        target="_blank" title="Whatsapp" />
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('lib/landing/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/landing/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('lib/landing/js/scrollspy.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('lib/landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/landing/js/owl.init.js') }}"></script>
    <!-- Icons -->
    <script src="{{ asset('lib/landing/js/feather.min.js') }}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('lib/landing/js/app.js') }}"></script>
</body>

</html>