@extends('front.layouts.master')


@section('content')



<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ URL::asset('back/uploads/slider/tt.jpg')}});">
    </div>
    <div class="page-header-bg-overly"></div>
    <div class="page-header-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url({{ URL::asset('front/images/shapes/page-header-shape.png')}});"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">@lang('anasayfa.anasayfa')</a></li>
                <li><span>/</span></li>
                <li>@lang('anasayfa.misyonvizyon')</li>
            </ul>
            <h2>@lang('anasayfa.misyonvizyon')</h2>
        </div>
    </div>
</section>
<!--Page Header End-->








<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="service-details__right">
                    <div class="service-details__img">
                        <img src="assets/images/resources/service-details-img-1.jpg" alt="">
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__title">@lang('anasayfa.misyon')</h3>
                        <p class="service-details__text">{!!$data->misyon!!}</p>
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__title">@lang('anasayfa.vizyon')</h3>
                        <p class="service-details__text">{!!$data->vizyon!!}</p>
                    </div>
                  
                    
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection