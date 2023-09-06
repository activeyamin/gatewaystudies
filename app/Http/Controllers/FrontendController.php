<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function privacy_policy(){
        return view('frontend.privacypolicy');
    }
    public function overseas_studies(){
        return view('frontend.overseas');
    }
    public function schooling_visa(){
        return view('frontend.schoolingvisa');
    }
    public function ielts(){
        return view('frontend.ielts');
    }
}
