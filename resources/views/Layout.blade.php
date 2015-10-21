<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel</title>

	<!-- Latest compiled and minified CSS
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

	{!! HTML::style('/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! HTML::style('/bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
	{!! HTML::style('/bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}

	<!-- Optional theme -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->

	<!-- Latest compiled and minified JavaScript

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	-->
</head>
<body>
	<div class="container">
		<br>
		@yield('contenido')
	</div>


	{!! HTML::script('/bower_components/jquery/dist/jquery.min.js') !!}
	{!! HTML::script('/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
	{!! HTML::script('/bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	{!! HTML::script('/bower_components/bootstrap-material-design/dist/js/material.min.js') !!}
	<script>
		$(document).on('ready',function(){
			$.material.init();
		});
	</script>
</body>
</html>