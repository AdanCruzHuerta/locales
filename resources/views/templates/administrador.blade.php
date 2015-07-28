<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Locales | Administrador</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/iCheck-blue.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/select.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/dialog.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/fileinput.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/fullcalendar.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/fullcalendar.print.css" media='print'>
		<link rel="stylesheet" type="text/css" href="/css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/LTE.min.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/skin-black.css">
		<link rel="stylesheet" type="text/css" href="/css/admin/admin.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-black sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<a href="#" class="logo">
					<span class="logo-mini"><b>S</b>L</span>
					<span class="logo-lg"><b>Sistema</b> Local</span>
				</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning">10</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 10 notifications</li>
									<li>
										<ul class="menu">
											<li>
												<a href="#">
													<i class="fa fa-users text-aqua"></i> 5 new members joined today
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-users text-red"></i> 5 new members joined
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-shopping-cart text-green"></i> 25 sales made
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-red"></i> You changed your username
												</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#">View all</a></li>
								</ul>
							</li>
							<li>
								<a href="/logout"><i class="fa fa-sign-out"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			@inject('empresa','App\Http\Controllers\LocalController')
			<aside class="main-sidebar">
				<section class="sidebar">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="http://placehold.it/45x45" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p>
								Bienvenido
							</p>
							<small>{{$empresa->nameEmpresa()->razon_social}}</small>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="header">Menú Principal</li>
						<li>
							<a href="/admin">
								<i class="fa fa-desktop"></i> <span>Estadísticas</span>
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-desktop"></i> <span>Datos del local</span> <i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="/admin/local/administracion"><i class="fa fa-circle-o"></i> Datos administrativos</a></li>
								<li><a href="/admin/local/ubicacion"><i class="fa fa-circle-o"></i> Ubicación</a></li>
								<li><a href="/admin/local/caracteristicas"><i class="fa fa-circle-o"></i> Características</a></li>
								<li><a href="/admin/local/galeria"><i class="fa fa-circle-o"></i> Galería</a></li>
							</ul>
						</li>
						<li>
							<a href="/admin/clientes">
								<i class="fa fa-desktop"></i> <span>Clientes</span>
							</a>
						</li>
						<li>
							<a href="/admin/proveedores">
								<i class="fa fa-desktop"></i> <span>Proveedores</span>
							</a>
						</li>
						<li>
							<a href="/admin/paquetes">
								<i class="fa fa-desktop"></i> <span>Paquetes</span>
							</a>
						</li>
						<li>
							<a href="/admin/calendario">
								<i class="fa fa-desktop"></i> <span>Calendario</span>
							</a>
						</li>
						<li>
							<a href="admin/pagina">
								<i class="fa fa-desktop"></i> <span>Mi Contabilidad</span>
							</a>
						</li>
						<li>
							<a href="admin/pagina">
								<i class="fa fa-desktop"></i> <span>Mis Solicitudes</span>
							</a>
						</li>
						<!-- <li class="header">LABELS</li>
						<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
						<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
						<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
					</ul>
				</section>
			</aside>
			<div class="content-wrapper">
				@yield('content')
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Versión</b> 1.0
				</div>
				<strong>Desarrollado por <a href="http://sharksoft.com.mx">SharkSoft</a>.</strong>
			</footer>
			<aside class="control-sidebar control-sidebar-dark">

			</aside>
			<div class='control-sidebar-bg'></div>
		</div>
	</body>
	<script type="text/javascript" src="/js/admin/jquery.min.js"></script>
	<script type="text/javascript" src="/js/admin/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/admin/LTE.min.js"></script>
	<script type="text/javascript" src="/js/pace.js"></script>
	<script type="text/javascript" src="/js/admin/icheck.min.js"></script>
	<script type="text/javascript" src="/js/notify.min.js"></script>
	<script type="text/javascript" src="/js/admin/slimscroll.min.js"></script>
	<script type="text/javascript" src="/js/validate.js"></script>
	<script type="text/javascript" src="/js/admin/select.min.js"></script>
	<script type="text/javascript" src="/js/admin/dialog.min.js"></script>
	<script type="text/javascript" src="/js/admin/admin.js"></script>
</html>