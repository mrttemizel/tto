@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">{{$data->name.' '.$data->surname}} -> Düzenle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('ourus.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
             <input type="hidden" name="id" value="{{$data->id}}">
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Ad:</label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Soyad:</label>
                    <input type="text" name="surname"  value="{{$data->surname}}"  class="form-control">
                    <span class="text-danger">@error('surname'){{ $message }}@enderror</span>

                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Meslek ( TR ):</label>
                    <input type="text" name="job_tr"  value="{{$data->job_tr}}"  class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Meslek ( EN ):</label>
                    <input type="text" name="job_en"  value="{{$data->job_en}}"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">E-Posta :</label>
                    <input type="text" name="eposta"  value="{{$data->eposta}}"  class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">Image:</label>
                    <input type="file" name="image" name="cv" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    @if($data->image == '')
                        <p class="text-danger">Daha Önce Resim Yüklenmemiş</p>
                    @else
                        <img src="{{ asset('back/uploads/ourus/'.$data->image) }}"  height="100px" width="100px" alt="">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Açıklama:</label>
                    <textarea name="description_tr" id="" cols="40"    class="form-control ckeditor" rows="10">{!! $data->description_tr !!}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Açıklama:</label>
                    <textarea name="description_en" id="" cols="40"    class="form-control ckeditor" rows="10">{!! $data->description_en !!}</textarea>
                </div>
            </div>

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>

        </form>
    </div>
</div>

@endsection
