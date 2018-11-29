<div id="sidebar">
	<div class="user-panel">
		<div class="image">
			<img src="base/image/user.png">
		</div>
		<div class="info">
			<p>@if( Auth::user()->level == 1 ) Admin @else Staff @endif</p>
		</div>
	</div>

	<ul class="sidebar-menu">
		<li class="header">MAIN NAVIGATION</li>
		<li class=""><a @if( Request::segment(2)==null ) class="active" @endif href="{{ asset('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Home</span></a></li>
		<li class=""><a @if( Request::segment(2)=='user' ) class="active" @endif href="{{ asset('admin/user') }}"><i class="fas fa-users"></i> <span>User</span></a></li>
		<li class=""><a @if( Request::segment(2)=='banner' ) class="active" @endif href="{{ asset('admin/banner') }}"><i class="far fa-image"></i> <span>Banner</span></a></li>
		{{--<li class=""><a @if( Request::segment(2)=='space' ) class="active" @endif href="{{ asset('admin/space') }}"><i class="fas fa-home"></i> <span>Không gian ZikZak</span></a></li>--}}
		<li class=""><a @if( Request::segment(2)=='pack' ) class="active" @endif href="{{ asset('admin/pack') }}"><i class="fas fa-box"></i> <span>Gói sản phẩm</span></a></li>
		<li class=""><a @if( Request::segment(2)=='news' ) class="active" @endif href="{{ asset('admin/news') }}"><i class="far fa-newspaper"></i> <span>Tin tức</span></span></a></li>
		<li class=""><a @if( Request::segment(2)=='register' ) class="active" @endif href="{{ asset('admin/register') }}"><i class="fab fa-wpforms"></i> <span>Đăng ký</span></a></li>
		<li class=""><a @if( Request::segment(2)=='service' ) class="active" @endif href="{{ asset('admin/service') }}"><i class="fab fa-connectdevelop"></i> <span>Dịch vụ</span></a></li>
		<li class=""><a @if( Request::segment(2)=='about' ) class="active" @endif href="{{ asset('admin/about') }}"><i class="fab fa-linode"></i> <span>Về zikzak</span></a></li>
		<li class=""><a @if( Request::segment(2)=='virtual' ) class="active" @endif href="{{ asset('admin/virtual') }}"><i class="far fa-building"></i> <span>Văn phòng ảo</span></a></li>
		<li class=""><a @if( Request::segment(2)=='location' ) class="active" @endif href="{{ asset('admin/location') }}"><i class="fas fa-map-marker-alt"></i></i> <span>Vị trí</span></a></li>
		<li class=""><a @if( Request::segment(2)=='member' ) class="active" @endif href="{{ asset('admin/member') }}"><i class="far fa-address-card"></i> <span>Thành viên</span></a></li>
		<li class=""><a @if( Request::segment(2)=='content' ) class="active" @endif href="{{ asset('admin/content') }}"> <i class="fas fa-clipboard-list"></i> <span>Nội dung</span></a></li>
		<li class=""><a @if( Request::segment(2)=='meeting' ) class="active" @endif href="{{ asset('admin/meeting') }}"> <i class="fab fa-black-tie"></i> <span>Phòng họp</span></a></li>
		<li class=""><a @if( Request::segment(2)=='image' ) class="active" @endif href="{{ asset('admin/image') }}"><i class="fas fa-images"></i><span>Hình ảnh</span></a></li>
	</ul>
</div>