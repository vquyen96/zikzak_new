@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="experience/css/experience.css">
<link rel="stylesheet" type="text/css" href="experience/css/location.css">
<link rel="stylesheet" type="text/css" href="base/css/modal.css">
@stop

@section('javascript')
<script type="text/javascript" src="experience/js/experience.js"></script>
@if( Session::has('success') )
<script type="text/javascript" src="base/js/modal.js"></script>
@endif
@stop

@section('title','Zikzak Coworking Space | Trải nghiệm miễn phí')

@section('description')
Đăng ký trải nghiệm miễn phí với Zikzak Coworking Space ngay hôm nay.
@stop

@section('main')
{{--<section class="zz-section experience-head">--}}
	{{--<div class="dark-cover">--}}
		{{--<h2 class="zz-heading-3 white center vertical-align">trải nghiệm<br> miễn phí</h2>--}}
	{{--</div>--}}
{{--</section>--}}
{{--<form method="post" action="{{ asset('register') }}">--}}
	{{--<section class="zz-section">--}}
		{{--<div class="container">--}}
			{{--<div class="row">--}}
				{{--<div class="experience-text">--}}
					{{--<h2 class="zz-heading-2 black">Khám phá và trải nghiệm 01 ngày miễn phí tại ZIKZAK Coworking Space</h2>--}}
					{{--<h4 class="experience-h4 margin-bottom-25 margin-top-50">Địa điểm đăng ký trải nghiệm</h4>--}}
					{{--<p><input required="" type="radio" name="location" value="Hồ Chí Minh"> <b>ZIKZAK1:</b> Lầu 5-6, tòa nhà CPHONE, 456 Xô Viết Nghệ Tĩnh, phường 25, Quận Bình Thạnh, Hồ Chí Minh.</p>--}}
					{{--<p><input required="" type="radio" name="location" value="Nha Trang"> <b>ZIKZAK2:</b> Lầu 29, tòa nhà Mường Thanh, 63 Trần Phú, thành phố Nha Trang, tỉnh Khánh Hòa.</p>--}}
				{{--</div>--}}
				{{--<div class="register-content">--}}
					{{--<div class="register-control">--}}
						{{--<label class="register-label white">Tên đầy đủ:</label>--}}
						{{--<input required="" class="register-input" type="text" name="name">--}}
					{{--</div>--}}
					{{--<div class="register-control">--}}
						{{--<label class="register-label white">Email:</label>--}}
						{{--<input required="" class="register-input" type="email" name="email">--}}
					{{--</div>--}}
					{{--<div class="register-control">--}}
						{{--<label class="register-label white">Số điện thoại:</label>--}}
						{{--<input required="" class="register-input" type="text" name="phone">--}}
					{{--</div>--}}
					{{--<div class="register-btn-control">--}}
						{{--<button class="zz-btn zz-btn-md zz-btn-red zz-heading-2 white center register-btn">Đăng ký</button>--}}
					{{--</div>--}}
					{{--<input style="display: none;" type="text" name="service" value="Trải nghiệm miễn phí">--}}
					{{--{{csrf_field()}}--}}

				{{--</div>--}}
			{{--</div>--}}

			{{--<div class="row margin-top-50">--}}
				{{--<figure class="experience-img" style="background-image: url(experience/image/2.png)">--}}

				{{--</figure>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</section>--}}
{{--</form>--}}

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="exp_header border_bot center">
					Try it for free
				</div>
			</div>
		</div>
		<div class="row">
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
							<input class="d-none" type="text" name="service" value="Trải nghiệm miễn phí">
							<input type="text" class="d-none" name="location" placeholder="Name (required)"  value="Không biết">
						</div>
						<div class="exp_input">
							<input type="text" class="" name="phone" placeholder="Phone Number (required)" required>
						</div>
						<div class="exp_input">
							<input type="email" class="" name="email" placeholder="Email (required)" required>
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