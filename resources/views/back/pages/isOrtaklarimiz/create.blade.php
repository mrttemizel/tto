@extends('back.layouts.master')



@section('content-area')

<h6 class="mb-0 text-uppercase">İş Ortağımız Ekle</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <form action="{{ route('isortaklarimiz.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">İş Ortağımız Adi - TR:</label>
                    <input type="text" name="name_tr"  class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label">İş Ortağımız Adi - EN:</label>
                    <input type="text" name="name_en"  class="form-control">
                </div>

            </div>

          
            <div class="row">
                <div class="mb-3 col-12">
                    <label class="form-label">Logosu:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
    
             </div>
          
          

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>

        </form>
    </div>
</div>

@endsection