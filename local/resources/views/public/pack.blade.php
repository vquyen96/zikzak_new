@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="pack/css/pack.css">
<link rel="stylesheet" type="text/css" href="base/css/modal.css">
<link rel="stylesheet" type="text/css" href="experience/css/location.css">

@stop

@section('javascript')
	<script type="text/javascript" src="pack/js/pack.js"></script>
@if( Session::has('success') )
<script type="text/javascript" src="base/js/modal.js"></script>
@endif
@stop

@section('title','Zikzak Coworking Space | Gói thành viên')

@section('description')
Làm việc hiệu quả hơn với giá chỉ từ 69K. Trở thành thành viên của Zikzak Coworking Space ngay hôm nay ! Không gian làm việc chung (Coworking Space) hiện đại tại thành phố Hồ Chí Minh và Nha Trang !
@stop

@section('main')

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="pack_head border_bot center">
					Thành viên Zikzak
				</div>
				<div class="pack_title center">
					{{ $content->name }}
				</div>
				<div class="pack_summary center">
					{!! $content->content !!}
				</div>
			</div>
		</div>
		@foreach($packs as $key=>$pack)
			<div class="pack_item d-flex {{ $key%2 ? 'flex_row_reverse' : '' }}">
				<div class="pack_item_left {{ $key%2 ? '' : 'mr_4' }}" style="background: url('pack/image/resized-{{$pack->pack_image}}') no-repeat center /cover">
				</div>
				<div class="pack_item_right {{ $key%2 ? 'mr_4 text-right' : '' }}">
					<div class="pack_item_name border_bot {{ $key%2 ? 'right' : '' }}">
						{{$pack->pack_name}}
					</div>
					<div class="pack_item_content">
						<div class="pack_item_content_summary mb-4"> {!!$pack->pack_summary!!} </div>
						<ul class="pack_item_content_facility">
							@foreach( explode('|',$pack->facility) as $facility )
								<li><span></span>{{$facility}}</li>
							@endforeach
						</ul>
					</div>
					<div class="pack_item_button">
						<button>{{$pack->pack_price}}</button>
					</div>
				</div>
			</div>

		@endforeach
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
							{{--<input class="d-none" type="text" name="service" value="Trải nghiệm miễn phí">--}}
							{{--<input type="text" class="d-none" name="location" placeholder="Name (required)"  value="Không biết">--}}
						</div>
						<div class="exp_input">
							<input type="text" class="" name="phone" placeholder="Phone Number (required)" required>
						</div>
						<div class="exp_input">
							<input type="email" class="" name="email" placeholder="Email (required)" required>
						</div>
						<div class="exp_input">
							<select name="service" id="">
								<option value="" disabled selected>Service (required)</option>
								<option value="THÀNH VIÊN NGÀY">THÀNH VIÊN NGÀY</option>
								<option value="THÀNH VIÊN LINH HOẠT">THÀNH VIÊN LINH HOẠT</option>
								<option value="THÀNH VIÊN THÁNG">THÀNH VIÊN THÁNG</option>
								<option value="VĂN PHÒNG RIÊNG">VĂN PHÒNG RIÊNG</option>
							</select>
						</div>
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
@include('public.modal')
@stop