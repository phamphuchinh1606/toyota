@extends('guest.layouts.master')

@section('head.title')
    Giới Thiệu - {{$appInfo->app_name}}
@endsection

@section('body.content')
    <main class="main-content" role="main">
        <div id="page-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div class="grid">
                        <div class="grid__item large--one-whole">
                            <div class="page-contact-wrapper">
                                <div class="page-head">
                                    <h2>Giới Thiệu</h2>
                                </div>
                                <div class="page-body">
                                    <div class="page-body-inner">
                                        {!! $appInfo->about_content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
