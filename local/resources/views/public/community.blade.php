@extends('public.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="community/css/community.css">
@stop

@section('javascript')
    <script type="text/javascript" src="community/js/community.js"></script>
@stop

@section('title','Zikzak Coworking Space | Không gian làm việc chung')

@section('description')
    Zikzak Coworking Space Không gian làm việc chung
@stop

@section('main')


    <section>
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="community-header border_bot center">
                        Community
                    </div>
                    <div class="community_title">
                        {{ $content1->name }}
                    </div>
                    <div class="community-text">
                        {!! $content1->content !!}

                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center community_ceo">
                <div class="col-12 center">
                    <div class="community-avatar">
                        <img src="{{ '../public/member/image/resized-'.$ceo->img }}" alt="">
                    </div>
                    <h6 class="community-name center">{{ $ceo->name }}</h6>
                    <div class="community-summary center">{!! $ceo->content !!}</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="community_title">
                        {{ $content2->name }}
                    </div>
                    <div class="community-text">
                        {!! $content2->content !!}

                    </div>
                </div>
                @foreach( $member as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="mentor-item">
                        <figure class="mentor-avatar" style="background-image:url('member/image/resized-{{ $item->img }}');"></figure>
                        <div class="community-name">{{ $item->name }}</div>
                        <div class="community-summary">{!! $item->content !!}</div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>


    </section>
@stop