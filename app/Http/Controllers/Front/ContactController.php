<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\back\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage(){
        $data = Setting::find(1);
        return view('front.pages.contact', compact('data'));


    }
}
