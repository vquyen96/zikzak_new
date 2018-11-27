<div class="bannerHead">
	<div class="carousel_head">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@foreach($banners as $key=>$banner)
					<li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
				@endforeach
			</ol>
			<div class="carousel-inner">
				@foreach($banners as $key=>$banner)
					<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
						@if($banner->banner_video == 'on')
							<video width="100%" autoplay muted loop >
								<source src="{{ asset('local/public/home/image/'.$banner->banner_image) }}" type="video/mp4">
								<source src="mov_bbb.ogg" type="video/ogg">
								Trình duyệt không hỗ trợ
							</video>
						@else
							<div class="carousel_head_banner" style="background: url('home/image/{{ $banner->banner_image }}') no-repeat center /cover"></div>
						@endif
					</div>
				@endforeach
			</div>
			<!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
			<!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
			<!--<span class="sr-only">Previous</span>-->
			<!--</a>-->
			<!--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
			<!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
			<!--<span class="sr-only">Next</span>-->
			<!--</a>-->
		</div>
	</div>
	<div class="header hide768">
		<ul>
			<li>
				<a href="{{ asset('about') }}">
					about
				</a>
			</li>
			<li>
				<a href="{{ asset('service') }}">
					services
				</a>
			</li>
			<li>
				<a href="{{ asset('news') }}">
					news
				</a>
			</li>
			<li>
				<a href="{{ asset('') }}">
					<img src="home/image/logo_zikzak.png" alt="">
				</a>
			</li>
			<li>
				<a href="{{ asset('community') }}">
					community
				</a>
			</li>
			<li>
				<a href="{{ asset('experience') }}">
					try it for free
				</a>
				<ul>
					@foreach( $locations as $location)
					<li>
						<a href="{{ asset('location/'.$location->id) }}">
							{{ $location->name }}
						</a>
					</li>
					@endforeach
				</ul>
			</li>

		</ul>
	</div>
	<div class="header_mobi show768">
		<div class="header_mobi_logo">
			<a href="{{ asset('/') }}">
				<img src="home/image/logo_zikzak.png" alt="">
			</a>

		</div>
		<div class="btn_show_nav">
			<i class="fas fa-bars"></i>
		</div>
		<div class="header_mobi_nav">
			<ul>
				<li>
					<a href="{{ asset('about') }}">
						about
					</a>
				</li>
				<li>
					<a href="{{ asset('service') }}">
						services
					</a>
				</li>
				<li>
					<a href="{{ asset('news') }}">
						news
					</a>
				</li>
				<li>
					<a href="{{ asset('community') }}">
						community
					</a>
				</li>
				<li>
					<a href="{{ asset('experience') }}">
						try it for free
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
