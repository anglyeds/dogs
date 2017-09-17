<div class="linkbutton" style="padding-bottom:20px">
	@foreach($items as $item)
		@php
			$route = explode('/',$item->url)[1];
		@endphp

		<span>| </span><a href="{{route($route)}}">{{ $item->title }}</a>
	@endforeach
	<span> | &copy; Hollywoof Talent Agency Ltd. All rights reserved 2017</span>
</div>

