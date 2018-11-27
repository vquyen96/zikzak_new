@extends('public.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="virtual/css/virtual.css">
    <link rel="stylesheet" type="text/css" href="service/css/service.css">
    <link rel="stylesheet" type="text/css" href="experience/css/location.css">

    <link rel="stylesheet" type="text/css" href="base/css/modal.css">
    <link rel="stylesheet" href="base/css/owl.carousel.min.css">
    <link rel="stylesheet" href="base/css/owl.theme.default.min.css">
    <style>
        .carousel_image:after{
            content: '';
            display: block;
            padding-top: 65%;
        }
    </style>
@stop

@section('javascript')
    <script type="text/javascript" src="virtual/js/virtual.js"></script>
    <script type="text/javascript" src="base/js/owl.carousel.min.js"></script>
    @if( Session::has('success') )
        <script type="text/javascript" src="base/js/modal.js"></script>
    @endif
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                }
            })
        });
    </script>
@stop

@section('title','Zikzak Coworking Space | Văn phòng ảo | Virtual Office')

@section('description')
    Dịch vụ Văn phòng ảo của Zikzak Coworking Space là hình thức văn phòng cung cấp dịch vụ địa chỉ và liên lạc mà không cần đến diện tích thực tế. Giúp doanh nghiệp cắt giảm chi phí vận hành nhưng vẫn đảm bảo được sự chuyên nghiệp trong hoạt động.
@stop

@section('main')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="vir_item">
                        <div class="vir_item_title border_bot center">
                            {{--{{ $content2->name }}--}}
                            Dịch vụ Zikzak
                        </div>
                        <div class="vir_item_summary center">
                            {{--{!! $content2->content !!}--}}
                            <div class="vir_summary_item">
                                Dịch vụ Văn phòng ảo của Zikzak Coworking Space là hình thức văn phòng cung cấp dịch vụ địa chỉ
                            </div>
                            <div class="vir_summary_item">
                                và liên lạc mà không cần đến diện tích thực tế. Giúp doanh nghiệp cắt giảm chi phí vận hành nhưng vẫn đảm bảo
                            </div>
                            <div class="vir_summary_item">
                                được sự chuyên nghiệp trong hoạt động.
                            </div>
                        </div>
                        <div class="vir-service d-flex">
                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/2.png')"></figure>
                                <div class="vir_service_content">lễ tân</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/3.png')"></figure>
                                <div class="vir_service_content">hotline</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/4.png')"></figure>
                                <div class="vir_service_content">logo công ty</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/5.png')"></figure>
                                <div class="vir_service_content">phòng họp</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/6.png')"></figure>
                                <div class="vir_service_content">trà, cà phê</div>
                            </div>
                        </div>
                        <div class="vir-service d-flex">
                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/2.png')"></figure>
                                <div class="vir_service_content">lễ tân</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/3.png')"></figure>
                                <div class="vir_service_content">hotline</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/4.png')"></figure>
                                <div class="vir_service_content">logo công ty</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/5.png')"></figure>
                                <div class="vir_service_content">phòng họp</div>
                            </div>

                            <div class="vir-service-item">
                                <figure class="vir-icon" style="background-image: url('virtual/image/6.png')"></figure>
                                <div class="vir_service_content">trà, cà phê</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="owl-carousel">
            @foreach( $images as $image)
            <div class="carousel_image" style="background: url('../public/home/image/resized-{{$image->url}}') no-repeat center /cover">
                <div class="carousel_image_hover">
                    <div class="carousel_image_hover_zoom">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="container">
            <div class="row pack-form">
                <div class="col-sm-6 col-12">
                    <div class="exp_left">
                        <div class="exp_h2">
                            Our locations
                        </div>
                        @foreach( $locations as $item)
                            <div class="exp_h3 border_bot right">
                                {{ $item->name }}
                            </div>
                            <div class="exp_content">
                                {!! $item->content !!}
                            </div>

                        @endforeach

                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="exp_right">
                        <div class="exp_h2">
                            Register
                        </div>
                        <form action="{{ asset('register') }}" method="post">
                            {{ csrf_field() }}
                            <div class="exp_input">
                                <input type="text" class="" name="name" placeholder="Name (required)" required>
                                {{--<input required="" type="radio" name="location" value="Nha Trang" checked class="d-none">--}}
                                <input class="d-none" type="text" name="service" value="Tư vấn/kế toán doanh nghiệp">
                                {{--<input type="text" class="d-none" name="location" placeholder="Name (required)"  value="Không biết">--}}
                            </div>
                            <div class="exp_input">
                                <input type="text" class="" name="phone" placeholder="Phone Number (required)" required>
                            </div>
                            <div class="exp_input">
                                <input type="email" class="" name="email" placeholder="Email (required)" required>
                            </div>
                            {{--<div class="exp_input">--}}
                            {{--<select name="service" id="">--}}
                            {{--<option value="" disabled selected>Service (required)</option>--}}
                            {{--<option value="THÀNH VIÊN NGÀY">THÀNH VIÊN NGÀY</option>--}}
                            {{--<option value="THÀNH VIÊN LINH HOẠT">THÀNH VIÊN LINH HOẠT</option>--}}
                            {{--<option value="THÀNH VIÊN THÁNG">THÀNH VIÊN THÁNG</option>--}}
                            {{--<option value="VĂN PHÒNG RIÊNG">VĂN PHÒNG RIÊNG</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            <div class="exp_input">
                                <select name="location" id="">
                                    <option value="" disabled selected>Location (required)</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Nha Trang">Nha Trang</option>
                                </select>

                            </div>
                            <div class="exp_button">
                                <input type="submit" class="" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

