@extends('public.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="meeting/css/meeting.css">
    {{--<link rel="stylesheet" type="text/css" href="base/css/modal.css">--}}
    <link rel="stylesheet" type="text/css" href="experience/css/location.css">

@stop

@section('javascript')
    <script type="text/javascript" src="meeting/js/meeting.js"></script>
    @if( Session::has('success') )
        <script type="text/javascript" src="base/js/modal.js"></script>
    @endif
@stop

@section('title','Zikzak Coworking Space | Phòng họp - Meeting Room')

@section('description')
    Phòng họp chất lượng cao của Zikzak Coworking Space bao gồm các trang thiết bị hiện đại như: Tivi full HD 82inch, Apple Tivi. máy chiếu 3D, FlipChart ...
@stop

@section('main')


    <section class="zz-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="meet_header border_bot center">
                        Phòng họp & sự kiện
                    </div>
                    <div class="meet_title center">
                        {{ $content->name }}
                    </div>
                    <div class="meet_summary center">
                        {!! $content->content !!}
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="meeting-img meeting-img-big"
                                 style="background-image: url('meeting/image/{{ $meeting[0]->img1 }}')"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="meeting-img meeting-img-sm"
                                 style="background-image: url('meeting/image/{{ $meeting[0]->img2 }}')"></div>
                        </div>
                        <div class="col-4">
                            <div class="meeting-img meeting-img-sm"
                                 style="background-image: url('meeting/image/{{ $meeting[0]->img3 }}')"></div>
                        </div>
                        <div class="col-4">
                            <div class="meeting-img meeting-img-sm"
                                 style="background-image: url('meeting/image/{{ $meeting[0]->img4 }}')"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="meeting-text">
                        <h4 class="border_bot">
                            {{--Phòng “SEED” (4 -6 người)--}}
                            {{ $meeting[0]->name }}
                        </h4>
                        <div class="meeting-text-content">
                            {!! $meeting[0]->content !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="zz-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-8">
                            <div class="meeting-img meeting-img-tall"
                                 style="background-image: url('meeting/image/{{ $meeting[1]->img1 }}')"></div>
                        </div>
                        <div class="col-4">
                            <div class="meeting-img meeting-img-md"
                                 style="background-image: url('meeting/image/{{ $meeting[1]->img2 }}')"></div>
                            <div class="meeting-img meeting-img-md"
                                 style="background-image: url('meeting/image/{{ $meeting[1]->img3 }}')"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="meeting-text">
                        <h4 class="border_bot">{{ $meeting[1]->name }}</h4>
                        <div class="meeting-text-content">
                            {!! $meeting[1]->content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="zz-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-5">
                            <div class="meeting-img meeting-img-tall"
                                 style="background-image: url('meeting/image/{{ $meeting[2]->img1 }}')"></div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-7">
                            <div class="meeting-img meeting-img-tall"
                                 style="background-image: url('meeting/image/{{ $meeting[2]->img2 }}')"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="meeting-text">
                        <h4 class="border_bot">
                            {{ $meeting[2]->name }}
                        </h4>
                        <div class="meeting-text-content">
                            {!! $meeting[2]->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row meeting-form">
                <div class="col-sm-6 col-12">
                    <div class="exp_left">
                        <div class="exp_h2">
                            Our locations
                        </div>
                        @foreach( $location as $item)
                            <div class="exp_h3 border_bot right">
                                {{ $item->name }}
                            </div>
                            <div class="exp_content">
                                {!! $item->content !!}
                            </div>

                        @endforeach

                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="exp_right">
                        <div class="exp_h2">
                            Register
                        </div>
                        <form action="{{ asset('register') }}" method="post">
                            {{ csrf_field() }}
                            <div class="exp_input">
                                <input type="text" class="" name="name" placeholder="Name (required)" required>
                                {{--<input required="" type="radio" name="location" value="Nha Trang" checked class="d-none">--}}
                                {{--<input type="text" class="d-none" name="location" placeholder="Name (required)"  value="Không biết">--}}
                            </div>
                            <div class="exp_input">
                                <input type="text" class="" name="phone" placeholder="Phone Number (required)" required>
                            </div>
                            <div class="exp_input">
                                <input type="email" class="" name="email" placeholder="Email (required)" required>
                            </div>
                            <div class="exp_input">
                                <select name="service" id="">
                                    <option value="" disabled selected>Service (required)</option>
                                    <option value="Phòng “SEED”">Phòng “SEED”</option>
                                    <option value="Phòng “SERIES A”">Phòng “SERIES A”</option>
                                    <option value="Phòng “IPO”">Phòng “IPO”</option>
                                </select>

                            </div>
                            <div class="exp_input">
                                <select name="location" id="">
                                    <option value="" disabled selected>Location (required)</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Nha Trang">Nha Trang</option>
                                </select>

                            </div>
                            <div class="exp_button">
                                <input type="submit" class="" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="zz-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<div class="register-content">--}}
                        {{--<form method="post" action="{{ asset('register') }}">--}}
                            {{--<div class="register-control">--}}
                                {{--<label class="register-label white">Tên đầy đủ:</label>--}}
                                {{--<input required="" class="register-input" type="text" name="name">--}}
                            {{--</div>--}}
                            {{--<div class="register-control">--}}
                                {{--<label class="register-label white">Email:</label>--}}
                                {{--<input required="" class="register-input" type="email" name="email">--}}
                            {{--</div>--}}
                            {{--<div class="register-control">--}}
                                {{--<label class="register-label white">Số điện thoại:</label>--}}
                                {{--<input required="" class="register-input" type="text" name="phone">--}}
                            {{--</div>--}}
                            {{--<div class="register-control">--}}
                                {{--<label class="register-label white">--}}
                                    {{--Địa điểm:--}}
                                {{--</label>--}}
                                {{--<select class="register-select" name="location">--}}
                                    {{--<option value="Hồ Chí Minh">Hồ Chí Minh</option>--}}
                                    {{--<option value="Nha Trang">Nha Trang</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="register-btn-control">--}}
                                {{--<button class="zz-btn zz-btn-md zz-btn-red  white center register-btn">Đăng ký</button>--}}
                            {{--</div>--}}
                            {{--<input style="display: none;" type="text" name="service" value="Phòng họp">--}}
                            {{--{{csrf_field()}}--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    @include('public.modal')
@stop