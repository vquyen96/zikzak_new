@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="service/css/service.css">
@stop
@section('javascript')
<script type="text/javascript" src="service/js/service.js"></script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<ul class="service-menu">
				<li class="zz-heading grey menu-01 active">kế toán doanh nghiệp</li>
				<li class="zz-heading grey menu-02">tư vấn doanh nghiệp</li>
			</ul>
		</div>
	</div>	
</div>

<div class="container-fluid zz-section">
	<div class="row service-01 active">
		<div class="col-12">
			<div class="service-text">
				<div class="box box-primary">
					<form method="post" action="{{ asset('admin/service/service-content') }}">
						<div class="box-header with-border">
							<h3 class="box-title">Giới thiệu</h3>
						</div>
						<div class="row">
							<div class="col-sm-6 col-12">
								<div class="box-body">
									<textarea name="content_content_left">{!! $service_content_left->content_content !!}</textarea>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="box-body">
									<textarea name="content_content_right">{!! $service_content_right->content_content !!}</textarea>
								</div>
							</div>
							<div class="col-sm-12 col-12">
								<div class="box-body">
									<textarea name="content_content_bot">{!! $service_content_bot->content_content !!}</textarea>
								</div>
							</div>
						</div>
						{{--<div class="box-body">--}}
							{{--<textarea name="content_content">{!! $service_content_left->content_content !!}</textarea>--}}
						{{--</div>--}}
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="box box-primary box-950">
				<div class="box-header with-border">
					<h3 class="box-title">Bảng giá dịch vụ</h3>
				</div>
				<div class="box-body">
					<div class="myTable">
						<div class="myRow">
							<div class="myCell">Dịch vụ</div>
							<div class="myCell">Miêu tả</div>
							<div class="myCell">Giá</div>
							<div class="myCell"></div>
						</div>
						@foreach($services as $service)
						<form class="myRow" method="post" action="{{ asset('admin/service/editservice/'.$service->service_id) }}">
							<div class="myCell"><textarea name="service_name">{{$service->service_name}}</textarea></div>
							<div class="myCell">
								<textarea name="service_description">{!! $service->service_description !!}</textarea>
							</div>
							<div class="myCell">
								<textarea name="service_price">{!!$service->service_price!!}</textarea>
							</div>
							{{csrf_field()}}
							<div class="myCell"><button type="submit" class="btn btn-primary">Save</button></div>
						</form>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row service-02">
		<div class="col-12">
			<div class="service-text">
				<div class="box box-primary">
					<form method="post" action="{{ asset('admin/service/advice-content') }}">
						<div class="box-header with-border">
							<h3 class="box-title">Giới thiệu</h3>
						</div>
						<div class="row">
							<div class="col-sm-6 col-12">
								<div class="box-body">
									<textarea name="content_content_left">{!! $advice_content_left->content_content !!}</textarea>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="box-body">
									<textarea name="content_content_right">{!! $advice_content_right->content_content !!}</textarea>
								</div>
							</div>
							<div class="col-sm-12 col-12">
								<div class="box-body">
									<textarea name="content_content_bot">{!! $advice_content_bot->content_content !!}</textarea>
								</div>
							</div>
						</div>
						{{--<div class="box-body">--}}
							{{--<textarea name="content_content">{!! $advice_content->content_content !!}</textarea>--}}
						{{--</div>--}}
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="box box-primary box-950">
				<div class="box-header with-border">
					<h3 class="box-title">Bảng giá dịch vụ</h3>
				</div>
				<div class="box-body">
					<div class="myTable">
						<div class="myRow">
							<div class="myCell">Dịch vụ</div>
							<div class="myCell">Miêu tả</div>
							<div class="myCell">Giá</div>
							<div class="myCell"></div>
						</div>
						@foreach($advices as $advice)
						<form class="myRow" method="post" action="{{ asset('admin/service/editadvice/'.$advice->advice_id) }}">
							<div class="myCell"><textarea name="advice_name">{!!$advice->advice_name!!}</textarea></div>
							<div class="myCell">
								<textarea name="advice_description">{!!$advice->advice_description!!}</textarea>
							</div>
							<div class="myCell">
								<textarea name="advice_price">{!!$advice->advice_price!!}</textarea>
							</div>
							{{csrf_field()}}
							<div class="myCell"><button type="submit" class="btn btn-primary">Save</button></div>
						</form>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop