

@extends('back.layouts.master')



@section('content-area')
<h6 class="mb-0 text-uppercase">DASHBOARD</h6>
<hr>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
    <div class="col">
      <div class="card radius-10 bg-primary">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Toplam Slider Sayısı</p>
              <h4 class="mb-0 text-white">{{ $slider->count();}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <i class="lni lni-gallery"></i>
            </div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 bg-success">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Proje Duyuru Sayısı</p>
              <h4 class="mb-0 text-white"></h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <i class="lni lni-checkbox"></i>
            </div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 bg-pink">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Toplam Hizmet Sayısı</p>
              <h4 class="mb-0 text-white"></h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <i class="lni lni-rocket"></i>
            </div>
          </div>
        </div>
      </div>
     </div>
   

    </div>


@endsection