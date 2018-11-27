@extends('admin.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="space/css/space.css">
@stop
@section('javascript')
    <script type="text/javascript" src="space/js/space.js"></script>
@stop
@section('main')
    <div class="container-fluid zz-section">
        <div class="row">
            <div class="col-12">
                <h1 class="zz-heading">Không gian ZikZak</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid zz-section">
        @foreach( $locations as $location)
        <div class="row">
            <div class="col-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $location->name }}</h3>
                    </div>
                    <div class="box-body">
                        <div class="image-container">
                            @foreach($location->images as $image)
                                <div class="image-item" style="background-image: url(../public/home/image/resized-{{$image->url}})"><a href="{{ asset('admin/image/delete/'.$image->id) }}">x</a></div>
                            @endforeach

                            <div class="image-item add-image"  style="background-image: url(base/image/add-icon.png)"></div>
                            <form method="post" enctype="multipart/form-data" action="{{ asset('admin/image/add') }}">
                                <input required="" style="display: none;" id="file" type="file" name="url" onchange="changeImg(this)">
                                <input required="" style="display: none;" type="text" name="location_id" value="{{ $location->id }}">
                                <button type="submit" class="btn btn-primary" id="button">Save</button>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop