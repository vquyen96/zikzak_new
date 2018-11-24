@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="pack/css/pack.css">
@stop
@section('javascript')
<script type="text/javascript">
	$(document).ready(function(){
		CKEDITOR.replace( 'pack1',{
			toolbar: [],
			height:'150px'
		} );
		CKEDITOR.replace( 'summ1',{
			toolbar: [],
			height:'80px'
		} );
		CKEDITOR.replace( 'pack2',{
			toolbar: [],
			height:'150px'
		} );
		CKEDITOR.replace( 'summ2',{
			toolbar: [],
			height:'80px'
		} );
		CKEDITOR.replace( 'pack3',{
			toolbar: [],
			height:'150px'
		} );
		CKEDITOR.replace( 'summ3',{
			toolbar: [],
			height:'80px'
		} );
		CKEDITOR.replace( 'pack4',{
			toolbar: [],
			height:'150px'
		} );
		CKEDITOR.replace( 'summ4',{
			toolbar: [],
			height:'80px'
		} );

		$('.addfacility').click(function(){
			$(this).parent().children('ul').append(' <li><input type="text" name="facility[]" placeholder="thêm mới tiện ích" </li>');
		});

		$('.form-container ul li .fa-minus-circle').click(function(){
			$(this).parent().remove();
		});
        $('.pack-image').click(function(){
            $(this).next('input[type="file"]').click();
        });

        $('input[type="file"]').change(function(){

            var reader = new FileReader();
            var target = $(this).prev('.pack-image');

            reader.onload = function(e) {
                target.css('background-image','url(' + e.target.result + ')');
            };
            reader.readAsDataURL(this.files[0]);
        });
	});

	

</script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Gói sản phẩm</h1>
		</div>
	</div>	
</div>

<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12 col-md-6 col-lg-3">
			<div class="form-container">
				<form method="post" action="{{ asset('admin/pack/pack1') }}" enctype="multipart/form-data">
					<input class="background-red" type="text" name="pack_name" value="{{$pack1->pack_name}}">
					<div class="pack-image" style="background-image: url( {{ asset('local/storage/app/public/pack/image/resized-'.$pack1->pack_image) }} )"></div>
					<input style="display: none;" type="file" name="pack_image">
					<input type="text" name="pack_price" value="{{$pack1->pack_price}}">
					<textarea id="summ1" name="pack_summary">{!!$pack1->pack_summary!!}</textarea>
					<textarea id="pack1" name="pack_detail">{!! $pack1->pack_detail !!}</textarea>
					<ul>
						@foreach( explode('|',$pack1->facility) as $item )
						<li>
							<input type="text" name="facility[]" value="{{$item}}"> 
							<i class="fas fa-minus-circle"></i>
						</li>
						@endforeach
					</ul>
					<a class="addfacility">+ add facility</a>
					<button class="background-red" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-3">
			<div class="form-container">
				<form method="post" action="{{ asset('admin/pack/pack2') }}" enctype="multipart/form-data">
					<input class="background-green" type="text" name="pack_name" value="{{$pack2->pack_name}}">
					<div class="pack-image" style="background-image: url( {{ asset('local/storage/app/public/pack/image/resized-'.$pack2->pack_image) }} )"></div>
					<input style="display: none;" type="file" name="pack_image">
					<input type="text" name="pack_price" value="{{$pack2->pack_price}}">
					<textarea id="summ2" name="pack_summary">{!!$pack2->pack_summary!!}</textarea>
					<textarea id="pack2" name="pack_detail">{!! $pack2->pack_detail !!}</textarea>
					<ul>
						@foreach( explode('|',$pack2->facility) as $item )
						<li>
							<input type="text" name="facility[]" value="{{$item}}"> 
							<i class="fas fa-minus-circle"></i>
						</li>
						@endforeach
					</ul>
					<a class="addfacility" onclick="addfacility()">+ add facility</a>
					<button class="background-green" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-3">
			<div class="form-container">
				<form method="post" action="{{ asset('admin/pack/pack3') }}"  enctype="multipart/form-data">
					<input class="background-yellow" type="text" name="pack_name" value="{{$pack3->pack_name}}">
					<div class="pack-image" style="background-image: url( {{ asset('local/storage/app/public/pack/image/resized-'.$pack3->pack_image) }} )"></div>
					<input style="display: none;" type="file" name="pack_image">
					<input type="text" name="pack_price" value="{{$pack3->pack_price}}">
					<textarea id="summ3" name="pack_summary">{!!$pack3->pack_summary!!}</textarea>
					<textarea id="pack3" name="pack_detail">{!! $pack3->pack_detail !!}</textarea>
					<ul>
						@foreach( explode('|',$pack3->facility) as $item )
						<li>
							<input type="text" name="facility[]" value="{{$item}}"> 
							<i class="fas fa-minus-circle"></i>
						</li>
						@endforeach
					</ul>
					<a class="addfacility" onclick="addfacility()">+ add facility</a>
					<button class="background-yellow" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-3">
			<div class="form-container">
				<form method="post" action="{{ asset('admin/pack/pack4') }}" enctype="multipart/form-data">
					<input class="background-blue" type="text" name="pack_name" value="{{$pack4->pack_name}}">
					<div class="pack-image" style="background-image: url( {{ asset('local/storage/app/public/pack/image/resized-'.$pack4->pack_image) }} )"></div>
					<input style="display: none;" type="file" name="pack_image">
					<input type="text" name="pack_price" value="{{$pack4->pack_price}}">
					<textarea id="summ4" name="pack_summary">{!!$pack4->pack_summary!!}</textarea>
					<textarea id="pack4" name="pack_detail">{!! $pack4->pack_detail !!}</textarea>
					<ul>
						@foreach( explode('|',$pack4->facility) as $item )
						<li>
							<input type="text" name="facility[]" value="{{$item}}"> 
							<i class="fas fa-minus-circle"></i>
						</li>
						@endforeach
					</ul>
					<a class="addfacility" onclick="addfacility()">+ add facility</a>
					<button class="background-blue" type="submit" name="submit">Save</button>
					{{csrf_field()}}
				</form>
			</div>
		</div>
	</div>
</div>
@stop