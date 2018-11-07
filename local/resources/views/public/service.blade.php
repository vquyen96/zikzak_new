@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="service/css/service.css">
<link rel="stylesheet" type="text/css" href="base/css/modal.css">
@stop

@section('javascript')
<script type="text/javascript" src="service/js/service.js"></script>
{{--@if( Session::has('success') )--}}
{{--<script type="text/javascript" src="base/js/modal.js"></script>--}}
{{--@endif--}}
@stop

@section('title','Zikzak Coworking Space | Tư vấn doanh nghiệp | Kế toán doanh nghiệp')

@section('description')
Zikzak Coworking giúp doanh nghiệp, đặc biệt là Start-up và SME, hoàn tất mọi thủ tục, trách nhiệm, nghiệp vụ liên quan tới đáp ứng quy định pháp luật và quản lý sổ sách nội bộ. Ngoài ra, doanh nghiệp sẽ được cung cấp những tư vấn hiệu quả, quy trình kế toán gọn nhẹ, và báo cáo quản trị theo chuẩn của các tập đoàn tư vấn, kiểm toán hàng đầu thế giới như PWC.
@stop

@section('main')
{{--<section class="zz-section service-head">--}}
	{{--<div class="dark-cover">--}}
		{{--<h2 class="zz-heading-3 white center vertical-align">dịch vụ</h2>--}}
	{{--</div>--}}
{{--</section>--}}
<div class="container">
	<div class="row">

		<div class="col-md-4 col-xs-12">
			<div class="service_item">
				<div class="service_item_title">
					{{ $virtual->name }}
				</div>
				<div class="service_item_content">
					{!! $virtual->content !!}

				</div>
				<div class="service_item_link">
					<a href="{{ asset('virtual') }}">Xem thêm</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="service_item">
				<div class="service_item_title">
					{{ $pack->name }}
				</div>
				<div class="service_item_content">
					{!! $pack->content !!}
				</div>
				<div class="service_item_link">
					<a href="{{ asset('pack') }}">Xem thêm</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="service_item">
				<div class="service_item_title">
					{{ $meeting->name }}
				</div>
				<div class="service_item_content">
					{!! $meeting->content !!}
				</div>
				<div class="service_item_link">
					<a href="{{ asset('meeting-room') }}">Xem thêm</a>
				</div>
			</div>
		</div>
	</div>
</div>


@include('public.modal')
@stop