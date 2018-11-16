<?php use App\Common\ImageCommon; ?>
<li class="item">
    <a data-index="0" data-href="#popup_pc_operate"
       class="open_popup_pc">
        <div class="inner">
            <div class="img">
                <img class="owl-lazy"
                     data-src="{{ImageCommon::showImage($featureItem->feature_image)}}"
                     alt="{{$featureItem->feature_title}}"
                     src="{{ImageCommon::showImage($featureItem->feature_image)}}"
                     style="opacity: 1;">
            </div>
            <div class="txt">
                <div class="txt1">
                    <p class="name" title="Hộp số">
                        {{$featureItem->feature_title}}
                    </p>
                </div>
                <div class="txt2">
                    <p class="desc">
                        {{\App\Common\AppCommon::showTextDot($featureItem->feature_content,100) }}
                    </p>
                </div>
            </div>
        </div>
    </a>
</li>