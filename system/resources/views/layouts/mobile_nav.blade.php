<style>

.list_menu{
	padding:10px;
	text-transform: uppercase;
}

</style>
<ul style="padding-top: 0;list-style:none;">
@foreach($items as $item)
	@php
		$route = explode('/',$item->url)[1];
	@endphp
	<li class="list_menu"><a  href="{{route($route)}}">{{ $item->title }}</a></li>
@endforeach
</ul>

