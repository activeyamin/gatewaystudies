@extends('layouts.frontend_master')
@section('frontend_content')
    <section id="centennial_univer_part">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="overseas_banners_item">
                <div class="img">
                    <img src="{{ asset('frontend_assets/images') }}/study_abroad_banner.jpg" alt="study_abroad_banner.jpg">
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
                        <h5 class="mt-4"> <mark>Here are a few easy tips to go about executing your study abroad plans:</mark> </h5>
                        <h4 class="mt-5" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Extensive Research</h4>
                        <p class="my-3">
                            Deciding to study abroad is a big step in life Today with overseas education blooming all over, the majority of countries and their universities are successfully offering a wide variety of courses. In such a scenario choosing the right country and university becomes crucial, which is why detailed research is a must. In this stage, students must widen their horizons and look at all available options. Only after studying all these options should one make an informed decision.
                        </p>
                        <h4 class="mt-5 mb-3" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Apply To The University:</h4>
                        <p>
                            After shortlisting the universities, students can start with their application process keeping in mind the dates of application and submission of the respective universities. The students can apply directly to the universities by visiting their websites. Students are only expected to follow all the instructions given by the university in order to proceed.
                        </p>
                        <h4 class="mt-5 mb-3" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Take The Required Proficiency Tests:</h4>
                        <p>
                            For studying a particular program, universities require you to pass a few tests in order for you to be eligible to apply for the program. Universities especially ask you to take English proficiency Proficiency Tests such as IELTS TOFLE, and PTE. Students are expected to take any one test out of the three which depends from university to university. Other tests are also required to be taken such as the GRE, SAT, etc. which are required by only some programs.
                        </p>
                        <h4 class="mt-5 mb-3" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Ensure You Have A Drafted and Impactful CV:</h4>
                        <p>
                            Your CV is a textual image of your educational Qualificationm, work experiences an skill . Make sure it is well sturctured, consies,, precies, and free of grammatical errors. YOur CV msut speak high of you. Make sure that your CV adds weightage to your application.
                        </p>
                        <h4 class="mt-5 mb-3" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Draft Your Own SOP (Statement Of Purpose) and Personal Statement:</h4>
                        <p>
                            This is one of the most important documents every university demands as this is the only way the university gets a chance to know you. An SOP/Personal Statement is an essay that students are expected to draft. It is through this essay that students narrate their stories and show themselves to the admission committee. While an SOP's major focus is on education, career, and professional background. Make sure that your essay talks with the admission committee. Your essays must have an impact.
                        </p>
                        <h4 class="mt-5 mb-3" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Arrange And Sort Out All Your Documents Carefully:</h4>
                        <p>
                            Your documents are a very important component for getting admission abroad. documents like your marksheets, identity proof, passport, financial statements, etc. need to be arranged and kept ready whenever required. Thus make sure all your documents are in place.
                        </p>
                        <h4 class="mt-5 mb-3" style="font-weight:700; color: rgba(65, 65, 65, 0.823)">Visa Application:</h4>
                        <p>
                            Unless and until you don't get a visa, you won't be allowed to fly to the country of your dream. Proceed to this step cautiously. Fill in your visa application form with accurate details. Prepare for confident enough to state your reasons for studying in a particular country and also your future goals. Your Statement of Intent should also strongly speak about the same.
                        </p>
                        <p class="mb-5">
                            Once a student gets his/her visa, he/she can prep to take off. Before that, do a little background study of the country/city/town, common places to visit, stores to buy specific things from, culture, food, etc.
                        </p>
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
