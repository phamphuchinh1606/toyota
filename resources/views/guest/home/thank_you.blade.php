@extends('guest.layouts.master')

@section('head.title')
    Liên Hệ - {{$appInfo->app_name}}
@endsection

@section('body.js')
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{asset('js/guest/validator.js')}}"></script>
    <script src="{{asset('js/guest/contact.js')}}"></script>
@endsection

@section('body.content')
    <main class="main-content" role="main">
        <div id="page-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div class="grid">
                        <div class="grid__item large--one-whole">
                            <div class="page-contact-wrapper">
                                <div class="page-head text-center">
                                    <h2>{{$message}}</h2>
                                    <span style="color: red">Chúng tôi sẽ liên hệ với bạn sớm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
