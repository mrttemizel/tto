<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect(app()->getLocale());
});


Route::group(['prefix' => '{locale}',
'where' => ['locale' => '[a-zA-Z]{2}'],
'middleware' => 'setlocale'], function() {






   Route::get('/',[\App\Http\Controllers\Front\HomeController::class,'index'])->name('front.index');
   Route::get('/anasayfa',[\App\Http\Controllers\Front\HomeController::class,'index2'])->name('front.index2');

   Route::get('/anasayfa',[\App\Http\Controllers\Front\HomeController::class,'index2'])->name('front.index2');



   Route::get('contact',[\App\Http\Controllers\Front\ContactController::class,'contactPage'])->name('contactPage');
   Route::get('vizyon-misyon',[\App\Http\Controllers\Front\PageController::class,'misyonvizyon'])->name('misyonvizyon');
   Route::get('hakkimizda',[\App\Http\Controllers\Front\PageController::class,'hakkimizda'])->name('hakkimizda');
   Route::get('ekibimiz',[\App\Http\Controllers\Front\PageController::class,'ekibimiz'])->name('ekibimiz');
   Route::post('projedetay',[\App\Http\Controllers\Front\PageController::class,'projedetay'])->name('projedetay');


});




//Front End Routes




//Back End Routes


Route::get('/login',[\App\Http\Controllers\back\LoginController::class,'loginPage'])->name('loginPage');
Route::post('/loginController',[\App\Http\Controllers\back\LoginController::class,'login'])->name('login');


Route::middleware('auth')->group(function(){

    Route::get('/logout',[\App\Http\Controllers\back\LoginController::class,'logout'])->name('logout');

    Route::get('/admin/home',[\App\Http\Controllers\back\HomeController::class,'home'])->name('home');



    //Settings Crud
    Route::get('/admin/settings/index',[\App\Http\Controllers\back\SettingsController::class,'index'])->name('settings.index')->middleware('isRole');
    Route::post('/admin/settings/update',[\App\Http\Controllers\back\SettingsController::class,'update'])->name('settings.update')->middleware('isRole');


      //Kurumsal Crud
      Route::get('/admin/kurumsal/index',[\App\Http\Controllers\back\KurumsalController::class,'index'])->name('kurumsal.index')->middleware('isRoleEditor');
      Route::post('/admin/kurumsal/update',[\App\Http\Controllers\back\KurumsalController::class,'update'])->name('kurumsal.update')->middleware('isRoleEditor');




      //OurUS Crud
      Route::get('/admin/ourus/index',[\App\Http\Controllers\back\OurusController::class,'index'])->name('ourus.index')->middleware('isRoleEditor');
      Route::get('/admin/ourus/create',[\App\Http\Controllers\back\OurusController::class,'create'])->name('ourus.create')->middleware('isRoleEditor');
      Route::post('/admin/ourus/store',[\App\Http\Controllers\back\OurusController::class,'store'])->name('ourus.store')->middleware('isRoleEditor');
      Route::get('/admin/ourus/edit{id}',[\App\Http\Controllers\back\OurusController::class,'edit'])->name('ourus.edit')->middleware('isRoleEditor');
      Route::post('/admin/ourus/update',[\App\Http\Controllers\back\OurusController::class,'update'])->name('ourus.update')->middleware('isRoleEditor');
      Route::get('/admin/ourus/delete{id}',[\App\Http\Controllers\back\OurusController::class,'delete'])->name('ourus.delete')->middleware('isRoleEditor');


//ProjeDuyurulari Crud
Route::get('/admin/projeduyurulari/index',[\App\Http\Controllers\back\ProjeDuyurulari::class,'index'])->name('projeduyurulari.index')->middleware('isRoleEditor');
Route::get('/admin/projeduyurulari/create',[\App\Http\Controllers\back\ProjeDuyurulari::class,'create'])->name('projeduyurulari.create')->middleware('isRoleEditor');
Route::post('/admin/projeduyurulari/store',[\App\Http\Controllers\back\ProjeDuyurulari::class,'store'])->name('projeduyurulari.store')->middleware('isRoleEditor');
Route::get('/admin/projeduyurulari/edit{id}',[\App\Http\Controllers\back\ProjeDuyurulari::class,'edit'])->name('projeduyurulari.edit')->middleware('isRoleEditor');
Route::post('/admin/projeduyurulari/update',[\App\Http\Controllers\back\ProjeDuyurulari::class,'update'])->name('projeduyurulari.update')->middleware('isRoleEditor');
Route::get('/admin/projeduyurulari/delete{id}',[\App\Http\Controllers\back\ProjeDuyurulari::class,'delete'])->name('projeduyurulari.delete')->middleware('isRoleEditor');



     //isOrtaklarimiz Crud
     Route::get('/admin/isortaklarimiz/index',[\App\Http\Controllers\back\isOrtaklarimiz::class,'index'])->name('isortaklarimiz.index')->middleware('isRoleEditor');
     Route::get('/admin/isortaklarimiz/create',[\App\Http\Controllers\back\isOrtaklarimiz::class,'create'])->name('isortaklarimiz.create')->middleware('isRoleEditor');
     Route::post('/admin/isortaklarimiz/store',[\App\Http\Controllers\back\isOrtaklarimiz::class,'store'])->name('isortaklarimiz.store')->middleware('isRoleEditor');
     Route::get('/admin/isortaklarimiz/edit{id}',[\App\Http\Controllers\back\isOrtaklarimiz::class,'edit'])->name('isortaklarimiz.edit')->middleware('isRoleEditor');
     Route::post('/admin/isortaklarimiz/update',[\App\Http\Controllers\back\isOrtaklarimiz::class,'update'])->name('isortaklarimiz.update')->middleware('isRoleEditor');
     Route::get('/admin/isortaklarimiz/delete{id}',[\App\Http\Controllers\back\isOrtaklarimiz::class,'delete'])->name('isortaklarimiz.delete')->middleware('isRoleEditor');




    //Slider Crud
    Route::get('/admin/slider/index',[\App\Http\Controllers\back\SliderController::class,'index'])->name('slider.index')->middleware('isRoleEditor');
    Route::get('/admin/slider/create',[\App\Http\Controllers\back\SliderController::class,'create'])->name('slider.create')->middleware('isRoleEditor');
    Route::post('/admin/slider/store',[\App\Http\Controllers\back\SliderController::class,'store'])->name('slider.store')->middleware('isRoleEditor');
    Route::get('/admin/slider/edit{id}',[\App\Http\Controllers\back\SliderController::class,'edit'])->name('slider.edit')->middleware('isRoleEditor');
    Route::post('/admin/slider/update',[\App\Http\Controllers\back\SliderController::class,'update'])->name('slider.update')->middleware('isRoleEditor');
    Route::get('/admin/slider/delete{id}',[\App\Http\Controllers\back\SliderController::class,'delete'])->name('slider.delete')->middleware('isRoleEditor');



        //announcement Crud
        Route::get('/admin/announcement/index',[\App\Http\Controllers\back\AnnouncementController::class,'index'])->name('announcement.index')->middleware('isRoleEditor');
        Route::get('/admin/announcement/create',[\App\Http\Controllers\back\AnnouncementController::class,'create'])->name('announcement.create')->middleware('isRoleEditor');
        Route::post('/admin/announcement/store',[\App\Http\Controllers\back\AnnouncementController::class,'store'])->name('announcement.store')->middleware('isRoleEditor');
        Route::get('/admin/announcement/edit{id}',[\App\Http\Controllers\back\AnnouncementController::class,'edit'])->name('announcement.edit')->middleware('isRoleEditor');
        Route::post('/admin/announcement/update',[\App\Http\Controllers\back\AnnouncementController::class,'update'])->name('announcement.update')->middleware('isRoleEditor');
        Route::get('/admin/announcement/delete{id}',[\App\Http\Controllers\back\AnnouncementController::class,'delete'])->name('announcement.delete')->middleware('isRoleEditor');


     //projects Crud

     Route::get('/admin/projects/combocreate',[\App\Http\Controllers\back\ProjectsController::class,'combocreate'])->name('projects.combocreate')->middleware('isRoleEditor');
     Route::post('/admin/projects/storeKuruluslar',[\App\Http\Controllers\back\ProjectsController::class,'storeKuruluslar'])->name('projects.storeKuruluslar')->middleware('isRoleEditor');
     Route::post('/admin/projects/storeTuru',[\App\Http\Controllers\back\ProjectsController::class,'storeTuru'])->name('projects.storeTuru')->middleware('isRoleEditor');
     Route::get('/admin/projects/deleteKuruluslar{id}',[\App\Http\Controllers\back\ProjectsController::class,'deleteKuruluslar'])->name('projects.deleteKuruluslar')->middleware('isRoleEditor');
     Route::get('/admin/projects/deleteTuru{id}',[\App\Http\Controllers\back\ProjectsController::class,'deleteTuru'])->name('projects.deleteTuru')->middleware('isRoleEditor');
     Route::get('/admin/projects/create',[\App\Http\Controllers\back\ProjectsController::class,'create'])->name('projects.create');
     Route::get('/admin/projects/index',[\App\Http\Controllers\back\ProjectsController::class,'index'])->name('projects.index');
     Route::post('/admin/projects/store',[\App\Http\Controllers\back\ProjectsController::class,'store'])->name('projects.store');
     Route::get('/admin/projects/edit{id}',[\App\Http\Controllers\back\ProjectsController::class,'edit'])->name('projects.edit');
     Route::get('/admin/projects/delete{id}',[\App\Http\Controllers\back\ProjectsController::class,'delete'])->name('projects.delete');
     Route::post('/admin/projects/update',[\App\Http\Controllers\back\ProjectsController::class,'update'])->name('projects.update');






    //User Crud
    Route::get('/admin/user/profil',[\App\Http\Controllers\back\UserController::class,'profil'])->name('user.profil');
    Route::post('/admin/user/editpassword',[\App\Http\Controllers\back\UserController::class,'editpassword'])->name('user.editpassword');
    Route::post('/admin/user/profilupdate',[\App\Http\Controllers\back\UserController::class,'profilupdate'])->name('user.profilupdate');


    Route::get('/admin/user/index',[\App\Http\Controllers\back\UserController::class,'index'])->name('user.index')->middleware('isRoleEditor');
    Route::get('/admin/user/create',[\App\Http\Controllers\back\UserController::class,'create'])->name('user.create')->middleware('isRoleEditor');
    Route::post('/admin/user/store',[\App\Http\Controllers\back\UserController::class,'store'])->name('user.store')->middleware('isRoleEditor');
    Route::get('/admin/user/useredit{id}',[\App\Http\Controllers\back\UserController::class,'useredit'])->name('user.useredit')->middleware('isRoleEditor');
    Route::get('/admin/user/delete{id}',[\App\Http\Controllers\back\UserController::class,'delete'])->name('user.delete')->middleware('isRoleEditor');
    Route::post('/admin/user/userupdate',[\App\Http\Controllers\back\UserController::class,'userupdate'])->name('user.userupdate')->middleware('isRoleEditor');
    Route::post('/admin/user/userupdatepassword',[\App\Http\Controllers\back\UserController::class,'userupdatepassword'])->name('user.userupdatepassword')->middleware('isRoleEditor');



});
