@extends('back.layouts.master')



@section('content-area')

<h6 class="mb-0 text-uppercase">Hizmet Katergori Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{  route('servicesCategori.update')  }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger font-weight-bold">
                    {{$errors->first()}}
                </div>
            @endif
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

                <input type="hidden" id=""  value="{{ $servicescategori->id }}" name="id">

            <div class="row">


                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Kategori Adı - TR:</label>
                    <input type="text" name="servicesCategoryName_tr" value="{{ $servicescategori->servicesCategoryName_tr }}"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Kategori Adı - EN:</label>
                    <input type="text" name="servicesCategoryName_en"  value="{{ $servicescategori->servicesCategoryName_en }}" class="form-control">
                </div>

            </div>

          
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Hizmet Resmi:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <p class="mb-1">Hizmet Resmi: --></p>
                            </div>
                            <div class="ms-auto fs-2 text-danger">
                                <img src="{{ asset('back/uploads/services/'.$servicescategori->image) }}" height="100px" width="100px" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                 </div>
                <hr>
             </div>
          
          

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Düzenle</button>
        </div>

        </form>
    </div>
</div>

@endsection