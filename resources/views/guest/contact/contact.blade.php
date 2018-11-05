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
                                    <h1>Liên hệ</h1>
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
                                                        Số 1 Lương Yên, Q.Hai Bà Trưng, Hà Nội
                                                    </div>
                                                </div>
                                                <div class="contact-wrapper text-center">
                                                    <div class="contact-title">
                                                        <h4>
                                                            Số điện thoại:
                                                        </h4>
                                                    </div>
                                                    <div class="contact-info">
                                                        <a href="tel:(+84) 934 323 882">(+84) 934 323 882</a>
                                                    </div>
                                                </div>
                                                <div class="contact-wrapper text-center">
                                                    <div class="contact-title">
                                                        <h4>
                                                            Email:
                                                        </h4>
                                                    </div>
                                                    <div class="contact-info">
                                                        <a href="mailto:support@suplo.vn">support@suplo.vn</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item md-pd-left15 large--one-third medium--one-half small--one-whole float-right">
                                                <div class="contact-title">
                                                    <h4>
                                                        Form liên hệ:
                                                    </h4>
                                                </div>
                                                <div class="form-vertical clearfix">
                                                    <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
                                                        <input name="form_type" type="hidden" value="contact">
                                                        <input name="utf8" type="hidden" value="✓">








                                                        <label for="ContactFormName" class="hidden-label">Họ tên của bạn</label>
                                                        <input type="text" id="ContactFormName" class="input-full" name="contact[name]" placeholder="Họ tên của bạn" autocapitalize="words" value="">

                                                        <label for="ContactFormEmail" class="hidden-label">Địa chỉ email của bạn</label>
                                                        <input type="email" id="ContactFormEmail" class="input-full" name="contact[email]" placeholder="Địa chỉ email của bạn" autocorrect="off" autocapitalize="off" value="">


                                                        <label for="ContactFormPhone" class="hidden-label">Số điện thoại của bạn</label>
                                                        <input type="tel" id="ContactFormPhone" class="input-full" name="contact[phone]" placeholder="Số điện thoại của bạn" pattern="[0-9\-]*" value="">

                                                        <label for="ContactFormMessage" class="hidden-label">Nội dung</label>
                                                        <textarea rows="10" id="ContactFormMessage" class="input-full" name="contact[body]" placeholder="Nội dung"></textarea>

                                                        <input type="submit" class="btn right btnContactSubmit" value="Gửi">

                                                    </form>
                                                </div>
                                            </div>
                                            <div class="grid__item md-pd-left15 large--one-third medium--one-whole small--one-whole">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5120670251613!2d105.86084421536768!3d21.01218739371877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf776b69417%3A0x10c4f7db43776bb5!2sHanoi+Creative+City!5e0!3m2!1sen!2s!4v1536115056046" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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
