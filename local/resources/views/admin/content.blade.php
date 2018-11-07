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
                        <h3 class="box-title">Nội dung trang</h3>
                    </div>
                    <div class="box-body">
                        <div class="myTable">
                            <div class="myRow">
                                <div class="myCell">Tên</div>
                                <div class="myCell">Nội dung</div>
                                <div class="myCell">
                                    {{--<a href="{{ asset('admin/content/add') }}" class="btn btn-outline-success">Thêm mới</a>--}}
                                </div>
                            </div>
                            @foreach($items as $item)
                                <form class="myRow" method="post" action="{{ asset('admin/content/edit/'.$item->id) }}"  enctype="multipart/form-data">

                                    <div class="myCell">
                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                                        {{--<div class="input-group mb-3">--}}
                                            {{--<div class="input-group-prepend">--}}
                                                {{--<div class="input-group-text">--}}
                                                    {{--<input type="checkbox" name="ceo" aria-label="Checkbox for following text input" {{ $item->ceo == 1 ? 'checked' : '' }}>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<input type="text" class="form-control" name="name" value="{{ $item->name }}">--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="myCell">
                                        <textarea name="content">{!! $item->content !!}</textarea>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="myCell">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        {{--<a href="{{ asset('admin/content/delete/'.$item->id) }}" class="btn btn-outline-danger">Xóa</a>--}}
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

