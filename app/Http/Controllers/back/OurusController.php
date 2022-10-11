<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\back\Ourus;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class OurusController extends Controller
{
    public function index(){
        $data = Ourus::all();
        return view('back.pages.ourus.index',compact('data'));
    }

    public function create(){
        return view('back.pages.ourus.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
            ],
            [
                'name.required' => 'Bu Alan Boş Bırakılamaz',
                'surname.required' => 'Bu Alan Boş Bırakılamaz',
            ]
        );

        $data = new Ourus();

        $data -> name = $request->input('name');
        $data -> surname = $request->input('surname');
        $data -> job_tr = $request->input('job_tr');
        $data -> job_en = $request->input('job_en');
        $data -> eposta = $request->input('eposta');
        $data -> description_tr = $request->input('description_tr');
        $data -> description_en = $request->input('description_en');


        if($request -> hasFile('image'))
        {
            $destination = 'back/uploads/ourus/'.$data->image;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . 'image-person'. '.'  . $extention;
            $file->move('back/uploads/ourus/', $filname);
            $data->image = $filname;
        }

        $data->save();
        return redirect()->back()->with('status','Kayıt Başarılırı');

    }


    public function edit($id)

    {
        return view('back.pages.ourus.edit', [

             'data' => Ourus::find($id)
        ]);

    }


    public function update(Request $request)

    {
        $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',

            ],
            [
                'name.required' => 'Bu Alan Boş Bırakılamaz',
                'surname.required' => 'Bu Alan Boş Bırakılamaz',

            ]
        );

        $data = Ourus::find($request->id);

        $data -> name = $request->input('name');
        $data -> surname = $request->input('surname');
        $data -> job_tr = $request->input('job_tr');
        $data -> job_en = $request->input('job_en');
        $data -> eposta = $request->input('eposta');
        $data -> description_tr = $request->input('description_tr');
        $data -> description_en = $request->input('description_en');


        if($request -> hasFile('image'))
        {
            $destination = 'Back/uploads/ourus/'.$data->image;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . 'image-person'. '.'  . $extention;
            $file->move('Back/uploads/ourus/', $filname);
            $data->image = $filname;
        }

        $data->save();
        return redirect()->back()->with('status','Servis Güncellendi');
    }


    public  function  delete($id){
        Ourus::find($id)->delete();
        return redirect()->back()->with('status','Kullanıcı Silme Başarılı');
    }

}
