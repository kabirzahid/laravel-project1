<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
class TeemController extends Controller
{
    public function index(){
        $teams=Team::skip(0)->take(2)->get();
        return view('frontend.teem',compact('teams'));
    }
}
