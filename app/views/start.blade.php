<html>
	<head>
		<title>Teamshare</title>
		{{ HTML::style('plugins/pace/pace-theme-flash.css') }}
		{{ HTML::style('plugins/jquery-slider/css/jquery.sidr.light.css') }}
		{{ HTML::style('plugins/bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('plugins/bootstrap/css/bootstrap-responsive.min.css') }}
		{{ HTML::style('plugins/font-awesome/css/font-awesome.css') }}
		{{ HTML::style('css/animate.min.css') }}
		{{ HTML::style('css/custom-icon-set.css') }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/responsive.css') }}
		{{ HTML::style('css/custom.css') }}
	</head>
    <body>
		<div id="login">

				@if(Session::has('message'))
					<p class="alert">{{ Session::get('message') }}</p>
				@endif

			{{ $content }}
		</div>
	</body>
</html>