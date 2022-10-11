



@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')

<h6 class="mb-0 text-uppercase">Kurumsal</h6>
<hr/>
<div class="card">
    <div class="card-body">
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
                             @elseif (session('status-warning'))
                             <div class="alert border-0 border-danger border-start border-4 bg-light-danger alert-dismissible fade show py-2">
                              <div class="d-flex align-items-center">
                                <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
                                </div>
                                <div class="ms-3">
                                  <div class="text-danger">{{ session('status-warning') }}</div>
                                </div>
                              </div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                             @endif 
                    
        <form action="{{route('kurumsal.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
          
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Hakkımızda - TR</label>
                    <textarea name="hakkimizda_tr" id="" cols="40" class="form-control ckeditor" rows="10">{{$data->hakkimizda_tr}}</textarea>
                </div>
              
           

                <div class="mb-3 col-6">
                    <label class="form-label">Hakkımızda - EN:</label>
                    <textarea name="hakkimizda_en" id="" cols="40" class="form-control ckeditor" rows="10">{{$data->hakkimizda_en}}</textarea>
                 </div>
            </div>   
            <hr>
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Misyon - TR:</label>
                    <textarea name="misyon_tr" id="" cols="40" class="form-control ckeditor" rows="10">{{$data->misyon_tr}}</textarea>
                </div>
               
           

                <div class="mb-3 col-6">
                    <label class="form-label">Misyon - EN:</label>
                    <textarea name="misyon_en" id="" cols="40" class="form-control ckeditor" rows="10">{{$data->misyon_en}}</textarea>
                 </div>
            </div>
            <hr>
            <div class="row">

                <div class="mb-3 col-6">
                    <label class="form-label">Vizyon - TR:</label>
                    <textarea name="vizyon_tr" id="" cols="40" class="form-control ckeditor" rows="10">{{$data->vizyon_tr}}</textarea>
                </div>
               
                  

                <div class="mb-3 col-6">
                    <label class="form-label">Vizyon - EN:</label>
                    <textarea name="vizyon_en" id="" cols="40" class="form-control ckeditor" rows="10">{{$data->vizyon_en}}</textarea>
                 </div>
            </div>

         <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>

        </form>
    </div>
</div>

@endsection