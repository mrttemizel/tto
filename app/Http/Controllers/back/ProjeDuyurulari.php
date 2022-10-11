<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\back\ProjeDuyurular;
use Illuminate\Http\Request;

class ProjeDuyurulari extends Controller
{


    public function index(){
        $data = ProjeDuyurular::all();

        return view('back.pages.projeduyurulari.index',compact('data'));
    }

    public function create()
    {
        return view('back.pages.projeduyurulari.create');
    }


    public function store(Request $request)
    {
        $data = new ProjeDuyurular();

       $data -> proje_baslik_tr = $request->input('proje_baslik_tr');
       $data -> proje_baslik_en = $request->input('proje_baslik_en');
       $data -> proje_kisa_baslik_tr = $request->input('proje_kisa_baslik_tr');
       $data -> proje_kisa_baslik_en = $request->input('proje_kisa_baslik_en');
       $data -> proje_yurutucusu = $request->input('proje_yurutucusu');
       $data -> proje_baslama_tarihi = $request->input('proje_baslama_tarihi');
       $data -> proje_bitis_tarihi = $request->input('proje_bitis_tarihi');
       $data -> aciklama_tr = $request->input('aciklama_tr');
       $data -> aciklama_en = $request->input('aciklama_en');


       if($request -> hasFile('image_banner'))
        {
            $destination = 'Back/uploads/projeDuyuru/banner'.$data->image_banner;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image_banner');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/projeDuyuru/banner', $filname);
            $data->image_banner = $filname;
        }

        if($request -> hasFile('image_proje'))
        {
            $destinationicon = 'Back/uploads/projeDuyuru/proje'.$data->image_proje;
            if (\File::exists($destinationicon))
            {
                \File::delete($destinationicon);
            }
            $file = $request->file('image_proje');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/projeDuyuru/proje', $filname);
            $data->image_proje = $filname;
        }

        $data->save();
        return redirect()->back()->with('status','Proje Duyurusu Başarılı Bir Şekilde Eklendi');

    }

    public function edit($id)
    {
        return view('back.pages.projeduyurulari.edit', [
             'data' => ProjeDuyurular::find($id)
        ]);
    }



    public function update(Request $request){



        $data = ProjeDuyurular::find($request->id);

        $data -> proje_baslik_tr = $request->input('proje_baslik_tr');
        $data -> proje_baslik_en = $request->input('proje_baslik_en');
        $data -> proje_kisa_baslik_tr = $request->input('proje_kisa_baslik_tr');
        $data -> proje_kisa_baslik_en = $request->input('proje_kisa_baslik_en');
        $data -> proje_yurutucusu = $request->input('proje_yurutucusu');
        $data -> proje_baslama_tarihi = $request->input('proje_baslama_tarihi');
        $data -> proje_bitis_tarihi = $request->input('proje_bitis_tarihi');
        $data -> aciklama_tr = $request->input('aciklama_tr');
        $data -> aciklama_en = $request->input('aciklama_en');

        if($request->input('status')=='on')
        {
         $data -> status = '0';
        }
        else{
          $data -> status = '1';
        }


        if($request -> hasFile('image_banner'))
        {
            $destination = 'Back/uploads/projeDuyuru/banner'.$data->image_banner;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image_banner');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/projeDuyuru/banner', $filname);
            $data->image_banner = $filname;
        }

        if($request -> hasFile('image_proje'))
        {
            $destinationicon = 'Back/uploads/projeDuyuru/proje'.$data->image_proje;
            if (\File::exists($destinationicon))
            {
                \File::delete($destinationicon);
            }
            $file = $request->file('image_proje');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('Back/uploads/projeDuyuru/proje', $filname);
            $data->image_proje = $filname;
        }

        $data->save();

        return redirect()->back()->with('status','Proje Duyuru Güncellendi');

    }


    public function delete($id){


        $data = ProjeDuyurular::find($id);

        $destination = 'Back/uploads/projeDuyuru/proje'.$data->image_proje;
        if(\File::exists($destination))
        {
            \File::delete($destination);
        }

        $destination2 = 'Back/uploads/projeDuyuru/banner'.$data->image_banner;
        if(\File::exists($destination2))
        {
            \File::delete($destination2);
        }



        $data->delete();
        return redirect()->back()->with('status','Proje Duyurusu Silme İşlemi Başarılı');
    }



}
