<aside class="sidebar-wrapper" data-simplebar="true">

    <div class="sidebar-header">
      <div>
        <img src="{{ asset('back/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      </div>
      <div>
        <h4 class="logo-text">ABU</h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>


    <!--navigation-->
    <ul class="metismenu" id="menu">

      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href="{{ route('home') }}">
          <div class="parent-icon"><i class="fadeIn animated bx bx-home-circle"></i>
          </div>

          <div class="menu-title">Anasayfa</div>
        </a>
      </li>
      @endif
      @if( Auth::user()->status == 1)
      <li>
        <a href=" {{ route('settings.index') }} ">
          <div class="parent-icon"><i class="lni lni-cog"></i>
          </div>

          <div class="menu-title">Site Ayarları</div>
        </a>
      </li>
      @endif

      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href=" {{ route('kurumsal.index') }} ">
          <div class="parent-icon"><i class="lni lni-apartment"></i>
          </div>

          <div class="menu-title">Kurumsal</div>
        </a>
      </li>
      @endif

      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-gallery"></i>
          </div>
          <div class="menu-title">Slider</div>
        </a>
        <ul>
          <li> <a href="{{ route('slider.create')}}"><i class="lni lni-archive"></i>Slider Ekle</a>
          </li>
          <li> <a href="{{ route('slider.index')}}"><i class="lni lni-plus"></i>Slider Listele</a>
          </li>
        </ul>
      </li>
      @endif
      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-capsule"></i>
          </div>
          <div class="menu-title">İş Ortaklarimiz</div>
        </a>
        <ul>
          <li> <a href="{{ route('isortaklarimiz.create')}}"><i class="lni lni-archive"></i>İş Ortaklarimiz Ekle</a>
          </li>
          <li> <a href="{{ route('isortaklarimiz.index')}}"><i class="lni lni-plus"></i>İş Ortaklarimiz Listele</a>
          </li>
        </ul>
      </li>
      @endif

      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
              <!--
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-rocket"></i>
          </div>
          <div class="menu-title">Proje Duyuruları</div>
        </a>
        <ul>
          <li> <a href="{{ route('projeduyurulari.create') }}"><i class="lni lni-archive"></i>Proje Duyuru Ekle</a>
          </li>
          <li> <a href="{{ route('projeduyurulari.index') }}"><i class="lni lni-plus"></i>Proje Duyuru Listele</a>
          </li>
        </ul>
      </li>
      -->
      @endif

      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">Ekibimiz</div>
        </a>
        <ul>
          <li> <a href="{{ route('ourus.create')}}"><i class="lni lni-plus"></i>Ekibimiz Ekle</a>
          </li>
          <li> <a href="{{ route('ourus.index')}}"><i class="lni lni-archive"></i>Ekibimiz Listele</a>
          </li>
        </ul>
      </li>
      @endif
      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-flag"></i>
          </div>
          <div class="menu-title">Duyurular</div>
        </a>
        <ul>
          <li> <a href="#"><i class="lni lni-archive"></i>Duyuru Ekle</a>
          </li>
          <li> <a href="#"><i class="lni lni-plus"></i>Duyuru Listele</a>
          </li>
        </ul>
      </li>
       @endif



      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-write"></i>
          </div>
          <div class="menu-title">Proje Yönetim Sistemi</div>
        </a>
        <ul>
          <li> <a href="{{ route('projects.create')}}"><i class="lni lni-archive"></i>Proje Ekle</a>
          </li>
          <li> <a href="{{route('projects.index')}}"><i class="lni lni-plus"></i>Proje Listele</a>
          </li>
          @if( Auth::user()->status == 1 or Auth::user()->status==0 )
          <li> <a href="{{ route('projects.combocreate')}}"><i class="lni lni-plus"></i>Proje Alanı Ekle</a>
          </li>
          @endif
        </ul>
      </li>

      @if( Auth::user()->status == 1 or Auth::user()->status==0 )
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-user"></i>
          </div>
          <div class="menu-title">Kullanıcılar</div>
        </a>
        <ul>
          <li> <a href="{{ route('user.create') }}"><i class="lni lni-plus"></i>Kullanıcı Ekle</a>
          </li>
          <li> <a href="{{ route('user.index') }}"><i class="lni lni-archive"></i>Kullanıcıları Listele</a>
          </li>
        </ul>
      </li>
      @endif







    </ul>
    <!--end navigation-->
 </aside>

