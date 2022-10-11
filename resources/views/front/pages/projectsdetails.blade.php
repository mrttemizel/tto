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
                <li>@lang('anasayfa.projeDetay')</li>
            </ul>
            <h2>@lang('anasayfa.projeDetay')</h2>
        </div>
    </div>
</section>

<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__img-box">
                    <img src="{{ asset('back/uploads/projeDuyuru/banner/1657103828.jpg') }}" alt="">
                    <div class="project-details__details-box">
                        <ul class="project-details__details-info list-unstyled">
                            <li>
                                <h5 class="project-details__client">@lang('anasayfa.projeSahibi')</h5>
                                <p class="project-details__name">{{$data->proje_yurutucusu}}</p>
                            </li>
                            <li>
                                <h5 class="project-details__client">@lang('anasayfa.projeAdi')</h5>
                                <p class="project-details__name">asdasd</p>
                            </li>
                            <li>
                                <h5 class="project-details__client">@lang('anasayfa.projeBaslangicTarihi')</h5>
                                <p class="project-details__name">{{$data->proje_baslama_tarihi}}</p>
                            </li>
                            <li>
                                <h5 class="project-details__client">@lang('anasayfa.projeBitisTarihi')</h5>
                                <p class="project-details__name">{{$data->proje_bitis_tarihi}}</p>
                            </li>
                          
                        </ul>
                    </div>
                </div>
                <div class="project-details__content">
                    <h2 class="project-details__title">Research & Energy</h2>
                    <p class="project-details__text-1">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout. The point of
                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                        opposed to using 'Content here, content here', making it look like readable English.
                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy.</p>
                    <p class="project-details__text-2">Tincidunt elit magnis nulla facilisis sagittis sapien
                        nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo orci.
                        Sapien nunc amet ultrices. Neque porro est qui dolorem ipsum quia quaed inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis
                        enim var sed efficitur turpis gilla sed sit amet finibus eros.</p>
                </div>
                <ul class="list-unstyled project-details__list">
                    <li>
                        <div class="icon">
                            <span class="icon-check"></span>
                        </div>
                        <div class="text">
                            <p>Take a look at our round up of the best shows</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-check"></span>
                        </div>
                        <div class="text">
                            <p>It has survived not only five centuries</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-check"></span>
                        </div>
                        <div class="text">
                            <p>Lorem Ipsum has been the ndustry standard dummy <text></text></p>
                        </div>
                    </li>
                </ul>
                <div class="project-details__pagination-box">
                    <ul class="project-details__pagination list-unstyled">
                        <li class="next">
                            <a href="#" aria-label="Previous"><i class="icon-right-arrow"></i>Previous</a>
                        </li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="previous">
                            <a href="#" aria-label="Next">Next<i class="icon-right-arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection