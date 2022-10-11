

<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
"effect": "fade",
"pagination": {
"el": "#main-slider-pagination",
"type": "bullets",
"clickable": true
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
},
"autoplay": {
"delay": 5000
}}'>
        <div class="swiper-wrapper">
            @foreach ($data as $slider)
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ URL::asset('back/uploads/slider/'.$slider->image)}});">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"><img src="{{ asset('Front/images/shapes/main-slider-shape-1.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">  
                                
                                <h2>{{$slider->header}}</h2>
                                <p>{{$slider->text}}</p>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                    class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                    class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
