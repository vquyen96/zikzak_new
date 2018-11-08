@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="virtual/css/virtual.css">
<link rel="stylesheet" type="text/css" href="service/css/service.css">
<link rel="stylesheet" type="text/css" href="experience/css/location.css">

<link rel="stylesheet" type="text/css" href="base/css/modal.css">
@stop

@section('javascript')
<script type="text/javascript" src="virtual/js/virtual.js"></script>
@if( Session::has('success') )
<script type="text/javascript" src="base/js/modal.js"></script>
@endif
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
				<div class="vir_head border_bot center">
					Dịch vụ doanh nghiệp
				</div>
				<div class="vir_title center">
					{{ $content1->name }}
				</div>
				<div class="vir_summary center">
                    {!! $content1->content !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="vir_item">
					<div class="vir_item_title border_bot center">
						{{ $content2->name }}
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
                    <div class="vir_item_summary center">
                        {!! $content2->content !!}
                        {{--<div class="vir_summary_item">--}}
                            {{--Dịch vụ Văn phòng ảo của Zikzak Coworking Space là hình thức văn phòng cung cấp dịch vụ địa chỉ--}}
                        {{--</div>--}}
                        {{--<div class="vir_summary_item">--}}
                            {{--và liên lạc mà không cần đến diện tích thực tế. Giúp doanh nghiệp cắt giảm chi phí vận hành nhưng vẫn đảm bảo--}}
                        {{--</div>--}}
                        {{--<div class="vir_summary_item">--}}
                            {{--được sự chuyên nghiệp trong hoạt động.--}}
                        {{--</div>--}}
                    </div>
                    <div class="vir_button">
                        <button type="button" class="btnPopUp"  data-toggle="modal" data-target="#modal1">
                            Báo giá
                        </button>
                        <button type="button" class="btnRegis">
                            Đăng ký
                        </button>
                    </div>
                </div>
                <div class="vir_item">
					<div class="vir_item_title border_bot center">
						Kế toán doanh nghiệp
					</div>
                    <div class="vir_item_content d-flex">
                        <div class="vir_item_content_main">
                            {!! $service_content_left->content_content !!}
                        </div>
                        <div class="vir_item_content_main">
                            {!! $service_content_right->content_content !!}
                        </div>
                    </div>
                    <div class="vir_item_summary center">
                        {!! $service_content_bot->content_content !!}
                    </div>
                    <div class="vir_button">
                        <button type="button" class="btnPopUp"  data-toggle="modal" data-target="#modal2">
                            Báo giá
                        </button>
                        <button type="button" class="btnRegis">
                            Đăng ký
                        </button>
                    </div>
                </div>
                <div class="vir_item">
                    <div class="vir_item_title border_bot center">
                        Tư vấn doanh nghiệp
                    </div>
                    <div class="vir_item_content d-flex">
                        <div class="vir_item_content_main">
                            {!! $advice_content_left->content_content !!}
                        </div>
                        <div class="vir_item_content_main">
                            {!! $advice_content_right->content_content !!}
                        </div>
                    </div>
                    <div class="vir_item_summary center">
                        {!! $advice_content_bot->content_content !!}
                    </div>
                    <div class="vir_button">
                        <button type="button" class="btnPopUp" data-toggle="modal" data-target="#modal3">
                            Báo giá
                        </button>
                        <button type="button" class="btnRegis">
                            Đăng ký
                        </button>
                    </div>
                </div>
			</div>
		</div>

	</div>
    <div class="vir_banner_main">
        <img src="home/image/{{ $virtual1->banner_image}}" alt="">
    </div>
    <div class="container">
        <div class="row pack-form">
            <div class="col-sm-6 col-12">
                <div class="exp_left">
                    <div class="exp_h2">
                        Our locations
                    </div>
                    @foreach( $location as $item)
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

<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1Label">Văn phòng ảo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="virtual-table">
                    <div class="myTable">
                        <div class="myRow">
                            <div class="myCell">Gói</div>
                            <div class="myCell">{{$standard->virtual_name}}</div>
                            <div class="myCell">{{$premium->virtual_name}}</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Địa điểm</div>
                            <div class="myCell">{{$standard->virtual_location}}</div>
                            <div class="myCell">{{$premium->virtual_location}}</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Giá</div>
                            <div class="myCell">{{$standard->virtual_price}}</div>
                            <div class="myCell">{{$premium->virtual_price}}</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Địa chỉ giao dịch</div>
                            <div class="myCell">@if($standard->virtual_trade_adr == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_trade_adr == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Địa chỉ đăng ký kinh doanh</div>
                            <div class="myCell">@if($standard->virtual_regis_adr == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_regis_adr == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Dịch vụ tiếp nhận bưu phẩm</div>
                            <div class="myCell">@if($standard->virtual_parcel == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_parcel == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Lễ tân</div>
                            <div class="myCell">@if($standard->virtual_recept == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_recept == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Làm việc tại site</div>
                            <div class="myCell">{{$standard->virtual_work}}</div>
                            <div class="myCell">{{$premium->virtual_work}}</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Sử dụng phòng họp</div>
                            <div class="myCell">{{$standard->virtual_meeting_room}}</div>
                            <div class="myCell">{{$premium->virtual_meeting_room}}</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Nước uống, trà, cà phê</div>
                            <div class="myCell">@if($standard->virtual_drink == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_drink == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Trang in photo</div>
                            <div class="myCell">{{$standard->virtual_photo}}</div>
                            <div class="myCell">{{$premium->virtual_photo}}</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Chi phí điện nước</div>
                            <div class="myCell">@if($standard->virtual_bill == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_bill == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Dịch vụ vệ sinh</div>
                            <div class="myCell">@if($standard->virtual_sanitary == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_sanitary == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Dịch vụ bảo vệ</div>
                            <div class="myCell">@if($standard->virtual_guard == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_guard == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Biển tên công ty</div>
                            <div class="myCell">@if($standard->virtual_nameboard == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_nameboard == 1) x @endif</div>
                        </div>
                        <div class="myRow">
                            <div class="myCell">Tư vấn doanh nghiệp</div>
                            <div class="myCell">@if($standard->virtual_advice == 1) x @endif</div>
                            <div class="myCell">@if($premium->virtual_advice == 1) x @endif</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal2Label">Kế toán doanh nghiệp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="myTable">
                    <div class="myRow">
                        <div class="myCell">Dịch vụ</div>
                        <div class="myCell">Miêu tả</div>
                        <div class="myCell">Giá</div>
                    </div>
                    @foreach($services as $service)
                        <div class="myRow">
                            <div class="myCell">{!!$service->service_name!!}</div>
                            <div class="myCell">
                                {!!$service->service_description!!}
                            </div>
                            <div class="myCell">{!!$service->service_price!!}</div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal3Label">Tư vấn doanh nghiệp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="myTable">
                    <div class="myRow">
                        <div class="myCell">Dịch vụ</div>
                        <div class="myCell">Miêu tả</div>
                        <div class="myCell">Giá</div>
                    </div>
                    @foreach($advices as $advice)
                        <div class="myRow">
                            <div class="myCell">{!!$advice->advice_name!!}</div>
                            <div class="myCell">
                                {!!$advice->advice_description!!}
                            </div>
                            <div class="myCell">
                                {!!$advice->advice_price!!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>


@include('public.modal')
@stop