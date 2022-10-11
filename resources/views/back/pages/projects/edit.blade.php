@extends('back.layouts.master')



    @section('addcss')

        <link rel="stylesheet" href="{{asset('back/css/nice-select.css')}}">
    @endsection



@section('content-area')

    <div class="card-header d-flex justify-content-between align-items-center border border-2 border-success">
        <h6 class="mb-0 text-uppercase">Proje Güncelle</h6>
        <a href="{{route('projects.index')}}" class="bg-gradient bg-success text-white btn btn-sm">Proje Listele</a>
    </div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('projects.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            @if(Auth::user()->status == 1 || Auth::user()->status == 0)

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Sitede Göster</label>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="proje_gosterimi" {{$data->proje_gosterimi==1 ? "checked" : ""}} >

                    </div>
                </div>
            </div>
            @endif
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">Proje Adı:</label>
                    <input type="text" name="projeAdi"  value="{{$data->projeAdi}}"  class="form-control">
                    <span class="text-danger">@error('projeAdi'){{ $message }}@enderror</span>

                </div>

            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">APDK Kodu:</label>
                    <input type="text" name="apdkkodu"  value="{{$data->apdkkodu}}" class="form-control">
                    <span class="text-danger">@error('apdkkodu'){{ $message }}@enderror</span>

                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Kodu:</label>
                    <input type="text" name="projekodu" value="{{$data->projekodu}}"  class="form-control">
                    <span class="text-danger">@error('projekodu'){{ $message }}@enderror</span>

                </div>

            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Yurutucusu:</label>
                    <select class="m-select"  name="yurutucu_id">
                        <option value="{{ $data->getYurutucu->id }}" selected>{{ $data->getYurutucu->name }}</option>
                        @foreach($users as $user)

                            @if($user->status == 2)
                                @if($data->getYurutucu->name == Auth::user()->name)
                                {

                                }
                                @else
                                @if($data->getYurutucu->name == $user->name )
                                    @continue
                                @endif
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endif

                        @endforeach
                    </select>
                    <span class="text-danger">@error('yurutucu_id'){{ $message }}@enderror</span>
                </div>

                <input type="hidden" name="id"  value="{{$data->id}}">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Yurutucusu Bölümü:</label>
                    <select class="m-select"  name="yurutucuHocaBolumu_id">
                        <option value="{{ $data->getYurutucuBolum->id }}" selected>{{ $data->getYurutucuBolum->bolumu }}</option>
                        @foreach($users as $user)

                            @if(is_null($user->bolumu))

                            @else
                            @if($data->getYurutucu->bolumu == $user->bolumu )
                                @continue
                            @endif
                            <option value="{{ $user->id }}">{{ $user->bolumu }}</option>
                            @endif

                    @endforeach
                    </select>
                    <span class="text-danger">@error('yurutucuHocaBolumu_id'){{ $message }}@enderror</span>

                </div>

            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Basvuru Tarihi:</label>
                    <input type="date" class="form-control" value="{{$data->basvurutarihi}}" name="basvurutarihi">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Onay Tarihi</label>
                    <input type="date" class="form-control" value="{{$data->onaytarihi}}" name="onaytarihi">
                </div>

            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Başlama Tarihi</label>
                    <input type="date" class="form-control"  value="{{$data->baslamatarihi}}"  name="baslamatarihi">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Bitiş Tarihi</label>
                    <input type="date" class="form-control"   value="{{$data->bitistarihi}}"  name="bitistarihi">
                </div>

            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Kurulus:</label>
                    @if($data->kurulus_id == '')
                        <select class="form-select " aria-label="Default select example" name="kurulus_id">
                            <option selected="" disabled>Kurulus Seçiniz</option>
                            @foreach( $kurulus as $item)
                                <option value="{{$item -> id}}">{{$item->kuruluslar}}</option>
                            @endforeach
                        </select>
                    @else
                    <select class="form-select " aria-label="Default select example" name="kurulus_id">
                        <option value="{{ $data->getKurulus->id }}" selected>{{ $data->getKurulus->kuruluslar }}</option>
                        @foreach($kurulus as $kuruluslar)
                            @if($data->getKurulus->kurulus == $kuruluslar->kuruluslar )
                            @continue
                             @endif
                        <option value="{{ $kuruluslar->id }}">{{ $kuruluslar->kuruluslar }}</option>
                         @endforeach
                       </select>
                    @endif
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Dumuru:</label>
                    @if($data->durumu_id == '')
                        <select class="form-select" aria-label="Default select example" name="durumu_id">
                            <option selected="" disabled>Proje Durumunu Seçiniz</option>
                            @foreach( $durumu as $item)
                                <option value="{{$item -> id}}">{{$item -> durum}}</option>
                            @endforeach
                        </select>
                    @else
                    <select class="form-select" aria-label="Default select example" name="durumu_id">
                        <option value="{{ $data->getDurum->id }}" selected>{{ $data->getDurum->durum }}</option>
                        @foreach($durumu as $durumus)
                        @if($data->getDurum->durum == $durumus->durum )
                            @continue
                        @endif
                        <option value="{{ $durumus->id }}">{{ $durumus->durum }}</option>
                    @endforeach

                    </select>
                    @endif
                </div>

            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Türü:</label>
                    @if($data->turu_id == '')
                        <select class="form-select " aria-label="Default select example" name="turu_id">
                            <option selected="" disabled>Proje Türünü Seçiniz</option>
                            @foreach( $turu as $item)
                                <option value="{{$item -> id}}">{{$item->turu}}</option>
                            @endforeach
                        </select>
                    @else
                    <select class="form-select " aria-label="Default select example" name="turu_id">
                        <option value="{{ $data->getTuru->id }}" selected>{{ $data->getTuru->turu }}</option>
                        @foreach($turu as $turus)
                            @if($data->getTuru->turu == $turus->turu )
                                @continue
                            @endif
                            <option value="{{ $turus->id }}">{{ $turus->turu }}</option>
                        @endforeach

                    </select>
                    @endif
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Destek Kaynağı:</label>
                    <input type="text" name="destekkaynagi"  value="{{$data->destekkaynagi}}" class="form-control">
                </div>

            </div>

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Bütçe:</label>
                    <input type="text" name="butce" value="{{$data->butce}}"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Para Birimi:</label>
                    @if($data->parabirimi_id == '')
                        <select class="form-select " aria-label="Default select example" name="parabirimi_id">
                            <option selected="" disabled>Para Birimi</option>
                            @foreach( $parabirimi as $item)
                                <option value="{{$item -> id}}">{{$item -> parabirimi}}</option>
                            @endforeach
                        </select>
                    @else
                    <select class="form-select " aria-label="Default select example" name="parabirimi_id" >
                        <option value="{{ $data->getParaBirimi->id }}" selected>{{ $data->getParaBirimi->parabirimi }}</option>
                                        @foreach($parabirimi as $parabirimis)
                                            @if($data->getParaBirimi->parabirimi == $parabirimis->parabirimi )
                                                @continue
                                            @endif
                                            <option value="{{ $parabirimis->id }}">{{ $parabirimis->parabirimi }}</option>
                                        @endforeach

                    </select>
                    @endif
                </div>

            </div>

            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Kanıt:</label>
                    <input type="text" name="kanit" value="{{$data -> kanit}}" class="form-control">
                    <span class="text-danger">@error('kanit'){{ $message }}@enderror</span>

                </div>

            </div>

            <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>

        </form>
    </div>
</div>

@endsection


@section('addjs')

    <script src="{{asset("back/js/nice-select.js")}}"></script>

@endsection
