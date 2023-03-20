<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kinggroup;

class HomeController extends Controller
{
    public function index(){
        $homes=Kinggroup::skip(0)->take(10)->get();
        return view('frontend.home',compact('homes'));
    }
}
