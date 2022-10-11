@extends('back.layouts.master')

@section('addcss')
<link href="{{ asset('back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection


@section('content-area')

<h6 class="mb-0 text-uppercase">Kullanıcıları Listele</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						@if($errors->any())
						<div class="alert alert-danger font-weight-bold">
							{{$errors->first()}}
						</div>
					@endif
					@if(session('status'))
						<h6 class="alert alert-success">{{ session('status') }}</h6>
                    @elseif(session('hata'))
						<h6 class="alert alert-danger">{{ session('hata') }}</h6>
					@endif
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Ad Soyad</th>
										<th>Kullanıcı Rolu</th>
										<th>E-Posta</th>
										<th>Düzenle</th>
									</tr>
								</thead>
                            
								<tbody>
                                     
		
									@foreach($user as $data)
                                    <tr>
                                       
                                    <td>{{ $data -> name }}</td>
                                    <td>
                                    @if ($data ->status==0)
                                        Editör
                                    @elseif ($data ->status==1)
                                         Yönetici
                                    @elseif ($data ->status==2)
                                         Proje Yöneticisi
                                    @endif
                                    </td>
                                    <td>
                                    {{ $data -> email}}
                                    </td>
                                   
									<td>
										<div class="d-flex align-items-center gap-3 fs-6">
                                            @if ($data ->id==12)
                                            Değiştirilemez
                                            @else
                                          <a href="{{ route('user.useredit', ['id'=>$data->id]) }}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
										  <a href="{{ route('user.delete', ['id'=>$data->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                            @endif
                                        </div>
									  </td>	
                                    </tr>
                                     @endforeach   
								</tbody>
							</table>
						</div>
					</div>
				</div>

@endsection

@section('addjs')

  <script src="{{ asset('back/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('back/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('back/js/table-datatable.js') }}"></script>
	


@endsection