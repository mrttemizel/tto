@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Kullanıcı Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">Ad Soyad:</label>
                    <input type="text" name="name"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">E-Posta:</label>
                    <input type="text" name="email"  class="form-control">
                </div>

            </div>

            <div class="row mt-2">
                
                <div class="mb-3 col-12">
                    <label class="form-label">Hakkında:</label>
                    <input type="text" name="summary" class="form-control">
                </div>
            </div>

            <div class="row">

                <div class="mb-3 col-12">
                    <label class="form-label">Bölümü:</label>
                    <input type="text" name="bolumu"  class="form-control">
                </div>


            </div>
          
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Şifre:</label>
                    <input type="password" name="password"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Şifre Tekrar:</label>
                    <input type="password" name="password_confirmation"  class="form-control">
                </div>

            </div>
            
           
       
            <div class="row mt-2">
                
                <div class="mb-3 col-6">
                    <label class="form-label">Rolü:</label>
                    <select class="form-select mysiteinput" aria-label="form-select" name="status">
                        
                        <option disabled>Kullanıcı Rolü</option>
                        <option value="0" selected>Editör</option>
                        <option value="2">Proje Yöneticisi</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Resim:</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
      
      
         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Kullanıcı Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection