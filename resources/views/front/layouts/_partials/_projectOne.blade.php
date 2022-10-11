

<section class="project-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">@lang('ekibimiz.tto')</span>
            <h2 class="section-title__title">@lang('anasayfa.projelerimiz')</h2>
        </div>
        <div class="project-one__carousel owl-theme owl-carousel">
            <!--Project One Single-->
            @foreach ($data as $item)
                
           
            <div class="project-one__single">
                <div class="project-one__img">
                    <img src="{{ asset('back/uploads/projeDuyuru/proje/'.$item->image_proje) }}"  alt="">
                </div>
                <div class="project-one__content">
                    <p class="project-one__tagline">{{ $item->proje_baslik}}</p>
                    <h2 class="project-one__title"><a href="project-details.html">{{$item->proje_baslik_tr}}</a></h2>
                    <div class="project-one__arrow">
                        <form method="POST" action="{{ route('projedetay',app()->getLocale())}}" enctype="multipart/form-data">
                        @csrf
                       
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <button type="submit" class="btn btn-dark">Detay</button>
                        </form>        
                    </div>
                </div>
            </div>
          
            @endforeach
        </div>
    </div>
</section>
   