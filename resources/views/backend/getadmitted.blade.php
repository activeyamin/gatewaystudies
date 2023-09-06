@extends('layouts.frontend_master')
@section('frontend_content')
<section id="brock_univer_part">
    <div class="container">
    <div class="row pt-4">
        <div class="col-sm-12 col-lg-3 col-xl-4">
            <div class="brock_univer_logo_item">
                <h3 style="font-weight:700; color:purple">Brock University</h3>
                <img class="my-4" src="{{ asset('frontend_assets') }}/images/brock_university.png" alt="brock_university.png"><br>
                <a style="font-size: 18px; background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);" href="{{ route('get.admitted.university') }}" class="btn text-white mt-2">Apply Now</a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8 col-xl-8">
            <div class="brock_video_bt_item">
                <div class="img">
                    <img src="{{ asset('frontend_assets/images/brock_video_bg_img.jpg') }}" alt="brock_video_bg_img.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="brock_fotter_details">
                <h3 class="mt-4" style="font-weight:700">About Brock University</h3>
                <p class="my-4">
                    Brock University is a leading post-secondary university in Canada. The university is located in the historic Niagara region and provides all of the advantages of a fresh and modern university in a secure, community-minded city with stunning natural surroundings. With over 19,000 students across seven faculties, the university boasts a high graduate success rate. There are several clubs, intramural sporting opportunities, and extracurricular activities to suit every student’s interest. Brock University’s renowned student experience is enriched with an emphasis on experiential learning, demonstrated through community partnerships, volunteerism and one of Ontario’s largest and most successful collaborative programs.

                </p>
            </div>
        </div>
        <div class="col-lg-12 py-4">
            <div class="accordion_item_custom">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <bold style="font-size: 18px; font-weight:600; color:purple">Why Brock University</bold>
                        </button>
                        </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <ul class="accordon_list_style">
                                <li>Brock is a comprehensive university with a wide range of undergraduate systems as well as advanced research, post-graduate and doctoral programs.</li>
                                <li>The 5th largest university co-op program in Canada, as well as a growing number of international programs.</li>
                                <li>Ranked 32nd In Best Global Universities in Canada by U.S. News & World Report
                                Brock is home to 13 Canada Research Chairs and is in the top 5 of Ontario universities for the number of 3M National Teaching Fellows.</li>
                                <li>Brock’s beautiful campus is located in Niagara, a safe, fun, and vibrant region.</li>
                                <li>Brock University is close to the U.S. border, minutes from world-class tourism destinations.</li>
                                <li>Niagara offers safe and affordable accommodation on and off campus. Shared accommodation options are available for $400 per month, which is less than half the cost of an average rental in Toronto.</li>
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
                            <p class="my-2">Tuition fees start from CAD 19,938 and can go up to CAD 28,000 based on your preferred programme/subject.</p>
                            <span style="color: purple">Degree Duration: 13 month – 4 Years </span><br><br>

                            <strong style="color: purple">Scholarship Availability</strong>
                            <p class="my-2">Up to CAD $4,000 based on your preferred programme and result. To check <a href="#appontment_book_part">click here</a></p><br>

                            <strong style="color: purple">Part Time Job</strong><br>
                            <p class="my-2">For an international student, minimum wages ranged from around $11.45 to $16.00 CAD per hour across different provinces, providing you with opportunities to support your studies and living expenses.</p>

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
                                    Brock University offers a wide range of subjects for international students.
                                </strong>
                                <ul class="accordon_list_style_num">
                                    <li>Accounting</li>
                                    <li>Arts</li>
                                    <li>Arts and Sciences</li>
                                    <li>Business Administration</li>
                                    <li>Business Economics</li>
                                    <li>Child Health (BCH)</li>
                                    <li>Computing and Business</li>
                                    <li>Early Childhood Education</li>
                                    <li>Education</li>
                                    <li>Music</li>
                                    <li>Physical Education</li>
                                    <li>Public Health</li>
                                    <li>Recreation and Leisure Studies</li>
                                    <li>Science</li>
                                    <li>Kinesiology</li>
                                    <li>Nursing</li>
                                    <li>Sport Management</li>
                                    <li>Professional Kinesiology</li>
                                    <li>Public Health</li>
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
                                <strong style="color: purple">Entry Requirements for Postgraduate</strong>
                                <ul class="accordon_list_style">
                                    <li>O Level completed with a minimum of 5 subjects</li>
                                    <li>A-level Completed with Grade C or above</li>
                                    <li>HSC GPA 4.00 out of 5.00</li>
                                </ul>

                                <strong style="margin-top: 20px; color:purple">Entry Requirements for Postgraduate</strong>
                                <p class="my-2">75% GPA or more on their Bachelor’s Degree</p>
                                <p>IELTS: Minimum 6.5 (no individual score less than 6.00)</p>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>
</section>
{{-- ======appointment index start --}}
    <section id="appontment_book_part" style="padding: 60px 0; background: #fcfcfc">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-lg-12 col-xl-10 col-xxl-10 py-4 m-auto">
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
                        <select name="when_study" class="form-select mt-2" id="">
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
                            <option value="10:30-11:30" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>10:30 - 11:30</option>
                            <option value="11:31-12:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>11:31 - 12:00</option>
                            <option value="12:01-01:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>12:01 - 01:00</option>
                            <option value="01:01-03:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>01:01 - 03:00</option>
                            <option value="03:01-04:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>03:01 - 04:00</option>
                            <option value="04:01-05:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>04:01 - 05:00</option>
                            <option value="05:01-06:00" @if (old('appointment_date') == '10:30-11:30') selected="selected" @endif>05:01 - 06:00</option>
                        </select>
                          @error('appointment_date')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>

                        <button class="btn text-white my-2" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);" type="submit">Submit Counselling</button>
                        <a href="/" style="text-decoration: underline; color: #fff">Back to Book a free counselling</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{-- ======appointment index end --}}
@endsection
