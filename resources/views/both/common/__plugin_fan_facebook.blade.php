<?php
    $widthDefault = "254px";
    $heightDefault = "500px";
    if(isset($width)){
        $widthDefault = $width;
    }
    if(isset($height)){
        $heightDefault = $height;
    }
?>

<div class="fb-page medium--hide small--hide fb_iframe_widget" data-href="{{$appInfo->app_link_facebook_fanpage}}" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=254&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FSuploTeam%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline">
    <span style="vertical-align: bottom; width: {{$widthDefault}}; height: {{$heightDefault}};">
        <iframe name="f26ea8277f3398" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true"
                scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin"
                src="https://www.facebook.com/v2.11/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F__Bz3h5RzMx.js%3Fversion%3D42%23cb%3Df276c9880410464%26domain%3Dsuplo-car-accesories.myharavan.com%26origin%3Dhttps%253A%252F%252Fsuplo-car-accesories.myharavan.com%252Ff10e79027873e7%26relation%3Dparent.parent&amp;container_width=254&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FSuploTeam%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"
                style="border: none; visibility: visible; width: {{$widthDefault}}; height: {{$heightDefault}};" class=""></iframe>
    </span>
</div>
