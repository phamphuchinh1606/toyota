<section id="related-products">
    <div class="home-section-head clearfix">
        <h2>
            <span>Sản phẩm tương tự</span>
        </h2>
    </div>
    <div class="home-section-body">
        <div class="section-desc">
            Các sản phẩm mà bạn cũng có thể bạn muốn xem
        </div>
        <div id="owl-related-products-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
            @foreach($productSameTypes as $productSame)
                @include('guest.common.__show_product_block_item',['productItem' => $productSame])
            @endforeach
        </div>
    </div>
</section>
