@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="about/css/about.css">
@stop
@section('javascript')
<script type="text/javascript">
	CKEDITOR.replace( 'story',{
		toolbar: [],
		height: '400px'
	});
	CKEDITOR.replace( 'view',{
		toolbar: [],
		height: '400px'
	});
	CKEDITOR.replace( 'value',{
		toolbar: [],
		height: '400px'
	});
</script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Về Zikzak</h1>
		</div>
	</div>	
</div>

<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-4">
			<div class="form-container border-blue">
				<form method="post" action="{{ asset('admin/about/story') }}">
					<label class="background-blue">Câu chuyện zikzak</label>
					<textarea name="story">{!!$story->about_content!!}</textarea>
					<button class="background-blue" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>

		<div class="col-12 col-md-12 col-lg-4">
			<div class="form-container border-yellow">
				<form method="post" action="{{ asset('admin/about/view') }}">
					<label class="background-yellow">Tầm nhìn và sứ mệnh</label>
					<textarea name="view">{!!$view->about_content!!}</textarea>
					<button class="background-yellow" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>

		<div class="col-12 col-md-12 col-lg-4">
			<div class="form-container border-green">
				<form method="post" action="{{ asset('admin/about/value') }}">
					<label class="background-green">Giá trị cốt lõi</label>
					<textarea name="value">{!!$value->about_content!!}</textarea>
					<button class="background-green" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>
	</div>
</div>
@stop