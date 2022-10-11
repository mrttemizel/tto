@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Duyuru Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
            <div class="alert border-0 border-danger border-start border-4 bg-light-danger alert-dismissible fade show py-2">
              <div class="d-flex align-items-center">
                <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
                </div>
                <div class="ms-3">
                  <div class="text-danger">{{$errors->first()}}</div>
                </div>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              
            @endif
            @if(session('status'))
            <div class="alert border-0 border-success border-start border-4 bg-light-success alert-dismissible fade show py-2">
              <div class="d-flex align-items-center">
                <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                </div>
                <div class="ms-3">
                  <div class="text-success">{{ session('status') }}</div>
                </div>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
             @endif

            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Duyuru Adı - TR:</label>
                    <input type="text" name="name_tr"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Duyuru Adı - EN:</label>
                    <input type="text" name="name_en"  class="form-control">
                </div>

            </div>
       
            
            <div class="row mt-2">
                <div class="mb-3 col-12">
                    <label class="form-label">Duyuru Resmi:</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
         
          
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">Duyuru İçerik - TR:</label>
                    <textarea name="content_tr" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                </div>
            </div>    
            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">Duyuru İçerik - EN:</label>
                    <textarea name="content_en" id="" cols="40" class="form-control ckeditor" rows="10"></textarea>
                 </div>
            </div>   

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection