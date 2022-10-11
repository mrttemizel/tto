<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('back/images/favicon-32x32.png') }}" type="image/png" />
  <!-- Bootstrap CSS -->
  

  <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/icons.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="{{ asset('back/css/pace.min.css') }}" rel="stylesheet" />

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <title>Giriş Yap | Antalya Bilim Üniversitesi </title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                  <img src="{{ asset('back/images/error/login-img.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Giriş Yap</h5>
                    <hr>
                    <form class="form-body" action="{{ route('login') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger font-weight-bold">
                            {{$errors->first()}}
                        </div>
                         @endif
                      <div class="login-separater text-center mb-4">
                       
                      </div>
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">E-Posta Adresi</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="form-control radius-30 ps-5" name="email" placeholder="E-Posta Adresi">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Şifre</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5"name="password" placeholder="Şifre">
                            </div>
                          </div>
                          
                          <div class="col-12">	<a href="authentication-forgot-password.html">Şifremi Unuttum ?</a>
                          </div>
                          <div class="col-12">
                            
                            <div class="d-grid mt-2">
                              <button type="submit" class="btn radius-30 btn-info text-white" >Giriş Yap</button>
                            </div>
                          </div>
                          
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="{{ asset('back/js/jquery.min.js') }}"></script>
  <script src="{{ asset('back/js/pace.min.js') }}"></script>
  

</body>

</html>