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

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="news_head">
					<div class="news_head_left">
						<div class="news_head_left_title">
							<a href="{{ asset('news-detail/'.$first_news->news_slug) }}">
								{{$first_news->news_name}}
							</a>
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
					<a href="{{ asset('news-detail/'.$first_news->news_slug) }}" class="news_head_right" style="background: url('news/image/{{$first_news->news_image}}') no-repeat center /cover">
					</a>
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
								<a href="{{ asset('news-detail/'.$news->news_slug) }}">
									{{$news->news_name}}
								</a>
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