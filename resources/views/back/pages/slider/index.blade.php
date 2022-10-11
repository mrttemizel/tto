@extends('back.layouts.master')

@section('addcss')
<link href="{{ asset('back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection


@section('content-area')

<h6 class="mb-0 text-uppercase">Slider Listele</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @csrf
                        @if($errors->any())
                            <div class="alert alert-danger font-weight-bold">
                                {{$errors->first()}}
                            </div>
                        @endif
                        @if(session('status'))
                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                        @endif
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Slider Resmi</th>
										<th>Slider Header Adı</th>
										<th>Slider Görünürlüğü</th>
									    <th>Düzenle</th>
									</tr>
								</thead>
                                
								<tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td><img src="{{ asset('back/uploads/slider/'.$item->image) }}" height="75px" width="75px" alt=""></td>
                                        <td>{{ $item -> header_tr }}</td>
                                        @if ($item ->status==0)
                                        <td><span class="badge rounded-pill alert-success">AKTİF</span></td> 
                                        @else
                                        <td><span class="badge rounded-pill alert-danger">PASİF</span></td>
                                        @endif
                                       
                                      
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                              <a href="{{ route('slider.edit', ['id'=>$item->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                              <a href="{{ route('slider.delete', ['id'=>$item->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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