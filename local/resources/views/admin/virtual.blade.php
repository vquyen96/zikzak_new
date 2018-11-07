@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="virtual/css/virtual.css">
@stop
@section('javascript')
<script type="text/javascript">

</script>
@stop
@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Văn phòng ảo</h1>
		</div>
	</div>	
</div>

<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<div class="box box-success box-950">
				<div class="box-header with-border">
					<h3 class="box-title">Bảng giá văn phòng ảo</h3>
				</div>
				<div class="box-body">
					<div class="my-container">
						<div class="my-column">
							<div class="my-row">GÓI</div>
							<div class="my-row">ĐỊA ĐIỂM</div>
							<div class="my-row">GIÁ</div>
							<div class="my-row">ĐỊA CHỈ GIAO DỊCH</div>
							<div class="my-row">ĐỊA CHỈ ĐĂNG KÝ KINH DOANH</div>
							<div class="my-row">DỊCH VỤ TIẾP NHẬN BƯU PHẨM</div>
							<div class="my-row">LỄ TÂN</div>
							<div class="my-row">LÀM VIỆC TẠI SITE</div>
							<div class="my-row">SỬ DỤNG PHÒNG HỌP</div>
							<div class="my-row">NƯỚC UỐNG, TRÀ, CÀ PHÊ</div>
							<div class="my-row">TRANG IN PHOTO</div>
							<div class="my-row">CHI PHÍ ĐIỆN NƯỚC</div>
							<div class="my-row">DỊCH VỤ VỆ SINH</div>
							<div class="my-row">DỊCH VỤ BẢO VỆ</div>
							<div class="my-row">BIỂN TÊN CÔNG TY</div>
							<div class="my-row">TƯ VẤN DOANH NGHIỆP</div>
							<div class="my-row"></div>
						</div>
						<form class="my-column" method="post" action="{{ asset('admin/virtual/standard') }}">					
							<div class="my-row"><input type="text" name="virtual_name" value="{{$standard->virtual_name}}"></div>
							<div class="my-row"><input type="text" name="virtual_location" value="{{$standard->virtual_location}}"></div>
							<div class="my-row"><input type="text" name="virtual_price" value="{{$standard->virtual_price}}"></div>
							<div class="my-row"><input type="checkbox" name="virtual_trade_adr" @if($standard->virtual_trade_adr == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_regis_adr" @if($standard->virtual_regis_adr == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_parcel" @if($standard->virtual_parcel == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_recept" @if($standard->virtual_recept == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="text" name="virtual_work" value="{{$standard->virtual_work}}"></div>
							<div class="my-row"><input type="text" name="virtual_meeting_room" value="{{$standard->virtual_meeting_room}}"></div>
							<div class="my-row"><input type="checkbox" name="virtual_drink" @if($standard->virtual_drink == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="text" name="virtual_photo" value="{{$standard->virtual_photo}}"></div>
							<div class="my-row"><input type="checkbox" name="virtual_bill" @if($standard->virtual_bill == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_sanitary" @if($standard->virtual_sanitary == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_guard" @if($standard->virtual_guard == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_nameboard" @if($standard->virtual_nameboard == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_advice" @if($standard->virtual_advice == 1) checked @endif value="1"></div>
							{{csrf_field()}}
							<div class="my-row"><button type="submit" class="btn btn-primary">Save</button></div>
						</form>
						<form class="my-column" method="post" action="{{ asset('admin/virtual/premium') }}">					
							<div class="my-row"><input type="text" name="virtual_name" value="{{$premium->virtual_name}}"></div>
							<div class="my-row"><input type="text" name="virtual_location" value="{{$premium->virtual_location}}"></div>
							<div class="my-row"><input type="text" name="virtual_price" value="{{$premium->virtual_price}}"></div>
							<div class="my-row"><input type="checkbox" name="virtual_trade_adr" @if($premium->virtual_trade_adr == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_regis_adr" @if($premium->virtual_regis_adr == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_parcel" @if($premium->virtual_parcel == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_recept" @if($standard->virtual_recept == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="text" name="virtual_work" value="{{$premium->virtual_work}}"></div>
							<div class="my-row"><input type="text" name="virtual_meeting_room" value="{{$premium->virtual_meeting_room}}"></div>
							<div class="my-row"><input type="checkbox" name="virtual_drink" @if($premium->virtual_drink == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="text" name="virtual_photo" value="{{$premium->virtual_photo}}"></div>
							<div class="my-row"><input type="checkbox" name="virtual_bill" @if($premium->virtual_bill == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_sanitary" @if($premium->virtual_sanitary == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_guard" @if($premium->virtual_guard == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_nameboard" @if($premium->virtual_nameboard == 1) checked @endif value="1"></div>
							<div class="my-row"><input type="checkbox" name="virtual_advice" @if($premium->virtual_advice == 1) checked @endif value="1"></div>
							{{csrf_field()}}
							<div class="my-row"><button type="submit" class="btn btn-primary">Save</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@stop