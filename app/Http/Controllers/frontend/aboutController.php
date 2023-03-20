<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $abouts=About::skip(0)->take(2)->get();
        return view('frontend.about',compact('abouts'));
    }

}
