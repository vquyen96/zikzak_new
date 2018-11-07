@extends('admin.master')
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
<link rel="stylesheet" type="text/css" href="news/css/news.css">
@stop
@section('javascript')
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
@stop

@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Tin tức</h1>
		</div>
	</div>	
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<a class="btn btn-primary white btn-add" href="{{ asset('admin/news/add') }}">Đăng tin tức</a>
			<table data-pagination="true" data-search="true" data-toggle="table">
				<thead>
					<tr>
						<th data-sortable="true" data-field="news_id">ID</th>
						<th data-sortable="true" data-field="news_name">Title</th>
						<th data-sortable="true" data-field="created_at">Ngày đăng</th>
						<th>Chỉnh sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($news_list as $news)
					<tr>
						<td>{{$news->news_id}}</td>
						<td><a href="{{ asset('admin/news/edit/'.$news->news_id) }}" style="color: unset; text-decoration: none;">{{$news->news_name}}</a></td>
						<td>{{$news->created_at}}</td>
						<td>
							<a href="{{ asset('admin/news/edit/'.$news->news_id) }}" class="table-action btn btn-info btn-sm" title="Delete"><i class="far fa-edit"></i></a>
							<a href="{{ asset('admin/news/delete/'.$news->news_id) }}" class="table-action btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop