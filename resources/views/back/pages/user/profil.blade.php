@extends('back.layouts.master')



@section('content-area')

<div class="row">
              <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                  <div class="card-body">
                      <h5 class="mb-0">Profilimi Düzenle</h5>
                      <hr>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">PERSONEL BİLGİLERİM</h6>
                        </div>
                        <div class="card-body">

                          <form class="row g-3" action="{{ route('user.profilupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="id" value="{{ $data->id}}">
                             <div class="col-12">
                              <label class="form-label">E-Posta Adresi</label>
                              <input type="text" class="form-control" name="email" value="{{ $data->email}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Ad Soyad</label>
                                <input type="text" class="form-control" name="name" value="{{ $data->name}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Kullanıcı Özeti</label>
                                <input type="text" class="form-control" name="summary" value="{{ $data->summary}}">
                            </div>
                            <div class="col-12">
                              <label class="form-label">Bölümü</label>
                              <input type="text" class="form-control" name="bolumu" value="{{ $data->bolumu}}">
                          </div>

                            <div class="col-12">
                                <label class="form-label">Profil Resmi:</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="text-start">
                                <button type="submit" class="btn btn-sm btn-primary px-2">Güncelle</button>
                              </div>
                          </form>
                        </div>
                      </div>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">Şifre Değiştir</h6>
                        </div>
                        <div class="card-body">
                          <form class="row g-3" action="{{ route('user.editpassword')}}" method="POST">
                            @csrf


                        <input type="hidden" name="id" value="{{ $data->id}}">
                            <div class="col-12">
                                <label class="form-label">Kullanılan Şifre</label>
                                <input type="password" class="form-control" name="oldpassword">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Yeni Şifre</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Yeni Şifre Tekrar</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="text-start">
                                <button type="submit" class="btn btn-sm  btn-primary px-2">Şifre Değiştir</button>
                              </div>
                          </form>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                  <div class="card-body">
                      <div class="profile-avatar text-center">
                          @if($data->image == '')
                              <p class="text-danger p-1 font-20">Profil Resmi Yüklenmedi</p>
                          @else
                              <img src="{{ asset('back/uploads/userprofil/'.Auth::user()->image) }}" height="150" class="user-img" alt="">
                          @endif
                      </div>

                      <div class="text-center mt-4">
                        <h4 class="mb-1">{{$data->name}}</h4>
                        <div class="mt-4"></div>
                        <h6 class="mb-1">{{$data->summary}}</h6>
                        <p class="mb-0 text-secondary">ANTALYA BİLİM ÜNİVERSİTESİ</p>
                      </div>

                  </div>

                </div>
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

              </div>
            </div>


@endsection
