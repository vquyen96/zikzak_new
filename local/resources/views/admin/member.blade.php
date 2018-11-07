@extends('admin.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="service/css/service.css">
@stop
@section('javascript')
    <script type="text/javascript" src="service/js/service.js"></script>
    <script type="text/javascript" src="banner/js/banner.js"></script>

@stop
@section('main')
    <div class="container-fluid zz-section">
        <div class="row">
            <div class="col-12">
                <div class="box box-primary box-950">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thành viên</h3>
                    </div>
                    <div class="box-body">
                        <div class="myTable">
                            <div class="myRow">
                                <div class="myCell">Ảnh</div>
                                <div class="myCell">Tên</div>
                                <div class="myCell">Tóm tắt</div>
                                <div class="myCell">
                                    <a href="{{ asset('admin/member/add') }}" class="btn btn-outline-success">Thêm mới</a>
                                </div>
                            </div>
                            @foreach($items as $item)
                                <form class="myRow" method="post" action="{{ asset('admin/member/edit/'.$item->id) }}"  enctype="multipart/form-data">
                                    <div class="myCell">
                                        <input type="file" class="file" name="img" style="display: none" onchange="changeImg(this)">
                                        <img class="add-image" src="../public/member/image/{{$item->img}}" width="200pximg">
                                    </div>
                                    <div class="myCell">
                                        {{--<input type="text" name="name" class="form-control" value="{{ $item->name }}">--}}
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" name="ceo" aria-label="Checkbox for following text input" {{ $item->ceo == 1 ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                                        </div>
                                    </div>
                                    <div class="myCell">
                                        <textarea name="content">{!! $item->content !!}</textarea>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="myCell">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="{{ asset('admin/member/delete/'.$item->id) }}" class="btn btn-outline-danger">Xóa</a>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

{{--@section('javascript')--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$('.add-image').click(function(){--}}
                {{--$(this).prev('.file').click();--}}
            {{--});--}}

            {{--$('.append-btn').click(function(){--}}
                {{--$(this).hide();--}}
                {{--$('.banner-appended').show();--}}
                {{--$(window).scrollTop($(window).scrollTop() + 465);--}}
            {{--});--}}
        {{--});--}}
        {{--function changeImg(input){--}}
            {{--//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới--}}
            {{--if(input.files && input.files[0]){--}}
                {{--var reader = new FileReader();--}}
                {{--//Sự kiện file đã được load vào website--}}
                {{--reader.onload = function(e){--}}
                    {{--//Thay đổi đường dẫn ảnh--}}
                    {{--$(input).next('.add-image').attr('src',e.target.result);--}}
                {{--}--}}
                {{--reader.readAsDataURL(input.files[0]);--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}

{{--@stop--}}