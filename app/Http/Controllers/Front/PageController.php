<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\back\Ourus;
use Illuminate\Http\Request;
use App\Models\back\Kurumsal;
use App;
use App\Models\back\ProjeDuyurular;

class PageController extends Controller
{

        public function hakkimizda(){


            $data = Kurumsal::find(1);
            return view('front.pages.hakkimizda', compact('data'));
        }

        public function misyonvizyon(){
            $data = Kurumsal::find(1);
            return view('front.pages.misyonvizyon',compact('data'));
        }

        public function ekibimiz(){
            $ourus = Ourus::all();
            return view('front.pages.ekibimiz',compact('ourus'));
        }


        public function projedetay(Request $request){
            $data = ProjeDuyurular::find($request->id);
          return view('front.pages.projectsdetails',compact('data'));
        }



}
