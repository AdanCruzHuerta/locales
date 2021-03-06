@extends('templates.administrador')

@section('content')
	<section class="content-header">
		<h1>
		Datos del local
		<small>Administrativos</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-desktop"></i> Home</a></li>
			<li class="active">Local</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="box-group">
					<div class="panel box box-default">
						<div class="box-header">
							<h4 class="box-title">
								<a href="#acceso" data-toggle="collapse" class="collapsed">Datos de acceso</a>
							</h4>
						</div>
						<div class="panel-collapse collapse" id="acceso">
							{!! Form::open(['url'=>'/admin/local/administracion-accessos','class'=>'box-body','id'=>'form-acceso']) !!}
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Correo *" name="correo" id="correo" value="{{$data->correo}}">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Contraseña *" name="password" id="password">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Comprobar contraseña *" name="confPass" id="confPass">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
									<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-primary pull-right">Guardar Cambios</button>
								</div>
								<div class="clearfix"></div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Datos de Facturación y Contacto</h3>
					</div>
					<form class="box-body" id="form-daros">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre completo *" name="nombre_completo" id="nombre_completo" value="{{$data->nombre_completo}}">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre local *" name="nombre_local" id="nombre_local" value="{{$data->nombre_local}}">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Razón social *" name="razon_social" id="razon_social" value="{{$data->razon_social}}">
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="persona_fisica">
												<input type="radio" name="estatus_fiscal" id="persona_fisica" @if($data->estatus_fiscal == 1){{ 'checked' }}@endif>
												Persona Fisica *
											</label>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="persona_moral">
												<input type="radio" name="estatus_fiscal" id="persona_moral" @if($data->estatus_fiscal == 2){{ 'checked' }}@endif>
												Persona Moral *
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="RFC *" name="rfc" id="rfc" value="{{$data->rfc}}">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Sitio web" name="sitio_web" id="sitio_web" value="{{$data->sitio_web}}">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook" value="{{$data->facebook}}">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" value="{{$data->instagram}}">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Whatsapp" name="whatsapp" id="whatsapp" value="{{$data->whatsapp}}">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary pull-right">Guardar Cambios</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</section>

@stop