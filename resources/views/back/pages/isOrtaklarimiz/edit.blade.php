@extends('back.layouts.master')



@section('content-area')

<h6 class="mb-0 text-uppercase">İs Ortağımız Düzenle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{  route('isortaklarimiz.update')  }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger font-weight-bold">
                    {{$errors->first()}}
                </div>
            @endif
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

                <input type="hidden"  value="{{ $data->id }}" name="id">

            <div class="row">


                <div class="mb-3 col-6">
                    <label class="form-label">İş Ortağımız - TR:</label>
                    <input type="text" name="name_tr" value="{{ $data->name_tr }}"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">İş Ortağımız - EN:</label>
                    <input type="text" name="name_en"  value="{{ $data->name_en }}" class="form-control">
                </div>

            </div>

          
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Logosu:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <p class="mb-1">Logosu Resmi: --></p>
                            </div>
                            <div class="ms-auto fs-2 text-danger">
                                <img src="{{ asset('back/uploads/isOrtaklarimiz/'.$data->image) }}" height="100px" width="100px" alt="">
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