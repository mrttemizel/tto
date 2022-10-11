@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Proje Duyuru Düzenle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{route('projeduyurulari.update')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="row">
                <div class="mb-3 col-6">
                <label class="form-label">Proje Durumu</label>

                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="status" {{$data ->status==0 ? "checked" : ""}} >

                     </div>
                </div>
            </div>
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Başlık - TR:</label>
                    <input type="text" name="proje_baslik_tr" value="{{$data->proje_baslik_tr}}" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Başlık - EN:</label>
                    <input type="text" name="proje_baslik_en" value="{{$data->proje_baslik_en}}" class="form-control">
                </div>

            </div>


            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Kısa Baslik - TR:</label>
                    <input type="text" name="proje_kisa_baslik_tr" value="{{$data->proje_kisa_baslik_tr}}" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Kısa Baslik - EN:</label>
                    <input type="text" name="proje_kisa_baslik_en" value="{{$data->proje_kisa_baslik_en}}" class="form-control">
                </div>

            </div>

            <div class="row mt-2">
                <div class="mb-3 col-12">
                    <label class="form-label">Proje Yurutucu Adi:</label>
                    <input type="text" name="proje_yurutucusu" value="{{$data->proje_yurutucusu}}" class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Duuru Baslama Tarihi:</label>
                    <input type="date" name="proje_baslama_tarihi" value="{{$data->proje_baslama_tarihi}}" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Duyuru Bitiş Tarihi:</label>
                    <input type="date" name="proje_bitis_tarihi" value="{{$data->proje_bitis_tarihi}}" class="form-control">
                </div>
            </div>
            <input type="hidden" name="id" value="{{$data->id}}" >
            <hr>
            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Ön Görsel:</label>
                    <input type="file" name="image_proje" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <img src="{{ asset('back/uploads/projeDuyuru/proje/'.$data->image_proje) }}" height="100px" width="100px" alt="">

                </div>
            </div>
            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Banner:</label>
                    <input type="file" name="image_banner" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <img src="{{ asset('back/uploads/projeDuyuru/banner/'.$data->image_banner) }}" height="100px" width="100px" alt="">

                </div>
            </div>
            <hr>

            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - TR:</label>
                    <textarea name="aciklama_tr" id="" cols="40" class="form-control ckeditor" rows="10">{!!$data->aciklama_tr!!}</textarea>
                </div>
            </div>
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - EN:</label>
                    <textarea name="aciklama_en" id="" cols="40" class="form-control ckeditor" rows="10">{!!$data->aciklama_en!!}</textarea>
                 </div>
            </div>

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection
