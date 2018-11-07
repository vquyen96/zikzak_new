@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="news/css/news.css">
@stop

@section('javascript')
<script type="text/javascript" src="news/js/news.js"></script>
@stop

@section('title',$news->news_name)

@section('description')
{{ strip_tags($news->news_content) }}
@stop

@section('main')
{{--<section class="zz-section news-head">--}}
	{{--<div class="dark-cover">--}}
		{{--<h2 class="zz-heading-3 white center vertical-align">tin zikzak</h2>--}}
	{{--</div>--}}
{{--</section>--}}


{{--<section class="zz-section">--}}
	{{--<div class="container">--}}
		{{--<div class="row">--}}
			{{--<div class="col-12 col-md-8 col-lg-8">--}}
				{{--<div class="news-detail-container">--}}
					{{--<h1 class="zz-heading-1">{{$news->news_name}}</h1>--}}
					{{--<p class="italic grey bold">{{$news->news_summary}}</p>--}}
					{{--<img src="news/image/{{$news->news_image}}">--}}
					{{--{!! $news->news_content !!}--}}
				{{--</div>--}}
			{{--</div>--}}

			{{--<div class="d-none d-md-block col-md-1 col-lg-1">--}}
				{{----}}
			{{--</div>--}}
			{{--<div class="col-12 col-md-3 col-lg-3 other-news-container">--}}
				{{--<div class="underline main-color italic margin-top-25 other-news">Sự kiện khác</div>--}}
				{{--@foreach($news_list as $item)--}}
				{{--<div class="other-news-item">--}}
					{{--<a href="{{ asset('news-detail/'.$item->news_slug) }}"><figure class="other-news-image" style="background-image:url(news/image/{{ $item->news_image }});"></figure></a>--}}
					{{--<a href="{{ asset( 'news-detail/'.$item->news_slug ) }}"><h4 class="grey bold">{{ $item->news_name }}</h4></a>--}}
					{{--<p>{{ cut_string( $item->news_summary,100 ) }}</p>--}}
					{{--<a href="{{ asset('news-detail/'.$item->news_slug) }}" class="main-color italic">Xem thêm...</a>--}}
				{{--</div>--}}
				{{--@endforeach--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	{{----}}
{{--</section>--}}

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10 col-12">
				<div class="news_detail">
					<div class="news_detail_title">
						{{$news->news_name}}
					</div>
					<div class="news_detail_summary">
						{{$news->news_summary}}
					</div>
					<div class="news_detail_img">
						<img src="news/image/{{$news->news_image}}">
					</div>
					<div class="news_detail_content">
						{!! $news->news_content !!}
					</div>
				</div>
			</div>
		</div>
		<div class="row news_list">
			@foreach($news_list as $news)
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="news_item">
						<div class="news_item_img">
							<a href="{{ asset('news-detail/'.$news->news_slug) }}">
								<div class="news_item_img_main" style="background: url('news/image/{{$news->news_image}}') no-repeat center /cover"></div>
							</a>
						</div>
						<div class="news_item_content">
							<div class="news_item_content_title">
								{{$news->news_name}}
							</div>
							<div class="news_item_content_summary">
								{{cut_string($news->news_summary,250)}}
							</div>
							<div class="news_item_content_show">
								<a href="{{ asset('news-detail/'.$news->news_slug) }}">
									Chi tiết
								</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
@stop