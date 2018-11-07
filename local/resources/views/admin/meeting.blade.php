@extends('admin.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="../public/meeting/css/meeting.css">
    {{--<link rel="stylesheet" type="text/css" href="base/css/modal.css">--}}
    <link rel="stylesheet" type="text/css" href="experience/css/location.css">

@stop

@section('javascript')
    <script type="text/javascript" src="meeting/js/meeting.js"></script>
    <script>
        function changeImg(input){
            console.log(input);
            var inputFile = $(this);
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    // $('#avatar').attr('src',e.target.result);
                    $(input).next().attr('src',e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            // $('#avatar').click(function(){
            //     $(this).prev().click();
            // });
            $('.changeImg').click(function () {
                $(this).prev().click();
            });

            $('textarea').each(function(){
                CKEDITOR.replace( this,{
                    toolbar: [
                        ['Bold','Italic','Underline','NumberedList','BulletedList']
                    ],
                    height:'500px'
                });
            });
        });
    </script>
@stop

@section('title','Zikzak Coworking Space | Phòng họp - Meeting Room')

@section('description')
    Phòng họp chất lượng cao của Zikzak Coworking Space bao gồm các trang thiết bị hiện đại như: Tivi full HD 82inch, Apple Tivi. máy chiếu 3D, FlipChart ...
@stop

@section('main')


    <section class="zz-section">
        <div class="container">
            <form action="{{ asset('admin/meeting/edit/1') }}" method="post"   enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-12">

                            <div class="meeting-img meeting-img-big">
                                <input type="file" class="d-none" name="img1" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[0]->img1 }}" alt="" class="changeImg">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="meeting-img meeting-img-sm">
                                <input type="file" class="d-none" name="img2" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[0]->img2 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="meeting-img meeting-img-sm">
                                <input type="file" class="d-none" name="img3" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[0]->img3 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="meeting-img meeting-img-sm">
                                <input type="file" class="d-none" name="img4" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[0]->img4 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="meeting-text">
                        <h4 class="border_bot">
                            <input type="text" class="form-control" name="name" value="{{ $items[0]->name }}">
                        </h4>
                        <div class="meeting-text-content myCell">
                            <textarea name="content">
                                {!! $items[0]->content !!}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-success center mt-3">Save</button>


                    </div>
                </div>
            </div>
            </form>
            <form action="{{ asset('admin/meeting/edit/2') }}" method="post"   enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-8">
                            <div class="meeting-img meeting-img-tall">
                                <input type="file" class="d-none" name="img1" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[1]->img1 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="meeting-img meeting-img-md">
                                <input type="file" class="d-none" name="img2" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[1]->img2 }}" alt="" class="changeImg" height="100%">
                            </div>
                            <div class="meeting-img meeting-img-md">
                                <input type="file" class="d-none" name="img3" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[1]->img3 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="meeting-text">
                        <h4 class="border_bot">
                            <input type="text" class="form-control" name="name" value="{{ $items[1]->name }}">
                        </h4>
                        <div class="meeting-text-content">
                            <textarea name="content">
                                {!! $items[1]->content !!}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-success center mt-3">Save</button>
                    </div>
                </div>
            </div>
            </form>
            <form action="{{ asset('admin/meeting/edit/3') }}" method="post"   enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="meeting-img meeting-img-tall">
                                <input type="file" class="d-none" name="img1" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[2]->img1 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="meeting-img meeting-img-tall">
                                <input type="file" class="d-none" name="img2" onchange="changeImg(this)">
                                <img src="../public/meeting/image/{{ $items[2]->img2 }}" alt="" class="changeImg" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="meeting-text">
                        <h4 class="border_bot">
                            <input type="text" class="form-control" name="name" value="Phòng “IPO” (10 – 30 người)">
                        </h4>
                        <div class="meeting-text-content">
                            <textarea name="content">
                                {!! $items[2]->content !!}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-success center mt-3">Save</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>

    @include('public.modal')
@stop