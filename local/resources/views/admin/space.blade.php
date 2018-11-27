@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="space/css/space.css">
@stop
@section('javascript')
<script type="text/javascript" src="space/js/space.js"></script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Không gian ZikZak</h1>
		</div>
	</div>	
</div>

<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Up ảnh không gian zikzak</h3>
				</div>
				<div class="box-body">
					<div class="image-container">
						@foreach($spaces as $space)
						<div class="image-item" style="background-image: url(../public/home/image/resized-{{$space->space_image}})"><a href="{{ asset('admin/space/delete/'.$space->space_id) }}">x</a></div>
						@endforeach

						<div class="image-item" id="add-image" style="background-image: url(base/image/add-icon.png)"></div>
						<form method="post" enctype="multipart/form-data">
							<input required="" style="display: none;" id="file" type="file" name="space_image[]" multiple="" onchange="changeImg(this)">
							<button type="submit" class="btn btn-primary" id="button">Save</button>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop