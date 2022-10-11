@extends('back.layouts.master')



@section('content-area')

<h6 class="mb-0 text-uppercase">Site Ayarları</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{route('settings.update')}}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" value="{{ $setting[0]['email'] }}" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Phone:</label>
                    <input type="text" name="phone" value="{{ $setting[0]['phone'] }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Title TR:</label>
                    <input type="text" name="title_tr" value="{{ $setting[0]['title_tr'] }}" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Title EN:</label>
                    <input type="text" name="title_en" value="{{ $setting[0]['title_en'] }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Adres:</label>
                    <input type="text" name="adress" value="{{ $setting[0]['adress'] }}" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Instagram:</label>
                    <input type="text" name="instagram" value="{{ $setting[0]['instagram'] }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Facebook:</label>
                    <input type="text" name="facebook" value="{{ $setting[0]['facebook'] }}" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Twitter:</label>
                    <input type="text" name="twitter" value="{{ $setting[0]['twitter'] }}"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Home Page Middle Title - TR:</label>
                    <input type="text" name="homepagemiddleText_tr" value="{{ $setting[0]['homepagemiddleText_tr'] }}" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Home Page Middle Title - EN:</label>
                    <input type="text" name="homepagemiddleText_tr" value="{{ $setting[0]['homepagemiddleText_tr'] }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Home Page Long Text - TR:</label>
                    <input type="text" name="homepageLongText_tr" value="{{ $setting[0]['homepageLongText_tr'] }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Home Page Long Text - EN:</label>
                    <input type="text" name="homepageLongText_en"  value="{{ $setting[0]['homepageLongText_en'] }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Mapframe:</label>
                    <input type="text" name="mapframe" class="form-control" value="{{ $setting[0]['mapframe'] }}">
                </div>
            </div>
            <hr>
            <div class="row mt-2">
            <div class="mb-3 col-6">
                <label class="form-label">Site Icon:</label>
                <input type="file" name="icon" class="form-control">
            </div>
            <div class="mb-3 col-6">
                <div class="card radius-10">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <p class="mb-1">Icon --></p>
                        </div>
                        <div class="ms-auto fs-2 text-danger">
                                   <img src="{{ asset('back/uploads/sitelogo/'.$setting[0]['logo']) }}" height="100px" width="100px" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Site Logo:</label>
                <input type="file" name="logo" class="form-control">
            </div>
            <div class="mb-3 col-6">
                <div class="card radius-10">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <p class="mb-1">Logo --></p>
                        </div>
                        <div class="ms-auto fs-2 text-danger">
                          <img src="{{ asset('back/uploads/sitelogo/'.$setting[0]['logo']) }}" height="100px" width="100px" alt="">
                        </div>
                      </div>
                    </div>
                </div>
             </div>
            <hr>
         </div>
           
         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>
        
        </form>
    </div>
</div>

@endsection