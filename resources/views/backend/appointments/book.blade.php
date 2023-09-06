@extends('layouts.frontend_master')
@section('frontend_content')
    <h1>Book a free counselling</h1>

    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert" style="width: 300px;margin: 0 auto; padding: 5px 0">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            <small>{{ session('success') }}</small>
        </div>
        </div>
    @endif

    <ul>
        @foreach($appointments as $appointment)
            <li>
                {{ $appointment->name }} - {{ $appointment->email }} - {{ $appointment->appointment_date }}
            </li>
        @endforeach
    </ul>

    <a href="/book">Book a free counselling</a>
@endsection
