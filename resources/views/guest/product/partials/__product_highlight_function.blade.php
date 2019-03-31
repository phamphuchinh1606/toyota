<style>
    li.item{
        border: 2px solid #ebebeb;
        overflow: hidden;
    }
</style>
<div id="sec_dt_06" class="scrollspy hide-mb" style="">
    <div class="inner_scrollspy">
        <div>
            <section id="related-products">
                <div class="home-section-head clearfix">
                    <h2>
                        <span>Tính năng nổi bật</span>
                    </h2>

                </div>
                <div class="box_tabs van_hanh">
                    <ul class="tabs_vanhanh unrequire_tabs tabs" style="width: 100%;">
                        <li class="tab selectTabVanHanh">
                            <button id="defaultOpenProTabs" class="pro-tablinks active"
                                    onclick="openProTabs(event, 'tab_vh_01')">Vận hành
                            </button>
                        </li>
                        <li class="tab selectTabVanHanh">
                            <button id="vanhanh03" class="pro-tablinks"
                                    onclick="openProTabs(event, 'tab_vh_02')">An toàn
                            </button>
                        </li>
                        <div class="indicator" style="right: 0px; left: 585px;"></div>
                    </ul>
                    <div id="tab_vh_01" class="pro-content-tab" style="display: none;">
                        <div class="inner">
                            <div class="products all_van_hanh">
                                <ul class="owl-carousel slide-features owl-loaded owl-drag" id="ulOperating">
                                    @foreach($product->salient_features as $featureItem)
                                        @if(\App\Common\Constant::$FEATURE_TYPE_OPERATE == $featureItem->feature_type)
                                            @include('guest.product.partials.__product_salient_feature_item',['featureItem' => $featureItem])
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tab_vh_02" class="pro-content-tab" style="display: none;">
                        <div class="inner">
                            <div class="products all_van_hanh">
                                <ul class="owl-carousel slide-features owl-loaded owl-drag" id="ulSafe">
                                    @foreach($product->salient_features as $featureItem)
                                        @if(\App\Common\Constant::$FEATURE_TYPE_SAFE == $featureItem->feature_type)
                                            @include('guest.product.partials.__product_salient_feature_item',['featureItem' => $featureItem])
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<script>
    function openProTabs(evt, cityName) {
        var i, pro_tabcontent, pro_tablinks;
        pro_tabcontent = document.getElementsByClassName("pro-content-tab");
        for (i = 0; i < pro_tabcontent.length; i++) {
            pro_tabcontent[i].style.display = "none";
        }
        pro_tablinks = document.getElementsByClassName("pro-tablinks");
        for (i = 0; i < pro_tablinks.length; i++) {
            pro_tablinks[i].className = pro_tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        return false;
    }

    document.getElementById("defaultOpenProTabs").click();
</script>

<script>
    $(document).ready(function () {
        $("#ulOperating").owlCarousel({
            smartSpeed: 1000,
            nav: false,
            dots: false,
            loop: false,
            autoplay: false,
            autoplayHoverPause: true,
            responsiveRefreshRate: 200,
            margin: 5,
            responsive: {
                0: {
                    items: 2
                },
                480: {
                    items: 3
                },
                768: {
                    items: 3,
                    margin: 15,
                },
                1000: {
                    items: 4,
                    margin: 30,
                }
            }
        });

        $("#ulSafe").owlCarousel({
            smartSpeed: 1000,
            nav: false,
            dots: false,
            loop: false,
            autoplay: false,
            autoplayHoverPause: true,
            responsiveRefreshRate: 200,
            margin: 5,
            responsive: {
                0: {
                    items: 2
                },
                480: {
                    items: 3
                },
                768: {
                    items: 3,
                    margin: 15,
                },
                1000: {
                    items: 4,
                    margin: 30,
                }
            }
        });
    });
</script>

