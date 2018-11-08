@extends('public.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="about/css/about.css">
@stop

@section('javascript')
    <script type="text/javascript" src="about/js/about.js"></script>
@stop

@section('title','Zikzak Coworking Space | Không gian làm việc chung')

@section('description')
    Zikzak Coworking Space - Không gian làm việc chung hàng đầu. Đăng ký ngay chỗ làm việc chỉ từ 69K.
@stop

@section('main')
    {{--<section class="zz-section about-head">--}}
    {{--<div class="dark-cover">--}}
    {{--<h2 class="zz-heading-3 white center vertical-align">câu chuyên <br> khởi nghiệp</h2>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--<section class="zz-section about-content">--}}
        {{--<div class="about-item story">--}}
            {{--<h4>Câu chuyện <br> <span class="main-color">ZIKZAK</span></h4>--}}
            {{--<p>--}}
                {{--{!!$story->about_content!!}--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<div class="about-item destination">--}}
            {{--<h4>Tầm nhìn và sứ mệnh</h4>--}}
            {{--{!!$view->about_content!!}--}}
        {{--</div>--}}

        {{--<div class="about-item view">--}}
            {{--<h4>Giá trị cốt lõi</h4>--}}
            {{--{!!$value->about_content!!}--}}
        {{--</div>--}}
    {{--</section>--}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_title border_bot center">
                    About Zikzak
                </div>
                <div class="about_item">
                    <div class="about_item_title">
                        Câu chuyện ZIKZAK
                    </div>
                    <div class="about_item_content smail" >
                        <div class="about_item_content_small">
                            {!!$story->about_content!!}
                        </div>

                    </div>
                </div>
                <div class="about_item">
                    <div class="about_item_title">
                        Tầm nhìn & sứ mệnh
                    </div>
                    <div class="about_item_content">
                        <div class="about_item_content_small img" style="background: url('home/image/{{ $about1->banner_image }}') no-repeat center /cover"></div>
                        <div class="about_item_content_small">
                            <div class="about_item_content_small_title border_bot">
                                Đồng hành cùng Startup
                            </div>
                            <div>
                                {!!$view->about_content!!}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="about_item">
                    <div class="about_item_title">
                        Giá trị cốt lõi
                    </div>
                    <div class="about_item_content smail">
                        {!!$value->about_content!!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="about_banner_foot">
        <img src="home/image/{{ $about2->banner_image}}" alt="">

    </div>
@stop