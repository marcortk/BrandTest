<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="UTF-8">
		<title>@yield('title')</title>
		<!--<link rel="stylesheet" href="{ asset('plugins/bootstrap/css/bootstrap.css') }}"> -->
		<link rel="stylesheet" href="{{ asset('plugins/semantic/semantic.css') }}">
		<script src="{{asset('plugins/jquery/js/jquery-1.9.1.js')}}"></script>
		<script src="{{ asset('plugins/semantic/semantic.js') }}"></script>
		<script src="{{ asset('js/input-tags/select2.full.js') }}"></script>
		<script src="{{ asset('js/input-tags/select2.css') }}"></script>
	</head>
	<body>
		<div id="content_wrapper">

			@foreach($categories as $category)
				<a href={{ route('category', $category) }}>{{ $category->name }}</a>
			@endforeach
		<button class="ui secondary button">
		  Okay
		</button>
			@yield('content')
		</div>
	</body>
</html>