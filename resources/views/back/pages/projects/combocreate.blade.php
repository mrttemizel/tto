@extends('back.layouts.master')

@section('addcss')

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('content-area')
<h6 class="mb-0 text-uppercase">Proje Alanı Ekle</h6>
<hr/>
<div class="card">
    @csrf
    @if($errors->any())
        <div class="alert alert-danger font-weight-bold">
            {{$errors->first()}}
        </div>
    @endif
    @if(session()->has('status'))
            <div class="alert alert-success font-weight-bold">
                {{ Session::get('status') }}
            </div>
        @endif
    <div class="card-body">

        <div class="row">

                <div class="mb-3 col-12">
                    <form action="{{ route('projects.storeKuruluslar') }}" method="POST">
                        @csrf
                    <label class="form-label">Kuruluş:</label>
                    <input type="text" name="kuruluslar"  class="form-control">

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>

                    </div>
                </form>
                </div>
                <div class="mb-3 col-12">
                    <form action="{{ route('projects.storeTuru') }}" method="POST">
                        @csrf
                    <label class="form-label">Program Adı:</label>
                    <input type="text" name="turu"  class="form-control">

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>

                </form>
                </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">

            <div class="mb-3 col-6 mt-3">
                <div class="card">
                    <div class="card-header text-danger">Kuruluşlar</div>
                    <div class="card-body">
                        <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Kurulus Adi</th>
										<th>Düzenle</th>
									</tr>
								</thead>

								<tbody>


									@foreach($kuruluslar as $data)
                                    <tr>

                                    <td>{{ $data->kuruluslar }}</td>
                                    <td>
										<div class="d-flex align-items-center gap-3 fs-6">
										  <a href="{{ route('projects.deleteKuruluslar', ['id'=>$data->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>

                                        </div>
									  </td>
                                    </tr>
                                     @endforeach
								</tbody>
							</table>
						</div>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-6  mt-3">
                <div class="card">
                    <div class="card-header text-danger">Program Adı</div>
                    <div class="card-body">
                        <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Program Adi</th>
										<th>Düzenle</th>
									</tr>
								</thead>

								<tbody>


									@foreach($turu as $data)
                                    <tr>

                                    <td>{{ $data->turu }}</td>
                                    <td>
										<div class="d-flex align-items-center gap-3 fs-6">
										  <a href="{{ route('projects.deleteTuru', ['id'=>$data->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>

                                        </div>
									  </td>
                                    </tr>
                                     @endforeach
								</tbody>
							</table>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection


@section('addjs')


<script>
    $(document).ready(function () {
        setTimeout(function(){
            $("div.alert").remove();
        }, 2000 ); // 5 secs






    });
</script>


@endsection
