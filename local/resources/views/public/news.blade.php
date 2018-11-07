@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="news/css/news.css">
@stop

@section('javascript')
<script type="text/javascript" src="news/js/news.js"></script>
@stop

@section('title','Zikzak Coworking Space | Tin tức')

@section('description')
Zikzak Coworking Space Không gian làm việc chung Tin tức
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
			{{--<div class="news-left">--}}
				{{--<a href="{{ asset('news-detail/'.$first_news->news_slug) }}"><h4 class="zz-heading-1 grey">{{$first_news->news_name}}</h4></a>--}}
				{{--<p class="grey italic">--}}
					{{--{{ date_format($first_news->updated_at,"d")}} THÁNG {{date_format($first_news->updated_at,"m, Y") }}--}}
				{{--</p>--}}
				{{--<div class="grey">{{cut_string($first_news->news_summary,150)}}</div>--}}
				{{--<a href="{{ asset('news-detail/'.$first_news->news_slug) }}" class="see-more main-color underline italic">Xem thêm..</a>--}}
			{{--</div>--}}
			{{--<div class="news-right">--}}
				{{--<a href="{{ asset('news-detail/'.$first_news->news_slug) }}" class="news-img-big" style="background-image: url('news/image/{{$first_news->news_image}}')"></a>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="row margin-top-50">--}}
			{{--@foreach($news_list as $news)--}}
			{{--<div class="news-item col-12 col-md-6 col-lg-3">--}}
				{{--<p class="news-date">--}}
					{{--{{ date_format($news->updated_at,"d")}} THÁNG {{date_format($news->updated_at,"m, Y") }}--}}
				{{--</p>--}}
				{{--<a href="{{ asset('news-detail/'.$news->news_slug) }}" class="news-img-small" style="background-image: url('news/image/{{$news->news_image}}')"></a>--}}
				{{--<a href="{{ asset('news-detail/'.$news->news_slug) }}"><h6 class="news-title">{{$news->news_name}}</h6></a>--}}
				{{--<p>{{cut_string($news->news_summary,100)}}</p>--}}
				{{--<a href="{{ asset('news-detail/'.$news->news_slug) }}" class="see-more main-color underline italic">Xem thêm..</a>--}}
			{{--</div>--}}
			{{--@endforeach--}}
			{{--<div class="col-12 mt-4"> --}}
				{{--{{$news_list->links()}}--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--</section>--}}

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="news_head">
					<div class="news_head_left">
						<div class="news_head_left_title">
							{{$first_news->news_name}}
						</div>
						<div class="news_head_left_summary">
							{{cut_string($first_news->news_summary,350)}}
						</div>
						<div class="news_head_left_show">
							<a href="{{ asset('news-detail/'.$first_news->news_slug) }}">
								Chi tiết
							</a>
						</div>
					</div>
					<div class="news_head_right" style="background: url('news/image/{{$first_news->news_image}}') no-repeat center /cover">
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
		<div class="row">
			<div class="col-12">
				<div class="paginate_center">
					{!! $news_list->links('public.header-footer.paginate') !!}
				</div>
			</div>
		</div>
	</div>
</section>
@stop