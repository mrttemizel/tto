@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Proje Duyuru Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{route('projeduyurulari.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger font-weight-bold">
                    {{$errors->first()}}
                </div>
            @endif
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Başlık - TR:</label>
                    <input type="text" name="proje_baslik_tr"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Başlık - EN:</label>
                    <input type="text" name="proje_baslik_en"  class="form-control">
                </div>

            </div>
          
            
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Kısa Baslik - TR:</label>
                    <input type="text" name="proje_kisa_baslik_tr"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Proje Kısa Baslik - EN:</label>
                    <input type="text" name="proje_kisa_baslik_en"  class="form-control">
                </div>

            </div>

            <div class="row mt-2">
                <div class="mb-3 col-12">
                    <label class="form-label">Proje Yurutucu Adi:</label>
                    <input type="text" name="proje_yurutucusu"  class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Duyuru Baslama Tarihi:</label>
                    <input type="date" name="proje_baslama_tarihi"  class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Duyuru Bitiş Tarihi:</label>
                    <input type="date" name="proje_bitis_tarihi"  class="form-control">
                </div>
            </div>

            <hr>
            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Ön Görsel - <span style="color: red">Görsel Boyuntunu 500*403 px olarak kaydediniz</span></label>
                    <input type="file" name="image_proje" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Proje Banner - <span style="color: red">Görsel Boyuntunu 1170*533 px olarak kaydediniz</span></label>
                    <input type="file" name="image_banner" class="form-control">
                </div>
            </div>
            <hr>
          
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - TR:</label>
                    <textarea name="aciklama_tr" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                </div>
            </div>    
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">İçerik - EN:</label>
                    <textarea name="aciklama_en" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                 </div>
            </div>   

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection