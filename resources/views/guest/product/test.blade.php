@extends('guest.layouts.master')

@section('head.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css">
@endsection

@section('body.class_body',"body-other template-product")

@section('body.js')
    <script src="{{asset('js/guest/product_detail.js')}}" type='text/javascript'></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    {{--<script src="https://fancyapps.com/fancybox/3/examples.js?v=1543590464"></script>--}}
    <script>

        // Clone defaults
        var imgOpts = $.extend(true, {}, $.fancybox.defaults, {
            caption : function( instance, item ) {
                return $(this).next('figcaption').html();
            }
        });

        // Shortcut to apply options to image gallery
        function applyImgOpts() {
            $('[data-fancybox="images"]').fancybox(imgOpts);
        }

        $("#imgOpts select").change(function () {
            var opt = $(this).attr("id");
            var val = $(this).val();

            imgOpts[opt] = val === "" ? false : val;

            // Make "fade" transiton faster than others
            if (opt === 'transitionEffect') {
                imgOpts['transitionDuration'] = opt === 'fade' ? 330 : 550;
            }

            applyImgOpts();
        });

        $("#imgOpts input[type=radio][name=lang]").on("change", function () {
            imgOpts.lang = $(this).val();

            applyImgOpts();
        });

        $("#imgOpts .toggle").change(function () {
            if (this.id === 'thumbs') {
                imgOpts.thumbs.autoStart = this.checked ? true : false;
            } else {
                imgOpts[this.id] = this.checked ? true : false;
            }

            applyImgOpts();
        });

        $("#imgOpts .buttons").change(function () {
            var buttonArr = $('input:checkbox:checked.buttons').map(function () {
                return this.value;
            }).get();

            buttonArr.push('close');

            imgOpts.buttons = buttonArr;

            applyImgOpts();
        });

        applyImgOpts();

    </script>
@endsection

@section('body.content')
    <main class="main-content" role="main">
        <section id="product-wrapper">
            <div class="row mb-4">
                <div class="col-6 col-lg-4">

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/lSXpV8bDeMA/1536x2304" data-width="1536" data-height="2304">
                            <img class="img-fluid" src="https://source.unsplash.com/lSXpV8bDeMA/416x623">
                        </a>
                    </figure>

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/ty4X72BSsXY/1279x853" data-width="1279" data-height="853">
                            <img class="img-fluid" src="https://source.unsplash.com/ty4X72BSsXY/416x278">
                        </a>
                    </figure>

                </div>
                <div class="col-6 col-lg-4">

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/QkPb5g9p338/1279x719" data-width="1279" data-height="719">
                            <img class="img-fluid" src="https://source.unsplash.com/QkPb5g9p338/416x234">
                        </a>
                    </figure>

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/z55CR_d0ayg/1279x853" data-width="1279" data-height="853">
                            <img class="img-fluid" src="https://source.unsplash.com/z55CR_d0ayg/416x278">
                        </a>
                    </figure>

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/IbLZjKcelpM/1020x858" data-width="1020" data-height="858">
                            <img class="img-fluid" src="https://source.unsplash.com/IbLZjKcelpM/416x350">
                        </a>
                    </figure>

                </div>
                <div class="col-6 col-lg-4 d-none d-lg-block">

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/KgCbvOWYuU0/1279x870" data-width="1279" data-height="870">
                            <img class="img-fluid" src="https://source.unsplash.com/KgCbvOWYuU0/416x283">
                        </a>
                    </figure>

                    <figure>
                        <a class="d-block mb-4" data-fancybox="images" href="https://source.unsplash.com/O7qK1vQY3p0/1519x2279" data-width="1519" data-height="2279">
                            <img class="img-fluid" src="https://source.unsplash.com/O7qK1vQY3p0/416x623">
                        </a>
                    </figure>
                </div>
            </div>

        </section>
    </main>
@endsection
