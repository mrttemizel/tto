<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
       return view('back.pages.announcement.index');
    }

    public function create(){
        return view('back.pages.announcement.create');
    }

    public function edit(){
        return view('back.pages.announcement.edit');
    }


}
