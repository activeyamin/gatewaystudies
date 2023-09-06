@extends('layouts.frontend_master')
@section('frontend_content')
    <section id="centennial_univer_part">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="ielts_banner">
                <div class="img">
                    <img src="{{ asset('frontend_assets') }}/images/ielts_banner.png" alt="ielts_banner.png">
                </div>
                {{-- <div class="banner_overlay">
                    <div class="banner_slide_contents px-4 text-white">
                        <h1>
                            Why Study Abroad?
                        </h1>
                        <button class="btn btn mt-2" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);">
                            <a style="font-size: 22px; font-weight: 600; color: white;" href="{{ route('appointment.index') }}">Book a free counselling</a>
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="Centennial_fotter_details">
                        <h3 class="mt-4" style="font-weight:700; color:purple">About IELTS</h3>
                        <p class="my-4">
                            Centennial College, located in Canada, is a premier institution renowned for its commitment to excellence in education and career-oriented programs. With a history spanning over five decades, the college has earned a stellar reputation for its diverse and innovative courses that cater to students’ evolving needs. Boasting state-of-the-art facilities and a vibrant campus life, Centennial College offers a nurturing environment for students to thrive academically and personally. The dedicated faculty members bring real-world expertise into the classrooms, empowering students with practical skills and knowledge. As a leading Canadian college, Centennial continues to empower the next generation of professionals, fostering a dynamic learning community that embraces inclusivity and fosters success in a globalized world.

                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-4">
                    <div class="accordion_item_custom">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <bold style="font-size: 18px; font-weight:600; color: purple">Why IELTS</bold>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <ul class="accordon_list_style">
                                        <li>Centennial is an Award-Winning Canadian Institution.</li>
                                        <li>Ranked number 1 in paid student research internships.</li>
                                        <li>One of Canada’s Top Research Colleges by Research Infosource, ranking 1st in two key categories and 20th overall in research revenue in 2022.</li>
                                        <li>All programs at Centennial College meet strict educational standards set by the Ontario Ministry of Colleges and Universities and also offer over 200 full time programs.</li>
                                        <li>Employers rated Centennial College grads number 1 amongst the GTA colleges (96.3% employer satisfaction rate in the 2019-2020 KPI).</li>
                                        <li>Centennial College is ranked as the number 1 college in the Greater Toronto Area for graduate satisfaction! (2020-2021 KPI – Key Performance Indicator).</li>
                                        <li>Centennial is one of Canada’s top destinations for international students. </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <bold style="font-size: 18px; font-weight:600; color:purple">Costs and Aid</bold>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong style="color: purple">Tuition Fees</strong>
                                    <p class="my-2">Tuition Fees starts from CAD $15,385.50 and can go up to $32,820.00 per semester based on your preferred programme/subject.</p>

                                    <strong style="color: purple">Scholarship Availability</strong>
                                    <p class="my-2">Centennial College is offering scholarships that are awarded to an international student based on merit ranging from CAD 1,000 to CAD 3,000. To check  <a href="#appontment_book_part">click here</a></p><br>

                                    <strong style="color: purple">Part Time Job</strong><br>
                                    <p class="my-2">As an international student, you might be curious about working while studying in Canada, and guess what? The answer is a resounding yes! You can definitely work, but make sure to get the necessary government permit or approval. The minimum wages ranged from around $11.45 to $16.00 CAD per hour across different provinces, providing you with opportunities to support your studies and living expenses. So, don’t hesitate to pursue your dreams and seize those opportunities!</p>

                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    <bold style="font-size: 18px; font-weight:600; color:purple">Available Courses</bold>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong style="color: purple">
                                            Centennial college offers a wide range of subjects for international students.
                                        </strong>
                                        <ul class="accordon_list_style_num">
                                            <li>Academic, Arts and Science Preparation</li>
                                            <li>Advanced Manufacturing and Systems Automation</li>
                                            <li>Advertising, Marketing and Public Relations</li>
                                            <li>Aerospace and Aviation</li>
                                            <li>Arts, Animation and Design</li>
                                            <li>Automotive and Motorcycle</li>
                                            <li>Biological, Environmental and Food Sciences</li>
                                            <li>Business</li>
                                            <li>Community and Child Services</li>
                                            <li>Emergency, Law and Court Services</li>
                                            <li>Food and Tourism</li>
                                            <li>Health and Wellness</li>
                                            <li>Heavy Duty, Truck and Coach</li>
                                            <li>Hospitality Management</li>
                                            <li>Information Technology, Networking and Software Engineering</li>
                                            <li>Media, Communications and Writing</li>
                                            <li>Sustainable Design and Renewable Energy.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    <bold style="font-size: 18px; font-weight:600; color:purple">Admission Requirements</bold>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body">
                                        <strong style="color: purple">Entry Requirements for Undergraduate</strong>
                                        <p class="my-2">Grade 12th with minimum 55% or above</p>
                                        <p>IELTS – Overall 6.0 with no band less than 5.5</p>
                                        <br>
                                        <strong style="color: purple">Entry Requirements for Postgraduate</strong>
                                        <p class="my-2">Bachelor’s Degree with a minimum of 55% or above.</p>
                                        <p>IELTS – Overall 6.5 with no band less than 6.0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
</section>
{{-- ======overseas studies index start --}}
    <section id="appontment_book_part" style="padding: 60px 0; background: #fcfcfc">
        <div class="container resp_width_conta">
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-lg-12 col-xl-10 col-xxl-10 py-4 m-auto resp_padd_col_appoint">
                    <div class="title py-4 text-center text-white" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);">
                        <h1>Book a free counselling</h1>
                        @if (session('success'))
                            <div class="alert alert-success d-flex align-items-center" role="alert" style="width: 300px;margin: 0 auto; padding: 5px 0">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                <small>{{ session('success') }}</small>
                            </div>
                            </div>
                        @endif
                    </div>
                    <form method="post" action="/book" class="form-control p-4">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="input name" value="{{ old('name') }}">
                          @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Email</label>
                          <input type="email" class="form-control" name="email" id="" value="{{ old('email') }}" placeholder="example@mail.com">
                          @error('email')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Phone Number</label>
                          <input type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone">
                          @error('phone_number')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <!-- selected study start -->
                        <label class="form-label">Your preferred study destination</label>
                        <select name="study_destination" class="form-select">
                            <option class="study_select_padd" value="" selected="selected">
                                Please select</option>
                            <option value="Canada" @if (old('study_destination') == 'Canada') selected="selected" @endif> Canada </option>
                            <option value="United-Kingdom" @if (old('study_destination') == 'United-Kingdom') selected="selected" @endif> United-Kingdom </option>
                            <option value="United-States" @if (old('study_destination') == 'United-States') selected="selected" @endif> United-States </option>
                        </select>
                        @error('study_destination')
                            <small class="form-text text-danger">{{ $message }}</small><br>
                        @enderror
                        <!-- selected study end -->
                        <!-- year selected start -->
                        <label class="control-label mt-4">
                            When do you plan to study?</label>
                        <select name="when_study" class="form-select" id="">
                            <option value="" selected="selected">
                                Please select</option>
                            <option value="Sep-2023" @if (old('when_study') == 'Sep-2023') selected="selected" @endif>Sep 2023</option>
                            <option value="Oct-2023" @if (old('when_study') == 'Oct-2023') selected="selected" @endif>Oct 2023</option>
                            <option value="Nov-2023" @if (old('when_study') == 'Nov-2023') selected="selected" @endif>Nov 2023</option>
                            <option value="Dec-2023" @if (old('when_study') == 'Dec-2023') selected="selected" @endif>Dec 2023</option>
                            <option value="Jan-2024" @if (old('when_study') == 'Jan-2024') selected="selected" @endif>Jan 2024</option>
                            <option value="Feb-2024" @if (old('when_study') == 'Feb-2024') selected="selected" @endif>Feb 2024</option>
                            <option value="Mar-2024" @if (old('when_study') == 'Mar-2024') selected="selected" @endif>Mar 2024</option>
                            <option value="Apr-2024" @if (old('when_study') == 'Apr-2024') selected="selected" @endif>Apr 2024</option>
                            <option value="May-2024" @if (old('when_study') == 'May-2024') selected="selected" @endif>May 2024</option>
                            <option value="Jun-2024" @if (old('when_study') == 'Jun-2024') selected="selected" @endif>Jun 2024</option>
                            <option value="Jul-2024" @if (old('when_study') == 'Jul-2024') selected="selected" @endif>Jul 2024</option>
                            <option value="Aug-2024" @if (old('when_study') == 'Aug-2024') selected="selected" @endif>Aug 2024</option>
                            <option value="Sep-2024" @if (old('when_study') == 'Sep-2024') selected="selected" @endif>Sep 2024</option>
                            <option value="Oct-2024" @if (old('when_study') == 'Oct-2024') selected="selected" @endif>Oct 2024</option>
                            <option value="Nov-2024" @if (old('when_study') == 'Nov-2024') selected="selected" @endif>Nov 2024</option>
                            <option value="Dec-2024" @if (old('when_study') == 'Dec-2024') selected="selected" @endif>Dec 2024</option>
                            <option value="Jan-2025" @if (old('when_study') == 'Jan-2025') selected="selected" @endif>Jan 2025</option>
                            <option value="Feb-2025" @if (old('when_study') == 'Feb-2025') selected="selected" @endif>Feb 2025</option>
                            <option value="Mar-2025" @if (old('when_study') == 'Mar-2025') selected="selected" @endif>Mar 2025</option>
                            <option value="Apr-2025" @if (old('when_study') == 'Apr-2025') selected="selected" @endif>Apr 2025</option>
                            <option value="May-2025" @if (old('when_study') == 'May-2025') selected="selected" @endif>May 2025</option>
                            <option value="Jun-2025" @if (old('when_study') == 'Jun-2025') selected="selected" @endif>Jun 2025</option>
                            <option value="Jul-2025" @if (old('when_study') == 'Jul-2025') selected="selected" @endif>Jul 2025</option>
                            <option value="Aug-2025" @if (old('when_study') == 'Aug-2025') selected="selected" @endif>Aug 2025</option>
                            <option value="Sep-2025" @if (old('when_study') == 'Sep-2025') selected="selected" @endif>Sep 2025</option>
                            <option value="Oct-2025" @if (old('when_study') == 'Oct-2025') selected="selected" @endif>Oct 2025</option>
                            <option value="Nov-2025" @if (old('when_study') == 'Nov-2025') selected="selected" @endif>Nov 2025</option>
                            <option value="Dec-2025" @if (old('when_study') == 'Dec-2025') selected="selected" @endif>Dec 2025</option>
                            <option value="Jan-2026" @if (old('when_study') == 'Jan-2026') selected="selected" @endif>Jan 2026</option>
                            <option value="Feb-2026" @if (old('when_study') == 'Feb-2026') selected="selected" @endif>Feb 2026</option>
                            <option value="Mar-2026" @if (old('when_study') == 'Mar-2026') selected="selected" @endif>Mar 2026</option>
                            <option value="Apr-2026" @if (old('when_study') == 'Apr-2026') selected="selected" @endif>Apr 2026</option>
                            <option value="May-2026" @if (old('when_study') == 'May-2026') selected="selected" @endif>May 2026</option>
                            <option value="Jun-2026" @if (old('when_study') == 'Jun-2026') selected="selected" @endif>Jun 2026</option>
                            <option value="Jul-2026" @if (old('when_study') == 'Jul-2026') selected="selected" @endif>Jul 2026</option>
                            <option value="Aug-2026" @if (old('when_study') == 'Aug-2026') selected="selected" @endif>Aug 2026</option>
                            <option value="Sep-2026" @if (old('when_study') == 'Sep-2026') selected="selected" @endif>Sep 2026</option>
                            <option value="Oct-2026" @if (old('when_study') == 'Oct-2026') selected="selected" @endif>Oct 2026</option>
                            <option value="Nov-2026" @if (old('when_study') == 'Nov-2026') selected="selected" @endif>Nov 2026</option>
                            <option value="Dec-2026" @if (old('when_study') == 'Dec-2026') selected="selected" @endif>Dec 2026</option>
                            <option value="Jan-2027" @if (old('when_study') == 'Jan-2027') selected="selected" @endif>Jan 2027</option>
                            <option value="Feb-2027" @if (old('when_study') == 'Feb-2027') selected="selected" @endif>Feb 2027</option>
                            <option value="Mar-2027" @if (old('when_study') == 'Mar-2027') selected="selected" @endif>Mar 2027</option>
                            <option value="Apr-2027" @if (old('when_study') == 'Apr-2027') selected="selected" @endif>Apr 2027</option>
                            <option value="May-2027" @if (old('when_study') == 'May-2027') selected="selected" @endif>May 2027</option>
                            <option value="Jun-2027" @if (old('when_study') == 'Jun-2027') selected="selected" @endif>Jun 2027</option>
                            <option value="Jul-2027" @if (old('when_study') == 'Jul-2027') selected="selected" @endif>Jul 2027</option>
                            <option value="Aug-2027" @if (old('when_study') == 'Aug-2027') selected="selected" @endif>Aug 2027</option>
                            <option value="Sep-2027" @if (old('when_study') == 'Sep-2027') selected="selected" @endif>Sep 2027</option>
                            <option value="Oct-2027" @if (old('when_study') == 'Oct-2027') selected="selected" @endif>Oct 2027</option>
                            <option value="Nov-2027" @if (old('when_study') == 'Nov-2027') selected="selected" @endif>Nov 2027</option>
                            <option value="Dec-2027" @if (old('when_study') == 'Dec-2027') selected="selected" @endif>Dec 2027</option>
                            <option value="Jan-2028" @if (old('when_study') == 'Jan-2028') selected="selected" @endif>Jan 2028</option>
                            <option value="Feb-2028" @if (old('when_study') == 'Feb-2028') selected="selected" @endif>Feb 2028</option>
                            <option value="Mar-2028" @if (old('when_study') == 'Mar-2028') selected="selected" @endif>Mar 2028</option>
                            <option value="Apr-2028" @if (old('when_study') == 'Apr-2028') selected="selected" @endif>Apr 2028</option>
                            <option value="May-2028" @if (old('when_study') == 'May-2028') selected="selected" @endif>May 2028</option>
                        </select>
                        @error('when_study')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                        <!-- selected year end -->
                        <div class="my-4">
                          <label for="" class="form-label">Appointment Date:</label>
                          <select name="appointment_date" class="form-select" id="">
                            <option value="" selected="selected">
                                    Please select</option>
                            <option value="10:30-11:30" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>10:30 - 11:30 (AM)</option>
                            <option value="11:31-12:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>11:31 - 12:00 (PM)</option>
                            <option value="12:01-01:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>12:01 - 01:00 (PM)</option>
                            <option value="01:01-03:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>01:01 - 03:00 (PM)</option>
                            <option value="03:01-04:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>03:01 - 04:00 (PM)</option>
                            <option value="04:01-05:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>04:01 - 05:00 (PM)</option>
                            <option value="05:01-06:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>05:01 - 06:00 (AM)</option>
                          </select>
                          @error('appointment_date')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <button class="btn text-white my-2" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);" type="submit">Submit</button>
                        <a href="/" style="text-decoration: underline; color: #fff">Back to Book a free counselling</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{-- ======overseas studies index end --}}
@endsection
