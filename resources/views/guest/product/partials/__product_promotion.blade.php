<?php use App\Common\ImageCommon; use App\Common\AppCommon;?>
@if(isset($product->content_promotion) && $product->content_promotion != '')
    <div id="sec_dt_06" class="scrollspy hide-mb" style="">
        <div class="inner_scrollspy">
            <div>
                <section id="related-products">
                    <div class="home-section-head clearfix">
                        <h2>
                            <span>KHUYẾN MÃI XE OTO TOYOTA</span>
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

