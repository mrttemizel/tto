<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\back\Slider;

class HomeController extends Controller
{
    public function home(){

        return view('back.home',
        [

             'slider' => Slider::all(),
        ]);
    }
}

