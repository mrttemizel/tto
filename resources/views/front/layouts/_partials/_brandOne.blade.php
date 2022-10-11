<section class="brand-one">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 6
            }
        }}'>
            <div class="swiper-wrapper">
                @foreach ($data as $datas)
                <div class="swiper-slide">
                    <img src="{{ asset('back/uploads/isOrtaklarimiz/'.$datas->image) }}" height="100px" width="100px" alt="">
                </div><!-- /.swiper-slide -->
                @endforeach
               
            </div>
        </div>
    </div>
</section>
