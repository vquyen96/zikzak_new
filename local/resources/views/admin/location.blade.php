@extends('admin.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="service/css/service.css">
@stop
@section('javascript')
    <script type="text/javascript" src="service/js/service.js"></script>
@stop
@section('main')
    <div class="container-fluid zz-section">
        <div class="row">
            <div class="col-12">
                <div class="box box-primary box-950">
                    <div class="box-header with-border">
                        <h3 class="box-title">Vị trí văn phòng</h3>
                    </div>
                    <div class="box-body">
                        <div class="myTable">
                            <div class="myRow">
                                <div class="myCell">Thứ tự</div>
                                <div class="myCell">Tên</div>
                                <div class="myCell">Vị trí</div>
                                <div class="myCell">
                                    <a href="{{ asset('admin/location/add') }}" class="btn btn-outline-success">Thêm mới</a>
                                </div>
                            </div>
                            @foreach($items as $item)
                                <form class="myRow" method="post" action="{{ asset('admin/location/edit/'.$item->id) }}">
                                    <div class="myCell">
                                        <input type="number" name="order" class="form-control" value="{{ $item->order }}">
                                    </div>
                                    <div class="myCell align-middle">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" >Tên</span>
                                            </div>
                                            <input type="text" name="name" class="form-control"  aria-describedby="basic-addon3" value="{{ $item->name }}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" >Tel</span>
                                            </div>
                                            <input type="text" name="tel" class="form-control"  aria-describedby="basic-addon3" value="{{ $item->tel }}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" >Email</span>
                                            </div>
                                            <input type="text" name="email" class="form-control"  aria-describedby="basic-addon3" value="{{ $item->email }}">
                                        </div>
                                        {{--<input type="text" name="name" class="form-control" value="{{ $item->name }}">--}}
                                    </div>
                                    <div class="myCell">
                                        <textarea name="content">{!! $item->content !!}</textarea>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="myCell">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="{{ asset('admin/location/delete/'.$item->id) }}" class="btn btn-outline-danger">Xóa</a>
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