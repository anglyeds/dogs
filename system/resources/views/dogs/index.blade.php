@extends('layouts.app')

@section('css')

<link href="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.css') }}" rel="stylesheet">

<style type="text/css">

#click {
	text-align: left;
    color: #996600;
    font-size: 10px;
}

#sidebar-heading{
	padding: 0 0 5px 0;
	color: #6B5344;
	font-weight: normal;
	position: relative;
	text-shadow: 0 2px 0 rgba(255,255,255,0.5);
	font-size: 36px;
	line-height: 40px;
	font-family: 'Carrois Gothic', sans-serif;
}

#filter-list{
	display:none;
}

.items{
	border:1px solid;
	padding:3px 10px 3px 10px;
	text-shadow: 0 2px 0 rgba(255,255,255,0.5);
	font-family: 'Carrois Gothic', sans-serif;
}

.img-box{

}


</style>

@endsection

@section('content')
<div class="body-content row">
	<div class="col-md-2 text-left">
		<h1 id="sidebar-heading">Dogs</h1>
		<h5 id="click">Find dogs by name</h5>
		<div id="filter-list" style="max-height: 500px;overflow-y:scroll">

			<div class="item-list">
			@foreach($dog as $value)			
					<a class="item-red" href="{{ URL::to('/dogs/profile/'.$value->id) }}"><div class="items">{{ $value->name }}</div></a>			
			@endforeach	

			</div>		
		</div>
	</div>

	<div class="col-md-10" style="max-width:720px;max-height: 500px;overflow-y:scroll">
	@if(count($dog))
		@foreach($dog as $key => $value)
		<div class="img-box" style="float:left">
			<a href="{{ URL::to('/dogs/profile/'.$value->id) }}" >
				<img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}">
			</a>
			<p style="text-align:center">{{$value->name}}</p>
		</div>
		@endforeach
	@else
		<p>No Animals </p>
	@endif
		<!-- 		@foreach($dog as $key => $value)
		<div class="img-box">
			<a href="{{ URL::to('/dogs/profile/'.$value->id) }}" >
				<img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}">
			</a>
		</div>
		@endforeach
				@foreach($dog as $key => $value)
		<div class="img-box">
			<a href="{{ URL::to('/dogs/profile/'.$value->id) }}" >
				<img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}">
			</a>
		</div>
		@endforeach
				@foreach($dog as $key => $value)
		<div class="img-box">
			<a href="{{ URL::to('/dogs/profile/'.$value->id) }}" >
				<img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}">
			</a>
		</div>
		@endforeach -->
	</div>

</div>
@endsection

@section('js')

	<script type="text/javascript">
		$(function(){
			$("#click").click(function(){
				if($(this).next('#filter-list').is(':visible') === true){
					$(this).next('#filter-list').slideUp("slow",function(){

					});
				} else {
					$(this).next('#filter-list').slideDown("slow",function(){

					});
				}
		/*		$('#filter-list').slideDown("slow", function(){

				})*/
			})
			
		})
	</script>

@endsection