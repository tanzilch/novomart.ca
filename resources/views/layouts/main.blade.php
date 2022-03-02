<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('include.styles')
</head>
<body class="app sidebar-mini ltr light-mode">
	<div class="page">
		<div class="page-main">
		@include('include.header')

		@include('include.sidebar')

		<div class="main-content app-content mt-0">
                <div class="side-app">
				@yield('content')
			</div>
		</div>

		</div>
		@include('include.footer')
	</div>
	@include('include.scripts')
	@yield('customJs')
</body>
</html>