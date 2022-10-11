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
                <li>@lang('anasayfa.ekibimiz')</li>
            </ul>
            <h2>@lang('anasayfa.ekibimiz')</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<section class="team-one about-page-team">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">@lang('ekibimiz.tto')</span>
            <h2 class="section-title__title">@lang('ekibimiz.yonetim')</h2>
        </div>
        <div class="row">
            @foreach($ourus as $ouruss)
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team-one__single  wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="team-one__img">
                        @if($ouruss->image == '')
                            <img src="{{asset('back/uploads/userprofil/1662385803.png')}}" alt="">
                        @else
                            <img src="{{asset('back/uploads/ourus/'.$ouruss->image)}}" alt="">                        @endif
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__name">{{$ouruss->name.' '.$ouruss->surname}}</h3>
                        <p class="team-one__title">{{$ouruss->job}}</p>
                        <p class="team-one__title">{!! $ouruss->description !!}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>


@endsection
