@extends('admin.master')
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
<link rel="stylesheet" type="text/css" href="service/css/service.css">
@stop
@section('javascript')
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Danh sách đăng ký dịch vụ</h1>
		</div>
	</div>
</div>

<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<table data-pagination="true" data-search="true" data-toggle="table">
				<thead>
					<tr>
						<th data-sortable="true" data-field="register_id">ID</th>
						<th data-sortable="true" data-field="register_name">Tên</th>
						<th data-sortable="true" data-field="register_email">Email</th>
						<th data-sortable="true" data-field="register_phone">Phone</th>
						<th data-sortable="true" data-field="register_service">Service</th>
						<th data-sortable="true" data-field="register_location">Location</th>
						<th data-sortable="true" data-field="created_at">Ngày</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registers as $register)
					<tr>
						<td>{{$register->register_id}}</td>
						<td>{{$register->register_name}}</td>
						<td>{{$register->register_email}}</td>
						<td>{{$register->register_phone}}</td>
						<td>{{$register->register_service}}</td>
						<td>{{$register->register_location}}</td>
						<td>{{$register->created_at}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop