@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Personel Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('ourus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Ad:</label><span class="text-danger m-1">*</span>
                    <input type="text" name="name"  class="form-control">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Soyad:</label><span class="text-danger m-1">*</span>
                    <input type="text" name="surname"  class="form-control">
                    <span class="text-danger">@error('surname'){{ $message }}@enderror</span>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Meslek ( TR ):</label>
                    <input type="text" name="job_tr"  class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Meslek ( EN ):</label>
                    <input type="text" name="job_en"  class="form-control">
                </div>
            </div>

            <div class="row mt-2">
                <div class="mb-3 col-6">
                    <label class="form-label">E-Posta:</label>
                    <input type="text" name="eposta"  class="form-control">

                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>

            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Açıklama ( TR ):</label>
                    <textarea name="description_tr" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Açıklama ( EN ):</label>
                    <textarea name="description_en" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                </div>
            </div>


         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection
