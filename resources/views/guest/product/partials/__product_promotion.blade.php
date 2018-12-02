<?php use App\Common\ImageCommon; use App\Common\AppCommon;?>
@if(isset($product->content_promotion) && $product->content_promotion != '')
    <div id="sec_dt_06" class="scrollspy hide-mb" style="">
        <div class="inner_scrollspy">
            <div itemscope="" itemtype="http://schema.org/Product">
                <section id="related-products">
                    <div class="home-section-head clearfix">
                        <h2>
                            <span>Tin Khuyến Mãi</span>
                        </h2>
                    </div>
                    <div class="box_tabs">
                        <div class="inner">
                            <div class="products">
                                {!! $product->content_promotion !!}
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
@endif

