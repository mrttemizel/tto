<?php
namespace App\Config;

?>
<div class="page-wrapper">
    <header class="main-header clearfix">
        <div class="main-header__top clearfix">
            <div class="main-header__top-inner clearfix">
                <div class="main-header__top-left">
                    <ul class="list-unstyled main-header__top-address">
                        <li>
                            <div class="icon">
                                <span class="icon-pin"></span>
                            </div>
                            <div class="text">
                                <p>{{$data->adress}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-email"></span>
                            </div>
                            <div class="text">
                                <p><a href="#">{{$data->email}}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                     <a href="{{route('loginPage')}}" class="btn btn-sm me-3 bg-gradient p-1 text-white font-weight-bold" style="background: #2D4F81;">Proje Yönetim Paneli</a>   
                    <div class="main-header__top-right-social">
                        <a href="{{$data->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{$data->facebook}}"><i class="fab fa-facebook"></i></a>
                        <a href="{{$data->instagram}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper clearfix">
                <div class="main-menu-wrapper-inner clearfix">
                    <div class="main-menu-wrapper__left clearfix">
                        <div class="main-menu-wrapper__logo">
                            <a href="{{ route('front.index2', app()->getLocale()) }}"><img src="{{ asset('back/uploads/sitelogo/ttoMavi.svg') }}" style="position: relative; bottom:10px;" width="150px" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown current">
                                    <a href="{{ route('front.index2', app()->getLocale()) }}">@lang('anasayfa.anasayfa')</a>
                                </li>
                                <li>
                                    <a href="#">@lang('anasayfa.abutthakkinda')</a>
                                    <ul>
                                        <li><a href="{{ route('hakkimizda', app()->getLocale()) }}">@lang('anasayfa.hakkimizda')</a></li>
                                        <li><a href="{{ route('misyonvizyon', app()->getLocale()) }}">@lang('anasayfa.misyonvizyon')</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">@lang('anasayfa.duyurular')</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">@lang('anasayfa.projelerimiz')</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('ekibimiz', app()->getLocale()) }}">@lang('anasayfa.ekibimiz')</a>

                                </li>
                                <li><a href="{{ route('contactPage', app()->getLocale()) }}">@lang('anasayfa.bizeulasin')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <img src="{{ asset('Front/images/shapes/phone-icon.png') }}" alt="">
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>@lang('anasayfa.bizeulasintel')</p>
                                <h5>{{$data->phone}}</h5>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__search-box-cart-box">


                            @foreach (config('app.available_locales') as $locale)
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                    @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                            </li>

                           
                        @endforeach








                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div>
