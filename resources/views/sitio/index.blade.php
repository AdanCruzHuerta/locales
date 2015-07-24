@extends('templates.sitio')

@section('content')
	<section class="portada">
		<div class="container">
			<div class="row">	
				{{-- Notifica si hay un error de autenticación --}}		
				@include('sitio.resources.messages.failLogin')
				
				<div class="col-xs-12 col-sm-6 col-md-7">
					<div class="info-content">
						<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nobis vero ullam quae. Repellendus dolores quis tenetur enim distinctio, optio vero, cupiditate commodi eligendi similique laboriosam maxime corporis quasi labore!</p>
						<div class="form-group">
							<a href="/register" class="btn btn-lg btn-primary">Regístrate gratis</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-5">
					<div class="login-content">
						{!! Form::open(['url' => '/login', 'class' => 'well']) !!}
							<h4>Acceso Empresas</h4>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Correo electrónico" name="correo" value="{{ old('correo') }}">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
							<div class="form-group">
								<a href="">¿Olvidaste tu contraseña?</a>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-block btn-primary">Acceder</button>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
@stop