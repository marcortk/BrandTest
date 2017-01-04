<!DOCTYPE html>
<html>
	<head>
		<meta chasrset="UTF-8">
		<title>@yield('title')</title>
		
		
		<script src="{{asset('plugins/jquery/js/jquery-1.9.1.js')}}"></script>
		<script src="{{ asset('plugins/semantic/semantic.js') }}"></script>
		<script src="{{ asset('js/backend.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('plugins/semantic/semantic.css') }}">
	</head>
	<body>
		
		@include('backend.layouts.sidebar')
		<div class="ui basic icon top fixed menu">
			<div id="menu_toggle" class="item">
				<i class="sidebar icon"></i>
				Menu
			</div>
		</div>
		<div class="pusher" style="padding-top: 50px">
			<div class="ui container">
				@yield('content')
			</div>
		</div>
		@yield('extra_scripts')
	</body>
</html>