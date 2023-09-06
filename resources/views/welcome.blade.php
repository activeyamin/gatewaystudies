@extends('layouts.frontend_master')
@section('frontend_content')
    <!-- =======================
        banner part html start
    =========================== -->
    <section id="banner_part">
        <div class="banner_slider_box text-white">
            <div class="banner_slider_item1 banner_slice_item_width">
                    <div class="banner_overlay">
                        <div class="banner_slide_contents px-4 text-white">
                            <h1>
                                Apply for your higher studies in USA and Canada
                            </h1>
                            <button class="btn mt-5">
                                <a style="font-size: 22px; font-weight: 600; color: white;" href="{{ route('appointment.index') }}">Book a free counselling</a>
                            </button>
                        </div>
                    </div>
            </div>
            <div class="banner_slider_item2 banner_slice_item_width">
                <div class="banner_overlay">
                    <div class="banner_slide_contents px-4 text-white">
                        <h1>Apply for Schooling visa USA and Canada</h1>
                        <button class="btn mt-5">
                            <a style="font-size: 22px; font-weight: 600; color: white; "
                                href="{{ route('appointment.index') }}">Book a free counselling</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="banner_slider_item3 banner_slice_item_width">
                    <div class="banner_overlay">
                        <div class="banner_slide_contents px-4 text-white">
                            <h1>Prepare for IELTS and book your IELTS exam date</h1>
                            <button class="btn mt-5">
                                <a style="font-size: 22px; font-weight: 600; color: white;"
                                    href="{{ route('appointment.index') }}" target="_blank">Book a free counselling</a>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- =======================
        banner part html start
    =========================== -->
    <!-- =======================
        road map part start
    =========================== -->
    <section id="travel_road_map_part">
        <div class="container">
            <div class="section-title text-center my-3 py-3">
                <h3 style="color: purple;">How We Work</h3>
                <div class="section-title-bar"></div>
            </div>
            <div class="row center_travel_road">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                    <div class="travel_img">
                        <img src="{{ asset('frontend_assets') }}/images/admission roadmap.png" alt="road_map.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        road map part end
    =========================== -->
    <!-- =======================
        every step part start
    =========================== -->
    <section id="every_step_part">
        <div class="title text-center mb-4">
            <h3 class="every_step_head_font">With you at every step - from one point to another</h3>
        </div>
        <div class="container">
            <div class="row every_step_align_change">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 every_step_col_width">
                    <div class="every_step_item">
                        <div class="every_step_img_item">
                            <img src="{{ asset('frontend_assets') }}/images/demo-education-counselling.png" alt="demo-education-counselling.png">
                        </div>
                        <div class="every_step_contents_item every_step_contents_item_first">
                            <h4 style="font-weight: 600">Education Counselling</h4>
                            <h6 class="my-4">Confused about which international course is the right one for you? </h6>
                            <p class="mb-4">
                                <strong>Wondering which college will suit you best?Worry not;</strong> Our consultants are the best when it comes to guidance and counselling for studying abroad.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 every_step_col_width">
                    <div class="every_step_item">
                        <div class="every_step_img_item every_step_img_item_single2">
                            <img src="{{ asset('frontend_assets') }}/images/Application-Process.jpg" alt="/images/Application-Process.jpg">
                        </div>
                        <div class="every_step_contents_item">
                            <h4 style="font-weight: 600">Application Process</h4>
                            <h6 class="mt-4 mb-2 linheight_step">
                                We know that applying for a foreign university can be tedious and nerve-racking, and that is where we excel!
                            </h6>
                            <p class="mb-3 linheight_step_p">
                                <strong>Gateway</strong>
                                has got you covered, as we can help you ace your international university application process without worry!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 every_step_col_width">
                    <div class="every_step_item">
                        <div class="every_step_img_item every_step_img_item_single3">
                            <img src="{{ asset('frontend_assets') }}/images/Scholarship-Guidance.jpg" alt="Scholarship Guidance.jpg">
                        </div>
                        <div class="every_step_contents_item res_step_item_width2 res_step_item_padd2">
                            <h4 class="mb-4" style="font-weight: 600">Scholarship Guidance</h4>
                            <strong>Is availing Scholarships to study abroad very tricky?</strong>
                            <p class="mb-3 mt-2">
                                <strong>Not anymore!</strong>
                                We can help you find the right one among the many for the course of your choice and provide proper scholarship guidance to ensure to receive them and fulfil your dream!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 every_step_col_width">
                    <div class="every_step_item">
                        <div class="every_step_img_item every_step_img_item_single4">
                            <img src="{{ asset('frontend_assets') }}/images/Visa-Application.jpg" alt="Visa Application.jpg">
                        </div>
                        <div class="every_step_contents_item res_step_item_width2 every_step_contents_last_item_height">
                            <h4 style="font-weight: 600">Visa Application</h4>
                            <h6 class="my-3">Worried about having your study visa application rejected? </h6>
                            <strong>You can be at peace! </strong>
                            <p class="mb-3">
                                Our study destination experts can help you put to rest all your doubts about the process and help you in every step to ensure your student visa application process goes through smoothly until you get your visa!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 every_step_col_width">
                    <div class="every_step_item">
                        <div class="every_step_img_item every_step_img_item_single5">
                            <img src="{{ asset('frontend_assets') }}/images/Student-Health-Insurance.jpg" alt="Student-Health-Insurance.jpg">
                        </div>
                        <div class="every_step_contents_item res_step_item_width every_step_contents_last_item_height">
                            <h4 style="font-weight: 600" class="every_individual_width">Student Health Insurance</h4>
                            <h6 class="mt-4 mb-2">
                                To go abroad, you’ll need health insurance; as a student, you will need one even more!

                            </h6>
                            <strong>Wond ering how to apply for them? </strong>
                            <p class="mb-3">
                                We’ve got you covered! Just connect with aecc, and we will help you get the right international student health insurance for the duration of your course without any problems!

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 every_step_col_width">
                    <div class="every_step_item">
                        <div class="every_step_img_item every_step_item_single">
                            <img src="{{ asset('frontend_assets') }}/images/Student-Accommodation.jpg" alt="demo-education-counselling.png">
                        </div>
                        <div class="every_step_contents_item res_step_item_width every_step_contents_last_item_height">
                            <h4 class="mb-4" style="font-weight: 600">Student Accommodation</h4>
                            <strong>Is availing Scholarships to study abroad very tricky?</strong>
                            <strong>The accommodation makes all the difference when choosing to study abroad. Clueless about which will suit you? </strong>
                            <p class="mb-3 mt-2">
                                Consider it solved, as we have helped thousands of students get suitable student accommodation that doesn’t bite into their expenses,  and we can help you too!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        every step part html end
    =========================== -->
    <!-- =======================
        upcoming events part start
    =========================== -->
    <section id="upcoming_event_part">
        <div class="container pb-5">
            <div class="section-title text-center mb-4 pb-5">
                <h3 style="color: purple;">Upcoming Events</h3>
                <div class="section-title-bar"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                            <a href="{{ route('get.admitted.university') }}" class="text-dark" target="_blank">
                                <div class="upcoming_event_item bg-light text-center">
                                    <h3 style="font-weight: 700; color: purple">Meet University Official of</h3>
                                    <h4 style="color: purple" class="upcoming_head_font my-2">Brock University</h4>
                                    <p>55/A Gateway Center, Road # 4/A (Dhanmondi, Dhaka)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                            <div class="sub_upcoming_event_item">
                                <a style="text-decoration: underline; font-size:18px" href="{{ route('get.admitted.university') }}" class="my-4" target="_blank">
                                    Get admitted to #28 Best Global Universities in Canada
                                </a><br>
                                <strong>
                                    Are you ready to start on an educational journey that will set the stage for a successful future? Brock
                                    University is
                                    the place to be! University Officials of Brock University will be at our Dhaka Office to guide you. Don’t miss
                                    the
                                    opportunity! Book your
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-10">
                            <a href="{{ route('discover.future.college') }}" class="text-dark" target="_blank">
                                <div class="upcoming_event_item bg-light text-center">
                                    <h3 style="font-weight: 700; color: purple">Meet University Official of</h3>
                                    <h4 style="color: purple" class="upcoming_head_font my-2">Centennial College</h4>
                                    <p>55/A Gateway Center, Road # 4/A (Dhanmondi, Dhaka)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-10">
                            <div class="sub_upcoming_event_item">
                                <a style="text-decoration: underline;" href="{{ route('discover.future.college') }}" class="my-4" target="_blank">
                                    Discover Your Future at Centennial College
                                </a><br>
                                <strong>
                                    Are you ready to start on an educational journey that will set the stage for a successful future?
                                    Brock
                                    University is
                                    the place to be! University Officials of Brock University will be at our Dhaka Office to guide you.
                                    Don’t miss
                                    the
                                    opportunity! Book your
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row upcoming_marg_resp" style="margin-top: 70px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <div class="sub_upcoming_event_item ">
                            <p>
                                Gateway is Bangladesh’s leading study abroad consultant working with more than 200 universities in the UK, USA,
                                Canada,
                                Japan, Malaysia, and Australia. We pride ourselves on making a difference in the lives of our students through
                                honest
                                and innovative guidance counselling. We strive to be the best Study Abroad Consultants by providing a service to
                                students
                                that is free and unrivaled by any other agency in the Country. Get in touch with us to find out how we can help you
                                in
                                your search for the best higher study option for you.
                            </p>
                            <mark><a style="text-decoration: underline" class="text-center my-4" href="{{ route('enquery.form') }}"><i class="fa-solid fa-arrow-right" target="_blank"></i> Talk to us now</a></mark>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-2">
                        <div class="upcoming_btn_item text-center">
                            <button class="btn btn py-4 enquiry_btn" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);">
                                <a href="{{ route("appointment.index") }}" class="text-white">
                                    <i class="fa-regular fa-file-lines"></i>
                                    <h5>Enquiry</h5>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        upcoming events part start
    =========================== -->
    <!-- =======================
        team part start
    =========================== -->
    <section id="team_part">
        <div class="container">
            <div class="section-title text-center mb-4 pb-5">
                <h3>The Gateway Advantage</h3>
                <div class="section-title-bar"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="team_left_item team_width_resp">
                        <div class="row">
                            <div class="co-xs-12 col-sm-12 col-md-6 col-lg-4 text_right_res">
                                <div class="team_round_item">
                                    <img src="{{ asset('frontend_assets') }}/images/round_image1.png" alt="round_image1.png">
                                </div>
                            </div>
                            <div class="co-xs-12 col-sm-12 col-md-6 col-lg-8">
                                <div class="team_text_item">
                                    <h3 class="my-2">Welcoming</h3>
                                    <h5>Come to our office and you will know.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="team_right_item team_width_resp">
                        <div class="row">
                            <div class="co-xs-12 col-sm-12 col-md-6 col-lg-4 text_right_res">
                                <div class="team_round_item">
                                    <img src="{{ asset('frontend_assets') }}/images/caring.png" alt="caring.png">
                                </div>
                            </div>
                            <div class="co-xs-12 col-sm-12 col-md-6 col-lg-8">
                                <div class="team_text_item">
                                    <h3 class="my-2">Caring</h3>
                                    <h5>We care about You.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row marg_team_resp" style="margin-top: 100px;">
                <div class="co-xs-12 co-sm-12 col-md-12 col-lg-6">
                    <div class="team_left_item team_width_resp">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-6 col-lg-4 text_right_res">
                                <div class="team_round_item">
                                    <img src="{{ asset('frontend_assets') }}/images/team_personal_round.png" alt="team_personal_round">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12  col-md-6 col-lg-8">
                                <div class="team_text_item">
                                    <h3 class="my-2">Personal</h3>
                                    <h5>Our solutions for you are personal to you.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 co-sm-12 col-md-12  col-lg-6">
                    <div class="team_right_item team_width_resp">
                        <div class="row">
                            <div class="co-xs-12 col-sm-12 col-md-6 col-lg-4 text_right_res">
                                <div class="team_round_item">
                                    <img src="{{ asset('frontend_assets') }}/images/team_round_knowledge.png" alt="team_round_knowledge.png">
                                </div>
                            </div>
                            <div class="co-xs-12 col-sm-12 col-md-6 col-lg-8">
                                <div class="team_text_item">
                                    <h3 class="my-2">Knowledgeable</h3>
                                    <h5>Yup we read.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        team part end
    =========================== -->
    <!-- =======================
        coming up part start
    =========================== -->
    <section id="coming_counter_part" style="margin-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                    <a href="{{ route('appointment.index') }}">
                        <div class="row coming_smoth_for_over">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 p-0 coming_width_over">
                                <div class="coming_study_img">
                                    <div class="coming_title_overlay">
                                        <div class="coming_title text-white pt-4 px-3">
                                            <h5>Navitas North America Open Day @Dhaka</h5>
                                            <p class="my-2" style="font-size: 16px">| Open Day</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 p-0">
                                <div class="coming_text p-4">
                                    <h3 style="color: purple">Navitas North America Open Day @Dhanmondi, Dhaka</h3>
                                    <p class="my-4" style="color: purple; font-size: 16px">| Open Day</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 res_width_coming_item">
                    <div class="coming_item_bg">
                        <h3 class="mt-2">Coming Up On</h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="counter_item">
                                    {{-- <div class="item text-center">
                                    <h2 id="simple-timer"></h2>
                                </div> --}}
                                <div class="syotimer">
                                    <div class="syotimer__head"></div>
                                    <div class="syotimer__body">
                                        {{-- <div class="syotimer__item syotimer-cell syotimer-cell_type_day"> --}}
                                        <div id="simple-timer"></div>
                                        {{-- <div class="syotimer-cell__unit"></div> --}}
                                        </div>
                                        {{-- <div class="syotimer__item syotimer-cell syotimer-cell_type_hour">
                                        <div class="syotimer-cell__value" id="simple-timer">1</div>
                                        <div class="syotimer-cell__unit">hour</div>
                                        </div>
                                        <div class="syotimer__item syotimer-cell syotimer-cell_type_minute">
                                        <div class="syotimer-cell__value" id="simple-timer">1</div>
                                        <div class="syotimer-cell__unit">minute</div>
                                        </div>
                                        <div class="syotimer__item syotimer-cell syotimer-cell_type_second">
                                        <div class="syotimer-cell__value" id="simple-timer">1</div>
                                        <div class="syotimer-cell__unit">second</div>
                                        </div> --}}
                                    </div>
                                    <div class="syotimer__footer"></div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        coming up part end
    =========================== -->
@endsection


