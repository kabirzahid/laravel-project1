<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seervice;
class ServiceController extends Controller
{
    public function index(){
        $services=Seervice::skip(0)->take(3)->get();
        return view('frontend.service',compact('services'));
    }
}
