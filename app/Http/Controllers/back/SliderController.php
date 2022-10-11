<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\back\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){

        $data = Slider::all();
        return view('back.pages.slider.index',compact('data'));
    }

    public function create(){
        return view('back.pages.slider.create');
    }


    public function store(Request $request){



        $data = new Slider();

        $data -> header_tr = $request->input('header_tr');
        $data -> header_en = $request->input('header_en');
        $data -> text_tr = $request->input('text_tr');
        $data -> text_en = $request->input('text_en');
        $data -> button_tr = $request->input('button_tr');
        $data -> button_en = $request->input('button_en');



        if($request -> hasFile('image'))
         {
             $destination = 'Back/uploads/slider/'.$data->image;
             if (\File::exists($destination))
             {
                 \File::delete($destination);
             }
             $file = $request->file('image');
             $extention = $file->getClientOriginalExtension();
             $filname = time() . '.' . $extention;
             $file->move('Back/uploads/slider/', $filname);
             $data->image = $filname;
         }

         $data->save();
        return redirect()->back()->with('status','Slider Başarılı Bir Şekilde Eklendi');
    }


    public function edit($id){
        $data = Slider::find($id);

        return view('back.pages.slider.edit',compact('data'));
    }



    public function update(Request $request){


        $data = Slider::find($request->id);

        $data -> header_tr = $request->input('header_tr');
        $data -> header_en = $request->input('header_en');
        $data -> text_tr = $request->input('text_tr');
        $data -> text_en = $request->input('text_en');
        $data -> button_tr = $request->input('button_tr');
        $data -> button_en = $request->input('button_en');


        if($request->input('status')=='on')
        {
         $data -> status = '0';
        }
        else{
          $data -> status = '1';
        }

        if($request -> hasFile('image'))
        {
            $destination2 = 'Back/uploads/slider/'.$data->image;
            if (\File::exists($destination2))
            {
                \File::delete($destination2);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/slider/', $filname);
            $data->image = $filname;
        }

        $data->save();

        return redirect()->back()->with('status','Slider Güncellendi');

    }



    public function delete($id){
        Slider::find($id)->delete();
        return redirect()->back()->with('status','Slider Silindi');

    }




    }


