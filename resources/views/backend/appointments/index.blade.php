@extends('layouts.frontend_master')
@section('frontend_content')
<!-- =======================
            banner part html start
        =========================== -->
    <section id="banner_part" style="position: relative;">
        <div class="banner_slider text-white">
            <div class="banner_slider_item2">
                <div class="banner_overlay">
                    <div class="banner_slide_contents px-4 text-white">
                        <h1 class="carouse_title">Apply for Schooling visa USA and Canada</h1>
                        <button class="btn mt-5" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);">
                            <a style="font-size: 22px; font-weight: 600; color: white;" href="{{ route('appointment.index') }}">Book a free counselling</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        banner part html start
    =========================== -->
{{-- ======appointment index start --}}
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
                        <button class="btn text-white mt-4" style="background: linear-gradient(45deg, #ff0a6ceb, #2e27fff1);" type="submit">Submit</button>
                        <a href="/" style="text-decoration: underline; color: #fff">Back to Book a free counselling</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{-- ======appointment index end --}}
@endsection

