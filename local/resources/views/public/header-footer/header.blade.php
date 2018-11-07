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
						<div class="carousel_head_banner" style="background: url('home/image/{{ $banner->banner_image }}') no-repeat center /cover"></div>
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
	<div class="header">
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
			</li>

		</ul>
	</div>
</div>
