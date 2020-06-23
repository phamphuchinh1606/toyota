<style>
    .megamenu-menu .fadeInUpShort .tabs .tab {
        display: inline-block;
        text-align: center;
        line-height: 5px;
        height: 48px;
        padding: 0;
        margin: 0;
        text-transform: uppercase;
    }

    .megamenu-menu .tabs .tab {
        background-color: #FFF;
        text-transform: none;
        position: relative;
        width: 100%;
        margin: 0;
        float: left;
        height: auto;
        line-height: inherit;
    }

    .megamenu-menu .fadeInUpShort ul {
        width: 100%;
    }

    .megamenu-menu .fadeInUpShort ul > li {
        background-color: #FFF;
        text-transform: none;
        position: relative;
        width: 100%;
        margin: 0;
        float: left;
        height: auto;
        line-height: inherit;
    }

    .megamenu-menu .fadeInUpShort ul:not(.browser-default) li {
        list-style-type: none;
    }

    .megamenu-menu .tabs {
        height: auto;
        display: block !important;
        overflow: hidden;
    }

    .megamenu-menu .tabs .tab a {
        color: rgba(238, 110, 115, .7);
        display: block;
        width: 100%;
        height: 100%;
        padding: 0 24px;
        font-size: 14px;
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-transition: color .28s ease;
        transition: color .28s ease;
    }

    .megamenu-menu .fadeInUpShort .tabs .tab a {
        color: #000;
        text-align: left;
        padding: 1.4rem 2rem;
        border-bottom: 1px solid #eeeeee;
        margin: 0;
        font-size: 1.1rem;
    }

    .megamenu-menu .tabs .tab a.active {
        background-color: #c8102e;
        color: #ffffff;
    }

    .megamenu-menu .menuHeaderContent .item_sm_header{
        margin-top: 30px;
    }
    .megamenu-menu #sec_menu_02 .info_sm{
        margin-top: 2.5rem;
        border-left: 4px solid #c8102e;
        padding-left: 1rem;
    }
    .megamenu-menu #sec_menu_02 .name_sm{
        font-size: 1.3rem;
        font-weight: bold;
        margin-bottom: 3px;
    }

    .megamenu-menu .item_sm_header a.product-title {

    }
</style>

<script>
    $(document).ready(function(){
        $('.tabsmenu .tab a').hover(function(){
            $('.tabsmenu .tab a').removeClass('active');
            $(this).addClass('active');
            $contentId = $(this).attr("data-tab");
            $('.menuHeaderContent').css('display','none');
            $($contentId).css('display','block');

        });
        $('.tabsmenu .tab a.first').addClass('active');
        $('#tab_li_1').css('display','block');
    });
</script>


<ul class="no-bullets megamenu-menu clearfix">
    <div class="row tabsmenu animated fadeInUpShort go">
        <div class="col l3 m3 s3 left-menu">
            <ul class="tabs" style="width: 100%;">
                @foreach($productTrees as $index => $tree)
                    <li class="tab" onclick="window.location = 'yaris-g-cvt';">
                        <?php
                            $urlCollection = "#tab_li_$tree->product_type_id";
                            //if(count($tree->products) > 0){
                            //    $urlCollection = route('product_detail',['slug' => $tree->products[0]->slug, 'id' => $tree->products[0]->id ]);
                            //}
                            $urlCollection = route('collection_all',['product_type' => $tree->product_type_id]);
                        ?>
                        <a href="{{$urlCollection}}" data-tab="#tab_li_{{$tree->product_type_id}}" class="@if($index==0) first @endif">{{$tree->product_type_name}}</a>
                    </li>
                @endforeach
                <div class="indicator" style="right: 92.8571px; left: 0px;"></div>
                <div class="indicator" style="right: 92.8571px; left: 0px;"></div>
            </ul>
        </div>
        <div class="col l9 m9 s9">
            @foreach($productTrees as $tree)
                <div class="content-tab menuHeaderContent animated fadeIn go active" id="tab_li_{{$tree->product_type_id}}" style="display: none">
                    <div id="sec_menu_02">
                        <div class="_inner">
                            <div class="row">
                                @foreach($tree->products as $productMenu)
                                    <div class="col l6 m6 s12 ">
                                        @include('guest.common.__show_product_item',['productMenu' => $productMenu])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</ul>

