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
        .modal-content:after{
            content: '';
            display: block;
            padding-top: 65%;
        }
        .exp_content {
            font-weight: 500;
        }
    </style>
@stop

@section('javascript')
    <script type="text/javascript" src="virtual/js/virtual.js"></script>
    <script type="text/javascript" src="base/js/jquery-imagepreviewer.min.js"></script>
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
                    400:{
                        items:1,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:5,
                    }
                }
            })
        });
        $(document).on('click', '.carousel_image_hover_zoom', function () {
            var url = $(this).find('span').text();
            $('.modal').find('.modal-content').attr('style', 'background: url("'+url+'") no-repeat center /cover ');
            $('.modal').modal();
        })

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
            <div class="carousel_image" style="background: url('{{ asset('local/storage/app/public/home/image/resized-'.$image->url) }}') no-repeat center /cover">
                <div class="carousel_image_hover">
                    <div class="carousel_image_hover_zoom">
                        <span class="d-none">{{ asset('local/storage/app/public/home/image/'.$image->url) }}</span>
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

                        <div class="exp_h3 border_bot right">
                            {{ $location->name }}
                        </div>
                        <div class="exp_content">
                            {!! $location->content !!}
                        </div>
                        <div class="exp_content">
                            Tel: {!! $location->tel !!}
                        </div>
                        <div class="exp_content">
                            Email: {!! $location->email !!}
                        </div>



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
                                <input type="text" class="d-none" name="location" placeholder="" required value="{{ $location->name }}">

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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" >

            </div>
        </div>
    </div>
@stop

