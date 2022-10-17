@extends('back.layouts.master')

@section('addcss')
<link href="{{ asset('back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection


@section('content-area')

    <div class="card-header d-flex justify-content-between align-items-center border-2 border border-success">
        <h6 class="mb-0 text-uppercase">Projeleri Listele</h6>
        <a href="{{route('projects.create')}}" class="bg-gradient bg-success text-white btn btn-sm">Proje Ekle</a>
    </div>


				<div class="card">
					<div class="card-body">
						@if($errors->any())
						<div class="alert alert-danger font-weight-bold">
							{{$errors->first()}}
						</div>
					@endif
					@if(session('status'))
						<h6 class="alert alert-success">{{ session('status') }}</h6>
					@endif

						<div class="table-responsive">
							<table id="datatable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Proje Adı</th>
										<th>APDK Kodu</th>
										<th>Proje Kodu</th>
										<th>Proje Yürütücüsü</th>
										<th>Proje Yürütücüsü Bölümü</th>
										<th>Başvuru Tarihi</th>
										<th>Onay Tarihi</th>
										<th>Başlama Tarihi</th>
										<th>Bitiş Tarihi</th>
										<th>Kuruluş</th>
										<th>Durumu</th>
										<th>Türü</th>
										<th>Destek Kaynağı</th>
										<th>Bütçe</th>
										<th>Para Birimi</th>
										<th>Kanıt</th>
										<th>Ek Dosya</th>

										<th>Düzenle</th>


									</tr>
								</thead>

								<tbody>


                                    @if(Auth::user()->status==2)


                                    @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item->projeAdi }}</td>

                                        <td>{{empty($item->apdkkodu ) ? "Değer Yok":$item->apdkkodu }}</td>
                                        <td>{{empty($item->projekodu ) ? "Değer Yok":$item->projekodu }}</td>
                                        <td>{{empty($item->getYurutucu->name ) ? "Değer Yok":$item->getYurutucu->name }}</td>
                                        <td>{{empty($item->getYurutucuBolum->bolumu ) ? "Değer Yok":$item->getYurutucuBolum->bolumu }}</td>

                                        <td>{{ $item->basvurutarihi }}</td>
                                        <td>{{ $item->onaytarihi }}</td>
                                        <td>{{ $item->baslamatarihi }}</td>
                                        <td>{{ $item->bitistarihi }}</td>

                                        <td>{{empty($item->getKurulus->kuruluslar) ? "Değer Yok":$item->getKurulus->kuruluslar}}</td>
                                        <td>{{empty($item->getDurum->durum ) ? "Değer Yok":$item->getDurum->durum }}</td>
                                        <td>{{empty($item->getTuru->turu ) ? "Değer Yok":$item->getTuru->turu }}</td>

                                        <td>{{ $item->destekkaynagi }}</td>
                                        <td>{{ $item->butce }}</td>
                                        <td>{{empty($item->getParaBirimi->parabirimi ) ? "Değer Yok":$item->getParaBirimi->parabirimi}}</td>
                                        <td>{{empty($item->kanit ) ? "Değer Yok":$item->kanit }}</td>
                                        @if(empty($item->dosya))
                                            Dosya Yüklenmemiş
                                        @else
                                            <a href="{{ asset('back/uploads/ek_dosyalar/'.$item->dosya) }}" target="_blank" class="btn btn-success btn-sm">İNDİR</a>
                                            @endif
                                            </td>


                                            <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ route('projects.edit', ['id'=>$item->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="{{ route('projects.delete', ['id'=>$item->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                     @endforeach
                                    </tr>

                                    @else

                                        @foreach($data as $item)
                                        <tr>
                                        <td>{{ $item->projeAdi }}</td>

                                        <td>{{empty($item->apdkkodu ) ? "Değer Yok":$item->apdkkodu }}</td>
                                        <td>{{empty($item->projekodu ) ? "Değer Yok":$item->projekodu }}</td>
                                        <td>{{empty($item->getYurutucu->name ) ? "Değer Yok":$item->getYurutucu->name }}</td>
                                        <td>{{empty($item->getYurutucuBolum->bolumu ) ? "Değer Yok":$item->getYurutucuBolum->bolumu }}</td>


                                        <td>{{ $item->basvurutarihi }}</td>
                                        <td>{{ $item->onaytarihi }}</td>
                                        <td>{{ $item->baslamatarihi }}</td>
                                        <td>{{ $item->bitistarihi }}</td>

                                        <td>{{empty($item->getKurulus->kuruluslar) ? "Değer Yok":$item->getKurulus->kuruluslar}}</td>
                                        <td>{{empty($item->getDurum->durum ) ? "Değer Yok":$item->getDurum->durum }}</td>
                                        <td>{{empty($item->getTuru->turu ) ? "Değer Yok":$item->getTuru->turu }}</td>

                                        <td>{{ $item->destekkaynagi }}</td>
                                        <td>{{ $item->butce }}</td>
                                        <td>{{empty($item->getParaBirimi->parabirimi ) ? "Değer Yok":$item->getParaBirimi->parabirimi}}</td>
                                        <td>{{empty($item->kanit ) ? "Değer Yok":$item->kanit }}</td>
                                        <td class="d-flex ">
                                        @if(empty($item->dosya))
                                            Dosya Yüklenmemiş
                                            @else
                                                <a href="{{ asset('back/uploads/ek_dosyalar/'.$item->dosya) }}" target="_blank" class="btn btn-success btn-sm">İNDİR</a>
                                        @endif
                                        </td>


                                            <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ route('projects.edit', ['id'=>$item->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="{{ route('projects.delete', ['id'=>$item->id]) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                        </tr>
                                         @endforeach

                                    @endif





								</tbody>
							</table>
						</div>
					</div>
				</div>

@endsection

@section('addjs')

    <script src="{{asset('back/plugins/datatable/js/table-datatable.js')}}"></script>
    <script src="{{asset('back/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('back/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                "dom": "<'row'<'col-sm-12 text-right mb-3'B>><'row'<'col-sm-6'l><'col-sm-6'f>>rtip",
                paging: false,
                fixedHeader: {headerOffset: 45},
                buttons: {
                    name: 'primary',
                    buttons: [
                        {extend:'excelHtml5',
                         className:'btn btn-success btn-sm text-white',
                            text:'Excel',
                            exportOptions: {
                                columns: ':not(:last-child)',
                            },
                        },
                        {
                            extend:'pdfHtml5',
                            className:'btn btn-info btn-sm text-white',
                            text:'PDF İNDİR<i class="fa fa-file-pdf-o"></i>',
                            download: 'open',


                            customize : function(doc) {
                                doc.styles['td:nth-child(1)'] = {
                                    width: '1000px',
                                    'max-width': '1000px'
                                }
                            },
                            orientation: 'landscape',
                            pageSize: 'A4',

                        }
                       ]
                },

                "lengthMenu": [[1, 10, 25, 50, 100, -1], [1, 10, 25, 50, 100, "Hepsi"]],
                "iDisplayLength":25,
                "pagingType": "full_numbers",
                "language": {
                    "sDecimal":        ",",
                    "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
                    "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                    "sInfoEmpty":      "Kayıt yok",
                    "sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ".",
                    "sLengthMenu":     "Sayfada _MENU_ kayıt göster",
                    "sLoadingRecords": "Yükleniyor...",
                    "sProcessing":     "İşleniyor...",
                    "sSearch":         "Ara:",
                    "sZeroRecords":    "Eşleşen kayıt bulunamadı",
                    "oPaginate": {
                        "sFirst":    "İlk",
                        "sLast":     "Son",
                        "sNext":     "Sonraki",
                        "sPrevious": "Önceki"
                    },
                    "oAria": {
                        "sSortAscending":  ": artan sütun sıralamasını aktifleştir",
                        "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                    }
                }
            });

            $('.dataTables_length select').select2({
                theme:"bootstrap",
                selectOnClose: true,
                language:"tr"
            });

            $('.dataTables_wrapper .dt-buttons').addClass('btn-group');


        } );
    </script>



@endsection
