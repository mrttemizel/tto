<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function index(){
        $user = User::all();
        return view('back.pages.user.index',compact('user'));
    }



    public function profil(){

        $id = Auth()->user()->id;
        $data = User::find($id);
        return view('back.pages.user.profil',compact('data'));


    }


    public function editpassword(Request $request){


        $request->validate(
            [
                'oldpassword' => 'required',
                'password' => 'required|min:6|confirmed',


            ],
        );

        $data = User::find($request->id);

        if(Hash::check($request->oldpassword,$data->password)){

            $data -> password = Hash::make($request->input('password'));
            $data->save();

            return redirect()->back()->with('status','Şifre Değiştirme İşlemi Başarılı');
        }


            return redirect()->back()->with('status-warning','Girilen Şifre Hatalıdır');


    }


    public function profilupdate(Request $request){


        $data = User::find($request->id);

        if($data -> email == $request->email)
            {
                $request->validate(
                    [

                        'name' => 'required|min:4|max:25',
                    ],
                );




                $data = User::find($request->id);


                $data -> email = $request->input('email');
                $data -> name = $request->input('name');
                $data -> summary = $request->input('summary');
                $data -> bolumu = $request->input('bolumu');

                if($request -> hasFile('image'))
                {
                    $destination = 'back/uploads/userprofil/'.$data->image;
                    if (\File::exists($destination))
                    {
                        \File::delete($destination);
                    }
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filname = time() . '.' . $extention;
                    $file->move('back/uploads/userprofil/', $filname);
                    $data->image = $filname;
                }

                $data->save();
               return redirect()->back()->with('status','Profil Başarılı Bir Şekilde Eklendi');
            }
            else{



                    $request->validate(
                        [
                            'email' => 'email|unique:users',
                            'name' => 'required|min:4|max:25',
                        ],
                    );




                    $data = User::find($request->id);


                    $data -> email = $request->input('email');
                    $data -> name = $request->input('name');
                    $data -> summary = $request->input('summary');

                    if($request -> hasFile('image'))
                    {
                        $destination = 'back/uploads/userprofil/'.$data->image;
                        if (\File::exists($destination))
                        {
                            \File::delete($destination);
                        }
                        $file = $request->file('image');
                        $extention = $file->getClientOriginalExtension();
                        $filname = time() . '.' . $extention;
                        $file->move('back/uploads/userprofil/', $filname);
                        $data->image = $filname;
                    }

                    $data->save();
                return redirect()->back()->with('status','Profil Başarılı Bir Şekilde Eklendi');
                }
    }


    public function create(){

        return view('back.pages.user.create');


    }

    public function store(Request $request){

        $request->validate(
            [
                'email' => 'email|unique:users',
                'name' => 'required|min:4|max:40',
                'password' => 'confirmed',
                'image' => 'mimes:jpg,png',
            ],
        );

        $data = new User();

        $data -> name = $request->input('name');
        $data -> email = $request->input('email');
        $data -> password = Hash::make($request->input('password'));
        $data -> summary = $request->input('summary');
        $data -> status  = $request->input('status');
        $data -> bolumu  = $request->input('bolumu');

        if($request -> hasFile('image'))
        {
            $destination = 'back/uploads/userprofil/'.$data->image;
            if (\File::exists($destination))
            {
                \File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move('back/uploads/userprofil/', $filname);
            $data->image = $filname;
        }


        $data->save();
        return redirect()->back()->with('status','Kullanıcı Başarılı Bir Şekilde Eklendi');

    }


    public function delete($id){
        $data = User::find($id);
        if($data->id == 12){
            return redirect()->back()->with('hata','Bu Kullanıcı Silinemez');
        }
        else{
        User::find($id)->delete();

        return redirect()->back()->with('status','Kullanıcı Başarılı Bir Şekilde Silindi');
        }
    }

    public function useredit($id){
        $data = User::find($id);
        return view('back.pages.user.useredit',compact('data'));
    }

    public function userupdate(Request $request){
        $data = User::find($request->id);


        if($data -> email == $request->email)
            {

                $request->validate(
                    [
                        'name' => 'required|min:4|max:25',
                    ],
                );

                $data = User::find($request->id);


                $data -> email = $request->input('email');
                $data -> name = $request->input('name');
                $data -> summary = $request->input('summary');
                $data -> bolumu = $request->input('bolumu');
                $data -> status = $request->input('status');

                if($request -> hasFile('image'))
                {
                    $destination = 'back/uploads/userprofil/'.$data->image;
                    if (\File::exists($destination))
                    {
                        \File::delete($destination);
                    }
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filname = time() . '.' . $extention;
                    $file->move('back/uploads/userprofil/', $filname);
                    $data->image = $filname;
                }

                $data->save();
                return redirect()->back()->with('status','Profil Başarılı Bir Şekilde Eklendi');
            }
            else {


                    $request->validate(
                        [
                            'email' => 'email|unique:users',
                            'name' => 'required|min:4|max:25',
                        ],
                    );

                    $data = User::find($request->id);


                    $data -> email = $request->input('email');
                    $data -> name = $request->input('name');
                    $data -> summary = $request->input('summary');

                    if($request -> hasFile('image'))
                    {
                        $destination = 'back/uploads/userprofil/'.$data->image;
                        if (\File::exists($destination))
                        {
                            \File::delete($destination);
                        }
                        $file = $request->file('image');
                        $extention = $file->getClientOriginalExtension();
                        $filname = time() . '.' . $extention;
                        $file->move('back/uploads/userprofil/', $filname);
                        $data->image = $filname;
                    }

                    $data->save();
                    return redirect()->back()->with('status','Profil Başarılı Bir Şekilde Eklendi');
            }
    }


    public function userupdatepassword(Request $request){


        $request->validate(
            [

                'password' => 'required|min:6|confirmed',


            ],
        );

        $data = User::find($request->id);

        $data -> password = Hash::make($request->input('password'));


            $data->save();

            return redirect()->back()->with('status','Şifre Değiştirme İşlemi Başarılı');





    }
}
















