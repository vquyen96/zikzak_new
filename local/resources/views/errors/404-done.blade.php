@extends('public.master')

@section('css')
<link rel="stylesheet" type="text/css" href="base/css/404.css">
@stop

@section('main')
<section id="page404">
	<a class="btn-404" href="{{ URL::previous() }}">Go back</a>
</section>
@stop