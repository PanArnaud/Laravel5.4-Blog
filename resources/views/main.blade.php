<!DOCTYPE HTML>
<html>
	@include('partials._head')
	<body>

		<!-- Wrapper -->
		<div id="wrapper">
			<div id="main">
				<div class="inner">
					@include('partials._header')
					@include('partials._messages')
					@yield('content')
				</div>
			</div>

			<div id="sidebar">
				<div class="inner">
					@include('partials._menu')
					@include('partials._random')
					@include('partials._footer')
				</div>
			</div>
		</div>

		<!-- Scripts -->
		@include('partials._javascript')
	</body>
</html>
