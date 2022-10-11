@extends('back.layouts.master')



@section('content-area')

<h6 class="mb-0 text-uppercase">Slider Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
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
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Üst Baslık - TR:</label>
                    <input type="text" name="header_tr"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Üst Baslık - EN:</label>
                    <input type="text" name="header_en"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Alt Yazı - TR:</label>
                    <input type="text" name="text_tr"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Alt Yazı - EN:</label>
                    <input type="text" name="text_en"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Button - TR: </label><span class="text-danger"> **BUTTON HTML YAPIDA GİRİLMESİ GEREKMEKTEDİR** </span>
                    <input type="text" name="button_tr"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Button - EN:</label><span class="text-danger"> **BUTTON HTML YAPIDA GİRİLMESİ GEREKMEKTEDİR** </span>
                    <input type="text" name="button_en"  class="form-control">
                </div>
            </div>
            
          
          
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Resmi:</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
          
          

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Katergori Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection