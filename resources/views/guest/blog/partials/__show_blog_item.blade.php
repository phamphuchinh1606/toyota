<?php use App\Common\{Constant, ImageCommon}; ?>
<div class="item">
    <div class="article-item">
        <div class="grid mg-left-10">
            <div class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                <div class="article-img">
                    <a href="{{route('blog.detail',['slug' => $blog->slug, 'id' => $blog->id])}}">
                        <img
                            src="{{ImageCommon::showImage($blog->blog_image)}}"
                            alt="{{$blog->blog_title}}">
                    </a>
                </div>
            </div>
            <div class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                <div class="article-info-wrapper">
                    <div class="article-info">
                        <div class="article-date">
                            <span class="article-day">{{$blog->str_day_post_date}}</span>/
                            <span>{{$blog->str_month_post_date}}</span>/
                            <span>{{$blog->str_year_post_date}}</span>
                        </div>
                        <div class="article-title">
                            <a href="{{route('blog.detail',['slug' => $blog->slug, 'id' => $blog->id])}}">
                                {{$blog->dot_blog_title}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-lg-1">
            <div class="article-desc medium--hide small--hide">
                {{\App\Common\AppCommon::showTextDot($blog->blog_description,126)}}
            </div>
        </div>
    </div>


</div>
