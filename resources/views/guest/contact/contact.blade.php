@extends('guest.layouts.master')

@section('body.content')
    <main class="main-content" role="main">
        <div id="page-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div class="grid">
                        <div class="grid__item large--one-whole">
                            <div class="page-contact-wrapper">
                                <div class="page-head">
                                    <h1>Liên hệ với chúng tôi</h1>
                                </div>
                                <div class="page-body">
                                    <div class="page-body-inner">
                                        <div class="grid md-mg-left-15">
                                            <div class="grid__item md-pd-left15 large--one-third medium--one-half small--one-whole">
                                                <div class="contact-wrapper text-center">
                                                    <div class="contact-title">
                                                        <h4>
                                                            Địa chỉ trụ sở:
                                                        </h4>
                                                    </div>
                                                    <div class="contact-info">
                                                        {{$appInfo->app_address}}
                                                    </div>
                                                </div>
                                                <div class="contact-wrapper text-center">
                                                    <div class="contact-title">
                                                        <h4>
                                                            Số điện thoại:
                                                        </h4>
                                                    </div>
                                                    <div class="contact-info">
                                                        <a href="tel:{{$appInfo->app_phone}}">{{$appInfo->app_phone}}</a>
                                                    </div>
                                                </div>
                                                <div class="contact-wrapper text-center">
                                                    <div class="contact-title">
                                                        <h4>
                                                            Email:
                                                        </h4>
                                                    </div>
                                                    <div class="contact-info">
                                                        <a href="mailto:support@suplo.vn">{{$appInfo->app_email}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item md-pd-left15 large--one-third medium--one-half small--one-whole float-right">
                                                <div class="contact-title">
                                                    <h4>
                                                        Form liên hệ:
                                                    </h4>
                                                </div>
                                                @if(\Session::has('message'))
                                                    <div class="alert alert-success"> {{ \Session::get('message') }}</div>
                                                @endif
                                                <div class="form-vertical clearfix">
                                                    <form accept-charset="UTF-8" action="{{route('contact.send_contact')}}" class="contact-form" method="post">
                                                        <input name="form_type" type="hidden" value="contact">
                                                        <input name="utf8" type="hidden" value="✓">
                                                        @csrf
                                                        <label for="ContactFormName" class="hidden-label">Họ tên của bạn</label>
                                                        <input required="" type="text" id="contactFormName" class="form-control input-lg" name="guest_name" placeholder="Tên của bạn" autocapitalize="words" value="">

                                                        <label for="ContactFormEmail" class="hidden-label">Địa chỉ email của bạn</label>
                                                        <input required="" type="email" name="guest_email" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">


                                                        <label for="ContactFormPhone" class="hidden-label">Số điện thoại của bạn</label>
                                                        <input required="" type="tel" id="contactFormPhone" class="form-control input-lg" name="guest_phone" placeholder="Số điện thoại" autocapitalize="words" value="" pattern="[0-9\-]*">

                                                        <label for="ContactFormMessage" class="hidden-label">Nội dung</label>
                                                        <textarea rows="10" required="" name="guest_content" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>

                                                        <input type="submit" class="btn right btnContactSubmit" value="Gửi">

                                                    </form>
                                                </div>
                                            </div>
                                            <div class="grid__item md-pd-left15 large--one-third medium--one-whole small--one-whole">
                                                <iframe src="{{$appInfo->app_address_google_map}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                            </div>
                                        </div>

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
