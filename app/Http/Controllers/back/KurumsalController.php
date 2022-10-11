<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\back\Kurumsal;
use Illuminate\Http\Request;

class KurumsalController extends Controller
{



    public function index(){

        $data = Kurumsal::find(1);

        return view('back.pages.kurumsal.index',compact('data'));
    }


    public function update(Request $request){


        $request->validate(
            [
                'hakkimizda_tr' => 'required',
                'misyon_tr' => 'required',
                'vizyon_tr' => 'required'
            ],
        );

        $data = Kurumsal::find(1);

        $data -> hakkimizda_tr = $request->input('hakkimizda_tr');
        $data -> hakkimizda_en = $request->input('hakkimizda_en');
        $data -> misyon_tr = $request->input('misyon_tr');
        $data -> misyon_en = $request->input('misyon_en');
        $data -> vizyon_tr = $request->input('vizyon_tr');
        $data -> vizyon_en = $request->input('vizyon_en');

        $data->save();
        return redirect()->back()->with('status','Kurumsal Kimlik Güncellendi');


    }
}
