@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="base/css/bootstrap-tokenfield.css">
<link rel="stylesheet" type="text/css" href="news/css/news.css">
@stop
@section('javascript')
<script type="text/javascript" src="base/js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="news/js/news.js"></script>
@stop

@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Tin tức</h1>
		</div>
	</div>	
</div>
<form method="post" class="news-form" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Đăng tin tức mới</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Title bài viết</label>
							<input required="" type="text" class="form-control"  placeholder="Enter title" name="news_name">
						</div>
						<div class="form-group">
							<label class="bold">Summary</label>
							<textarea required="" class="form-control" name="news_summary"></textarea>
							<p class="help-block italic">Phần chữ đậm đầu bài viết</p>
						</div>
						<div class="form-group">
							<label class="bold">Tag:</label>
							<input type="text" id="tokenfield" name="tag" required="" class="form-control">
							<p class="help-block italic">Ấn Tab hoặc Enter để ngăn cách mỗi từ</p>
							<div class="form-data"></div>
						</div>
					</div><!-- /.box-body -->
				</div>
			</div>

			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Ảnh đại diện</label>
							<input required type="file" id="file" name="news_image[]" style="display: none" onchange="changeImg(this)">
							<img id="add-image" src="base/image/add-icon.png">
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Nội dung bài viết</label>
							<textarea required="" class="form-control" name="news_content"></textarea>
						</div>
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{csrf_field()}}
</form>
@stop