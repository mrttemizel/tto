<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\back\IsOrtaklarimiz as BackIsOrtaklarimiz;
use Illuminate\Http\Request;

class isOrtaklarimiz extends Controller
{
   public function index(){

      $data = backIsOrtaklarimiz::all();

       return view('back.pages.isOrtaklarimiz.index',compact('data'));
   }

   public function create(){
    return view('back.pages.isOrtaklarimiz.create');
   }


   public function store(Request $request){

      $request->validate(
         [

             'image' => 'required|mimes:pdf,jpg,png'

         ],
     );



      $data = new backIsOrtaklarimiz();

      $data -> name_tr = $request->input('name_tr');
      $data -> name_en = $request->input('name_en');


      if($request -> hasFile('image'))
       {
           $destination = 'back/uploads/isOrtaklarimiz/'.$data->image;
           if (\File::exists($destination))
           {
               \File::delete($destination);
           }
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filname = time() . '.' . $extention;
           $file->move('back/uploads/isOrtaklarimiz/', $filname);
           $data->image = $filname;
       }

       $data->save();
      return redirect()->back()->with('status',' Başarılı Bir Şekilde Eklendi');
  }

  public function edit($id){
   $data = backIsOrtaklarimiz::find($id);
   return view('back.pages.isOrtaklarimiz.edit',compact('data'));
}


public function update(Request $request){

   $request->validate(
      [

          'image' => 'required|mimes:pdf,jpg,png'

      ],
  );


   $data = backIsOrtaklarimiz::find($request->id);

   $data -> name_tr = $request->input('name_tr');
   $data -> name_en = $request->input('name_en');


   if($request -> hasFile('image'))
   {
       $destination2 = 'back/uploads/isOrtaklarimiz/'.$data->image;
       if (\File::exists($destination2))
       {
           \File::delete($destination2);
       }
       $file = $request->file('image');
       $extention = $file->getClientOriginalExtension();
       $filname = time() . '.' . $extention;
       $file->move('back/uploads/isOrtaklarimiz/', $filname);
       $data->image = $filname;
   }

   $data->save();
   return redirect()->back()->with('status','İş Ortağımız Güncellendi');
}

public  function delete($id)
    {
        $data = backIsOrtaklarimiz::find($id);

        $destination = 'uploads/isOrtaklarimiz/'.$data->image;
        if(\File::exists($destination))
        {
            \File::delete($destination);
        }

        $data->delete();
        return redirect()->back()->with('status','Silme İşlemi Başarılı');

    }


}
