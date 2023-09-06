<!DOCTYPE html>
<html lang="en{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Montserrat start -->
    <link
        href="https://fonts.googleapis.com/css2?family=Buenard:wght@400;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Montserrat end -->
    <!-- poppins font start -->
    <link
        href="https://fonts.googleapis.com/css2?family=Buenard:wght@400;700&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
        <!-- poppins font end -->
        <!-- raleway font start-->
        <link
            href="https://fonts.googleapis.com/css2?family=Buenard:wght@400;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet">
        <!-- raleway font end -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend_assets') }}/images/gateway_logo.svg">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/responsive.css">

    <!-- Custom Stylesheet -->
    <title>Gateway Overseas</title>
</head>
    <body>
        <!-- =======================
            header part start
        =========================== -->
        <header class="text-white text-center py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 head_width_resp">
                        <div class="header_left_item">
                            <div class="header_mail">
                                <a href="mailto::info@gatewaystudiesbd.com">
                                    <i class="fa-regular fa-envelope"></i>info@gatewaystudiesbd.com
                                </a>
                                <a href="tel::017 666 666 83-63">
                                    <i class="fa-solid fa-phone-volume"></i>017 666 666 83-84
                                </a>
                            </div>
                            <div class="social_icons" style="width: 100px">
                                <a href="https://www.facebook.com/profile.php?id=100070130896267">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 sm:block" style="text-align: right;">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-lg text-gray-700 dark:text-gray-500 underline text-white">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-lg mx-2 text-gray-700 dark:text-gray-500 underline text-white">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-lg mx-2 text-gray-700 dark:text-gray-500 underline text-white">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div> --}}
                </div>
            </div>
        </header>
        <!-- =======================
                header part end
            =========================== -->
        <!-- =======================
            navbar part start
        =========================== -->
        <nav id="navber_part" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="logo_width_bg navbar-brand text-white" href="{{ url('/') }}">
                    <div class="gateway_logo">
                        <img src="{{ asset('frontend_assets') }}/images/gateway_logo.svg" alt="gateway_logo.svg">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars text-white"></i>
                </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto nav_list_font">
                        <li class="nav-item"><a class="nav-link" href="{{ route('overseas.studies') }}">Oversease Studies</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('schooling.visa') }}">Schooling Visa</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('ielts') }}">IELTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#countries">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="#incorporatation_part">Incorporated With</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- =======================
                navbar part end
            =========================== -->
        {{-- =====frontend content start --}}
        @yield('frontend_content')
        {{-- =====frontend content end --}}
        <!-- =======================
        incorporation part start
        =========================== -->
        <section id="incorporatation_part">
            <div class="section-title text-center mb-4 pb-4">
                <h3 style="color: purple;">Incorporated With</h3>
                <div class="section-title-bar"></div>
            </div>

            <div class="container brands_marg_resp">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gate_corpo_bsti.jpg" alt="gate_corpo_bsti.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_border.jpg" alt="gateway_border.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_british_ielts.jpg" alt="gateway_british_ielts.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_civil.jpg" alt="gateway_cvil.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_buet.jpg" alt="gateway_buet.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_dgdp.jpg" alt="gateway_dgdp.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_health.jpg" alt="gateway_health.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_idp_ielts.jpg" alt="gateway_idp_ielts.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_lion.jpg" alt="gateway_lion.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/gateway_dcci.jpg" alt="gateway_dcci.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/pearson.jpg" alt="pearson.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img class="indivi_height_img" src="{{ asset('frontend_assets') }}/images/SME Foundation.jpg" alt="SME Foundation.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img src="{{ asset('frontend_assets') }}/images/basis.jpg" alt="basis.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img class="indivi_height_img" src="{{ asset('frontend_assets') }}/images/biaa.jpg" alt="biaa.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <div class="incorpo_item">
                            <div class="corpo_img">
                                <img class="indivi_height_img" src="{{ asset('frontend_assets') }}/images/atab.jpg" alt="atab.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
            incorporation part end
        =========================== -->
        <!-- =======================
            gateway location part start
        =========================== -->
        <section id="gateway_location_part">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gate_location" style="margin-bottom: -6px">
                        <iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501.450586079719!2d90.37432783422393!3d23.740526362848787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4aca6f8aff%3A0xa9f72de7ceb15d77!2sGateway%20Group!5e0!3m2!1sen!2sbd!4v1692532479668!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
            gateway location part end
        =========================== -->
        <!-- =======================
            contact part start
        =========================== -->
        <section id="contact_part" style="position: relative">
            <div class="container">
                <div class="row">
                    <div class="contact_item_padd col-xs-6 col-sm-6 col-lg-3 py-4">
                        <div class="contact_item">
                            <h3 class="mb-3">Company</h3>
                            <div class="section_title_bar"></div>
                                <ul class="contact_list_style">
                                    <li>
                                        <a href="#banner_part">Sister Concern of</a>
                                    </li>
                                    <li>
                                        <a href="#banner_part">Gateway Group</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('privacy.policy') }}">Terms and conditions</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="contact_item_padd col-xs-6 col-sm-6 col-lg-3 py-4">
                        <div class="contact_item">
                            <h3 class="mb-3">Services</h3>
                            <div class="section_title_bar"></div>
                            <ul class="contact_list_style">
                                <li>
                                    <a href="#banner_part">Study Abroad</a>
                                </li>
                                <li>
                                    <a href="#banner_part">Schooling Visa</a>
                                </li>
                                <li>
                                    <a href="#banner_part">IELTS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact_item_padd col-xs-12 col-sm-12 col-lg-6 py-4">
                        <div class="contact_item">
                            <h3 class="mb-3">Gateway Overseas Studies</h3>
                            <div class="section_title_bar"></div>
                            <div class="conatct_location">
                                <a href="#gateway_location_part">Gateway Center #55/A, 4th Floor, Road #4/A, (Satmasjid Road, Beside ULAB University), Dhanmondi, Dhaka-1209.</a>
                                    <a href="mailto::info@gatewaystudiesbd.com">
                                        <i class="fa-regular fa-envelope"></i>
                                        info@gatewaystudiesbd.com
                                    </a><br>
                                    <a href="tel::017 666 666 83-63">
                                        <i class="fa-solid fa-phone-volume">
                                        </i>017 666 666 83
                                    </a><br>
                                    <a href="tel::017 666 666 83-63">
                                        <i class="fa-solid fa-phone-volume">
                                        </i>017 666 666 84
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btm_border_contact"></div>
            </div>
        </section>
        <!-- =======================
            contact part end
        =========================== -->
        <!-- =======================
            footer part start
        =========================== -->
        <footer id="footer_part" class="bg-purple text-white text-center py-2">
            <div class="container">
                <p>All rights reserved to Gateway IT.</p>
                <div class="row" style="position: relative">
                    <div class="contact_social_icon">
                        <a href="https://www.facebook.com/profile.php?id=100070130896267">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter marg_contact_icon"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- =======================
            footer part end
        =========================== -->
        {{-- =====script start --}}
        <script src="{{ asset('frontend_assets') }}/js/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/slick.min.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/jquery.syotimer.min.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/syotimer.examples.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/service.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/script.js"></script>
        {{-- =====script end --}}
    </body>
</html>
