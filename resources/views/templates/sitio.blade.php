<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Locales | Iniciar sesión</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		{!! Html::style('css/bootstrap.min.css') !!}
		{!! Html::style('css/bootflat.min.css') !!}
		{!! Html::style('css/font-awesome.min.css') !!}
		{!! Html::style('css/animate.min.css') !!}
		{!! Html::style('css/hover.min.css') !!}
		{!! Html::style('css/home/home.css') !!}
	
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation" id="navbar-header">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img class="img-responsive" src="img/logo-negro.png" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class=""><a href="#section-servicios" data-name="section-servicios">Opción</a></li>
						<li class=""><a href="#section-paquetes" data-name="section-paquetes">Opción</a></li>
						<li class=""><a href="#section-clientes" data-name="section-clientes">Opción</a></li>
						<li class=""><a href="#section-contacto" data-name="section-contacto">Opción</a></li>
					</ul>
				</div>
			</div>
		</nav>

		{!! Html::script('js/jquery.min.js') !!}
		{!! Html::script('js/bootstrap.min.js') !!}
		{!! Html::script('js/notify.min.js') !!}
		{!! Html::script('js/pace.js') !!}
		{!! Html::script('js/validate.js') !!}
		{!! Html::script('js/home/home.js') !!}
		
		@yield('content')
	
	</body>
</html>