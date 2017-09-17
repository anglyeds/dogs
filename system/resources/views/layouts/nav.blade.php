

<ul id = "MenuBar1" class="MenuBarHorizontal">
@foreach($items as $item)
	@php
		$route = explode('/',$item->url)[1];
	@endphp
	<li><span>| </span><a href="{{route($route)}}">{{ $item->title }}</a></li>
@endforeach
<span> |</span>
</ul>

