@extends('back.layouts.master')



@section('content-area')

<h6 class="mb-0 text-uppercase">Slider Düzenle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('slider.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger font-weight-bold">
                    {{$errors->first()}}
                </div>
            @endif
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            

                <input type="hidden" name="id" value="{{ $data->id}}">

            <div class="row">
                <div class="mb-3 col-6">
                <label class="form-label">Slider Durumu</label>

                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="status" {{$data ->status==0 ? "checked" : ""}} >
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Üst Baslık - TR:</label>
                    <input type="text" name="header_tr" value="{{ $data->header_tr}}"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Üst Baslık - EN:</label>
                    <input type="text" name="header_en"  value="{{ $data->header_en}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Alt Yazı - TR:</label>
                    <input type="text" name="text_tr" value="{{ $data->text_tr}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Slider Alt Yazı - EN:</label>
                    <input type="text" name="text_en"  value="{{ $data->text_en}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Button - TR: </label><span class="text-danger"> **BUTTON HTML YAPIDA GİRİLMESİ GEREKMEKTEDİR** </span>
                    <input type="text" name="button_tr"  value="{{ $data->button_tr}}" class="form-control">
                </div> 
            </div>
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Button - EN:</label><span class="text-danger"> **BUTTON HTML YAPIDA GİRİLMESİ GEREKMEKTEDİR** </span>
                    <input type="text" name="button_en" value="{{ $data->button_en}}"  class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Slider Resmi:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <p class="mb-1">Slider Resmi: --></p>
                            </div>
                            <div class="ms-auto fs-2 text-danger">
                               <img src="{{ asset('back/uploads/slider/'.$data->image) }}" height="100px" width="100px" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                 </div>
                <hr>
             </div>
          
          

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Slider Güncelle</button>
        </div>

        </form>
    </div>
</div>

@endsection