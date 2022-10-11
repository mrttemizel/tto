<?php

namespace App\Providers;

use App\Models\back\IsOrtaklarimiz;
use App\Models\back\ProjeDuyurular;
use App\Models\back\Setting;
use App\Models\back\Slider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('front.layouts._partials._strickyHeader',function($view){
        $view->with('data',Setting::find(1));
       });



       view()->composer('front.layouts._partials._mainSlider',function($view){
        $view->with('data', Slider::all()->where('status',0));
       });

       view()->composer('front.layouts._partials._brandOne',function($view){
        $view->with('data', IsOrtaklarimiz::all());
       });

       view()->composer('front.layouts._partials._projectOne',function($view){
        $view->with('data', ProjeDuyurular::all()->where('status',0));
       });


    }
}
