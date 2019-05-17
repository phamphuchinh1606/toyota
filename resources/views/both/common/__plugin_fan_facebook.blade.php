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

<div class="fb-page medium--hide small--hide fb_iframe_widget" rel="nofollow" data-href="{{$appInfo->app_link_facebook_fanpage}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="">
    <span style="vertical-align: bottom; width: {{$widthDefault}}; height: {{$heightDefault}};">
        <iframe name="f26ea8277f3398" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true"
                scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin"
                src=""
                style="border: none; visibility: visible; width: {{$widthDefault}}; height: {{$heightDefault}};" class=""></iframe>
    </span>
</div>
