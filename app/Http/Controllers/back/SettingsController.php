<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\back\Setting;

class SettingsController extends Controller
{

    public function index(){

        $data = Setting::where('id',1)->get();
        return view('back.pages.settings.index',['setting' => $data]);

    }



    public function update(Request $request){



        $data = Setting::find(1);

        $data -> email = $request->input('email');
        $data -> phone = $request->input('phone');
        $data -> title_tr = $request->input('title_tr');
        $data -> title_en = $request->input('title_en');
        $data -> adress = $request->input('adress');
        $data -> instagram = $request->input('instagram');
        $data -> facebook = $request->input('facebook');
        $data -> twitter = $request->input('twitter');
        $data -> whatsapp = $request->input('whatsapp');
        $data -> mapframe = $request->input('mapframe');
        $data -> homepagemiddleText_tr = $request->input('homepagemiddleText_tr');
        $data -> homepagemiddleText_en = $request->input('homepagemiddleText_en');
        $data -> homepageLongText_tr = $request->input('homepageLongText_tr');
        $data -> homepageLongText_en = $request->input('homepageLongText_en');


        if($request -> hasFile('logo'))
        {
            $destination = 'Back/uploads/sitelogo/'.$data->logo;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/sitelogo/', $filname);
            $data->logo = $filname;
        }

        if($request -> hasFile('icon'))
        {
            $destinationicon = 'Back/uploads/sitelogo/'.$data->icon;
            if (\File::exists($destinationicon))
            {
                \File::delete($destinationicon);
            }
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/sitelogo/', $filname);
            $data->icon = $filname;
        }


        $data->save();
        return redirect()->back()->with('status','Site Ayarları Güncellendi');


    }

}
