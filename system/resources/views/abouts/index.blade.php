@extends('layouts.app')

@section('css')

<style type="text/css">

.content-title{
	margin: 1em 0 0.75em;
	padding: 0 0 5px 0;
	color: #6B5344;
	font-weight: normal;
	position: relative;
	text-shadow: 0 2px 0 rgba(255,255,255,0.5);
	font-size: 36px;
	line-height: 40px;
	font-family: 'Carrois Gothic', sans-serif;
}

.content-desc{
	letter-spacing: 1px;
	word-spacing: 1px

}
	
</style>

@endsection

@section('content')

	<div class="row">
			
		<div class="col-md-12">			
			<div class="col-md-8">
			<h1 class="text-left content-title">{!! $post[0]->title !!}</h1>
			<div class="content-desc text-justify">
				{!! $post[0]->body !!}
			</div>
			</div>
			<div class="col-md-4">
			<img src="{!! URL::asset('/storage/'. $post[0]->image) !!}" class="img-responsive img-thumbnail" style="width: 200px; height:350;margin:auto;">
			</div>	
		</div>
	</div>

@endsection

@section('js')

@endsection