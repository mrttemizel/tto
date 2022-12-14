<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\back\Durum;
use App\Models\back\Kuruluslar;
use App\Models\back\ParaBirimi;
use App\Models\back\Project;
use App\Models\back\Turu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{


    public function combocreate(){

        return view('back.pages.projects.combocreate',[
            'kuruluslar' => Kuruluslar::all(),
            'turu' => Turu::all(),
        ]);
    }

    public function index(){

        $userName = Auth::user()->name;
        $status = Auth::user()->status;
        $userId =Auth::user()->id;


        if($status == 2)
        {
            return view('back.pages.projects.index',[
               'data' => Project::all()->where('yurutucu_id', $userId)
            ]);
        }
        else{
            $data = Project::all();
            return view('back.pages.projects.index',compact('data'));
        }
     }

     public function create(){
         return view('back.pages.projects.create',[
            'users' => User::all(),
            'kurulus' => Kuruluslar::all(),
            'durumu' => Durum::all(),
            'turu' => Turu::all(),
            'parabirimi' => ParaBirimi::all(),
         ]);
     }


     public function edit($id){


         return view('back.pages.projects.edit',[
            'data' => Project::find($id),
            'users' => User::all(),
            'kurulus' => Kuruluslar::all(),
            'durumu' => Durum::all(),
            'turu' => Turu::all(),
            'parabirimi' => ParaBirimi::all(),
         ]);
     }


     public function update(Request $request){


         $request->validate(
             [
                 'projeAdi' => 'required',
                 'yurutucu_id' => 'required',
                 'yurutucuHocaBolumu_id' => 'required',
                 'dosya' => 'mimes:jpeg,png,jpg,svg,doc,docx,odt,pdf,tex,txt,wpd,tiff,tif,csv,psd,key,odp,pps,ppt,pptx,ods,xls,xlsm,xlsx'
             ],[
                 'projeAdi.required' => 'Bu Alan Bo?? B??rak??lamaz',
                 'yurutucu_id.required' => 'Bu Alan Bo?? B??rak??lamaz',
                 'dosya.mines' => 'L??tfen docx,pdf,jpg,bmp,png,doc format??da dosya y??klemeniz gerekmektedir.',

             ]
         );

        $data = Project::find($request->id);

         if($request->input('proje_gosterimi')=='on')
         {
             $data -> proje_gosterimi = '1';
         }
         else{
             $data -> proje_gosterimi = '0';
         }

         $data -> projeAdi =  $request->input('projeAdi');
         $data -> apdkkodu =  $request->input('apdkkodu');
        $data -> projeAdi =  $request->input('projeAdi');
        $data -> yurutucu_id =  $request->input('yurutucu_id');
        $data -> yurutucuHocaBolumu_id =  $request->input('yurutucuHocaBolumu_id');
        $data -> basvurutarihi =  $request->input('basvurutarihi');
        $data -> onaytarihi =  $request->input('onaytarihi');
        $data -> baslamatarihi =  $request->input('baslamatarihi');
        $data -> bitistarihi =  $request->input('bitistarihi');
        $data -> kurulus_id =  $request->input('kurulus_id');
        $data -> durumu_id =  $request->input('durumu_id');
        $data -> turu_id =  $request->input('turu_id');
        $data -> destekkaynagi =  $request->input('destekkaynagi');
        $data -> butce =  $request->input('butce');
        $data -> parabirimi_id =  $request->input('parabirimi_id');
        $data -> kanit =  $request->input('kanit');


         if($request -> hasFile('dosya'))
         {
             $destination = 'back/uploads/ek_dosyalar'.$data->dosya;
             if (\File::exists($destination))
             {
                 \File::delete($destination);
             }
             $dosya =  $request->file('dosya');
             $name_dosya = $dosya->getClientOriginalName();
             $dosya->move('back/uploads/ek_dosyalar',$name_dosya);
             $data->dosya = $name_dosya;
         }

        $data->save();
        return redirect()->back()->with('status','Proje  Ba??ar??l?? Bir ??ekilde G??ncellendi');
     }

     public  function storeKuruluslar(Request $request)
     {
         $request->validate(
             [

                 'kuruluslar' => 'required|unique:kuruluslars'

             ],
         );

         $data = new Kuruluslar();

         $data -> kuruluslar = $request->input('kuruluslar');


          $data->save();
          return redirect()->back()->with('status','Kurulus Ba??ar??l?? Bir ??ekilde Eklendi');



     }

     public  function deleteKuruluslar($id)
    {



            $data = Kuruluslar::find($id);



            $data->delete();
            return redirect()->back()->with('status','Himzet Silme ????lemi Ba??ar??l??');


    }


    public  function storeTuru(Request $request)
    {
        $request->validate(
            [

                'turu' => 'required|unique:turus'

            ],
        );

        $data = new Turu();

        $data -> turu = $request->input('turu');


         $data->save();
         return redirect()->back()->with('status','Proje T??r?? Ba??ar??l?? Bir ??ekilde Eklendi');



    }

    public  function deleteTuru($id)
   {
           $data = Turu::find($id);
           $data->delete();
           return redirect()->back()->with('status','Proje T??r?? Silme ????lemi Ba??ar??l??');

   }

   public function store(Request $request)
   {

    $request->validate(
        [
            'projeAdi' => 'required',
            'yurutucu_id' => 'required',
            'yurutucuHocaBolumu_id' => 'required',
            'dosya' => 'mimes:docx,pdf,jpg,bmp,png,doc',
        ],[
        'projeAdi.required' => 'Bu Alan Bo?? B??rak??lamaz',
        'yurutucu_id.required' => 'Bu Alan Bo?? B??rak??lamaz',
        'dosya.mines' => 'L??tfen docx,pdf,jpg,bmp,png,doc format??da dosya y??klemeniz gerekmektedir.',

    ]
    );

    $data = new Project();

    $data -> projeAdi =  $request->input('projeAdi');
    $data -> apdkkodu =  $request->input('apdkkodu');
    $data -> projekodu =  $request->input('projekodu');
    $data -> yurutucu_id =  $request->input('yurutucu_id');
    $data -> yurutucuHocaBolumu_id =  $request->input('yurutucuHocaBolumu_id');
    $data -> basvurutarihi =  $request->input('basvurutarihi');
    $data -> onaytarihi =  $request->input('onaytarihi');
    $data -> baslamatarihi =  $request->input('baslamatarihi');
    $data -> bitistarihi =  $request->input('bitistarihi');
    $data -> kurulus_id =  $request->input('kurulus_id');
    $data -> durumu_id =  $request->input('durumu_id');
    $data -> turu_id =  $request->input('turu_id');
    $data -> destekkaynagi =  $request->input('destekkaynagi');
    $data -> butce =  $request->input('butce');
    $data -> parabirimi_id =  $request->input('parabirimi_id');
    $data -> kanit =  $request->input('kanit');

       if($request -> hasFile('dosya'))
       {
           $dosya =  $request->file('dosya');
           $name_dosya = $dosya->getClientOriginalName();
           $dosya->move('back/uploads/ek_dosyalar',$name_dosya);
           $data->dosya = $name_dosya;
       }

    $data->save();
    return redirect()->route('projects.index')->with('status','Proje  Ba??ar??l?? Bir ??ekilde Eklendi');
   }


    public function delete($id)
    {
        $data = Project::find($id);

        $destination = 'back/uploads/ek_dosyalar'.$data->dosya;
        if(\File::exists($destination))
        {
            \File::delete($destination);
        }
        $data->delete();
        return redirect()->back()->with('status','Proje Silme ????lemi Ba??ar??l??');
    }
}
