@extends('back.layouts.master')

@section('addcss')

    <link rel="stylesheet" href="{{asset('back/css/nice-select.css')}}">
@endsection

@section('content-area')

    <div class="card-header  d-flex justify-content-between align-items-center border-2 border border-success">
        <h6 class="mb-0 text-uppercase">Proje Ekle</h6>
        <a href="{{route('projects.index')}}" class="bg-gradient bg-success  text-white btn btn-sm">Proje Listele</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST" id="projeAdd" enctype="multipart/form-data">
                @csrf

                @if(session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="row">
                    <div class="mb-3 col-12">
                        <label class="form-label">Proje Adı:</label>
                        <span class="text-danger">@error('projeAdi'){{ $message }}@enderror</span>
                        <input type="text" name="projeAdi" class="form-control">

                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">APDK Kodu:</label>
                        <input type="text" name="apdkkodu" class="form-control">
                        <span class="text-danger">@error('apdkkodu'){{ $message }}@enderror</span>

                    </div>

                    <div class="mb-3 col-6">
                        <label class="form-label">Proje Kodu:</label>
                        <input type="text" name="projekodu" class="form-control">
                        <span class="text-danger">@error('projekodu'){{ $message }}@enderror</span>

                    </div>

                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">Proje Yurutucusu:</label>
                        <span class="text-danger">@error('yurutucu_id'){{ $message }}@enderror</span>
                        <select name="yurutucu_id" class="m-select">
                            <option selected="" disabled>Proje Yurutucusı Seçiniz</option>
                            @if(Auth::user()->status == 2)
                                {
                                <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                                }
                            @else
                                {
                                @foreach( $users as $item)
                                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                                @endforeach
                                }
                            @endif
                        </select>

                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Proje Yurutucusu Bölümü:</label>
                        <select  class="m-select" name="yurutucuHocaBolumu_id">
                            <option selected="" disabled>Proje Yurutucu Bölümü Seçiniz</option>
                            @if(Auth::user()->status == 2)
                                {
                                <option selected="" value="{{Auth::user()->id}}">{{Auth::user()->bolumu}}</option>
                                }
                            @else
                                {
                                @foreach( $users as $item)
                                    @if(is_null($item->bolumu))

                                    @else
                                        <option value="{{$item -> id}}">{{$item -> bolumu}}</option>
                                    @endif
                                @endforeach
                                }
                            @endif

                        </select>
                        <span class="text-danger">@error('yurutucuHocaBolumu_id'){{ $message }}@enderror</span>

                    </div>

                </div>


                <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Basvuru Tarihi:</label>
                        <input type="date" class="form-control" name="basvurutarihi">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Onay Tarihi</label>
                        <input type="date" class="form-control" name="onaytarihi">
                    </div>

                </div>

                <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Başlama Tarihi</label>
                        <input type="date" class="form-control" name="baslamatarihi">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Bitiş Tarihi</label>
                        <input type="date" class="form-control" name="bitistarihi">
                    </div>

                </div>

                <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Kurulus:</label>
                        <select class="form-select " aria-label="Default select example" name="kurulus_id">
                            <option selected="" disabled>Kurulus Seçiniz</option>
                            @foreach( $kurulus as $item)
                                <option value="{{$item -> id}}">{{$item->kuruluslar}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Durumu:</label>
                        <select class="form-select" aria-label="Default select example" name="durumu_id">
                            <option selected="" disabled>Proje Durumunu Seçiniz</option>
                            @foreach( $durumu as $item)
                                <option value="{{$item -> id}}">{{$item -> durum}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Program Adı:</label>
                        <select class="form-select " aria-label="Default select example" name="turu_id">
                            <option selected="" disabled>Program Adı Seçiniz</option>
                            @foreach( $turu as $item)
                                <option value="{{$item -> id}}">{{$item->turu}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Destek Kaynağı:</label>
                        <input type="text" name="destekkaynagi" class="form-control">
                    </div>

                </div>

                <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Bütçe:</label>
                        <input type="text" name="butce" class="form-control">
                    </div>

                    <div class="mb-3 col-6">
                        <label class="form-label">Para Birimi:</label>
                        <select class="form-select" aria-label="Default select example" name="parabirimi_id">
                            <option selected="" disabled>Para Birimi</option>
                            @foreach( $parabirimi as $item)
                                <option value="{{$item -> id}}">{{$item -> parabirimi}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="mb-3 col-12">
                          <label class="form-label">Kanıt:</label>
                        <input type="text" name="kanit" class="form-control">
                        <span class="text-danger">@error('kanit'){{ $message }}@enderror</span>

                    </div>

                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </div>

            </form>
        </div>
    </div>

@endsection

@section('addjs')

    <script src="{{asset("back/js/nice-select.js")}}"></script>

@endsection
