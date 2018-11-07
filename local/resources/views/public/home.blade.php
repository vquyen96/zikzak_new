@extends('public.master')

@section('css')
	<link rel="stylesheet" type="text/css" href="home/css/home.css">
@stop

@section('title','Zikzak Coworking Space | Không gian làm việc chung')

@section('description')
	Zikzak Coworking Space - Không gian làm việc chung hàng đầu. Đăng ký ngay chỗ làm việc chỉ từ 69K.
@stop

@section('main')
<div class=" container">
	<div class="row">
		<div class="col-12">
			<div class="body">
				<div class="body_title">
					{{ $content->name }}

				</div>
				<div class="body_content center
">
					{!! $content->content !!}

				</div>
			</div>
		</div>
	</div>

</div>
@stop
