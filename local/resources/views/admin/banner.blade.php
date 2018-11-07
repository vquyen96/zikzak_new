@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="banner/css/banner.css">
@stop
@section('javascript')
<script type="text/javascript" src="banner/js/banner.js"></script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Banner</h1>
		</div>
	</div>	
</div>

@foreach($banners as $key => $banner)
<form method="post" enctype="multipart/form-data" action="{{ asset('admin/banner/edit/'.$banner->banner_id) }}">
	<div class="container-fluid zz-section">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Banner {{($key + 1)}}</label>
							<input type="file" class="file" name="banner_image" style="display: none" onchange="changeImg(this)">
							<img class="add-image" src="../public/home/image/{{$banner->banner_image}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Thông tin banner {{($key + 1)}}</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Title dòng 1</label>
							<input required="" type="text" class="form-control"  placeholder="Tiêu đề dòng 1" name="banner_head1" value="{{$banner->banner_head1}}">
						</div>
						<div class="form-group">
							<label class="bold">Title dòng 2</label>
							<input type="text" class="form-control"  placeholder="Tiêu đề dòng 2" name="banner_head2" value="{{$banner->banner_head2}}">
						</div>
						<div class="form-group">
							<label class="bold">Nội dung banner</label>
							<input required="" type="text" class="form-control"  placeholder="Description" name="banner_description" value="{{$banner->banner_description}}">
						</div>
						<div class="form-group">
							<label class="bold">Vị trí banner {{ $banner->banner_position }}</label>
							<select class="form-control" name="banner_position">
								<option value="{{ \App\Models\Banner::POSITION_NULL }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_NULL ? 'selected' : '' }}>NULL</option>
								<option value="{{ \App\Models\Banner::POSITION_HOME }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_HOME ? 'selected' : '' }}>Home</option>
								<option value="{{ \App\Models\Banner::POSITION_ABOUT }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_ABOUT ? 'selected' : '' }}>About</option>
								<option value="{{ \App\Models\Banner::POSITION_SERVICE }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_SERVICE ? 'selected' : '' }}>Service</option>
								<option value="{{ \App\Models\Banner::POSITION_NEWS }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_NEWS ? 'selected' : '' }}>News</option>
								<option value="{{ \App\Models\Banner::POSITION_COMMUNITY }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_COMMUNITY ? 'selected' : '' }}>Community</option>
								<option value="{{ \App\Models\Banner::POSITION_TRY_IT }}" {{ $banner->banner_position == \App\Models\Banner::POSITION_TRY_IT ? 'selected' : '' }}>Try it for free</option>
							</select>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Save</button>
						<a class="btn btn-danger white">Xóa</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{csrf_field()}}
</form>
@endforeach

<form method="post" enctype="multipart/form-data" action="{{ asset('admin/banner/add') }}">
	<div class="container-fluid zz-section">
		<div class="row">
			<a class="btn btn-success btn-lg white append-btn">+ Thêm banner</a>
		</div>
	</div>
	<div class="container-fluid zz-section banner-appended">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Banner</label>
							<input required="" type="file" class="file" name="banner_image" style="display: none" onchange="changeImg(this)">
							<img class="add-image" src="../admin/base/image/add-icon.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Thông tin banner</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Title dòng 1</label>
							<input  type="text" class="form-control"  placeholder="Tiêu đề dòng 1" name="banner_head1">
						</div>
						<div class="form-group">
							<label class="bold">Title dòng 2</label>
							<input type="text" class="form-control"  placeholder="Tiêu đề dòng 2" name="banner_head2">
						</div>
						<div class="form-group">
							<label class="bold">Nội dung banner</label>
							<input  type="text" class="form-control"  placeholder="Description" name="banner_description">
						</div>
						<div class="form-group">
							<label class="bold">Vị trí banner</label>
							<select class="form-control" name="banner_position">
								<option value="{{ \App\Models\Banner::POSITION_NULL }}">NULL</option>
								<option value="{{ \App\Models\Banner::POSITION_HOME }}">Home</option>
								<option value="{{ \App\Models\Banner::POSITION_ABOUT }}">About</option>
								<option value="{{ \App\Models\Banner::POSITION_SERVICE }}">Service</option>
								<option value="{{ \App\Models\Banner::POSITION_NEWS }}">News</option>
								<option value="{{ \App\Models\Banner::POSITION_COMMUNITY }}">Community</option>
								<option value="{{ \App\Models\Banner::POSITION_TRY_IT }}">Try it for free</option>
							</select>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{csrf_field()}}
</form>
@stop