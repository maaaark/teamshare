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
	</head>
    <body>

		<div class="header navbar navbar-inverse ">
			@include('top')
		</div>
		<div class="page-container row-fluid">
			<div class="container">
				@if(Session::has('message'))
					<p class="alert">{{ Session::get('message') }}</p>
				@endif
			</div>
			@yield('content')
			        <h1>Teamshare</h1>
			@include('sidebar')
			@include('empty')
		</div>
    
	@include('chat')   
		
	{{ HTML::script('plugins/jquery-1.8.3.min.js') }}
	{{ HTML::script('plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}
	{{ HTML::script('plugins/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('plugins/breakpoints.js') }}
	{{ HTML::script('plugins/jquery-unveil/jquery.unveil.min.js') }}
	{{ HTML::script('plugins/jquery-slider/jquery.sidr.min.js') }}
	{{ HTML::script('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
	{{ HTML::script('plugins/pace/pace.min.js') }}
	{{ HTML::script('plugins/jquery-numberAnimate/jquery.animateNumbers.js') }}
	{{ HTML::script('js/core.js') }}
	{{ HTML::script('js/demo.js') }}	
    </body>
</html>