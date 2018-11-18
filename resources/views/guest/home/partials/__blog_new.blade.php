<section id="home-articles">
    <div class="wrapper">
        <div class="inner">
            <div class="home-section-head">
                <h2 class="section-title">
                    <span>Tin tức</span>
                </h2>
            </div>
            <div class="home-section-body">
                <div class="section-desc">
                    Các tin tức mới nhất và hot nhất về thế giới xe hơi
                </div>

                <div id="owl-home-articles" class="owl-carousel owl-theme owl-loaded owl-drag">
                    @foreach($blogNews as $blog)
                        @include('guest.common.__show_blog_item',$blog)
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
