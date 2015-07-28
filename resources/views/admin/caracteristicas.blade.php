@extends('templates.administrador')

@section('content')
	<section class="content-header">
		<h1>
			Datos del local
			<small>Caracteristicas</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-desktop"></i> Home</a></li>
			<li class="active">Local</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Tipo de local</h3>
					</div>
					<div class="box-body">
						@foreach($data['tipos_local'] as $tipo_local)
							<div class="form-group">
								<label>
									<input type="radio" name="tipo" id="campestre" value="{{ $tipo_local->id }}">
									{{ $tipo_local->nombre }}
								</label>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Capacidad del local</h3>
					</div>
					<div class="box-body">
						<div class="row">
							@foreach($data['capacidades_local'] as $capacidad_local)
								<div class="col-xs-12 col-sm-4 col-md-4">
									<div class="form-group">
										<label>
											<input type="radio" name="capacidad" id="{{ $capacidad_local->capacidad }}">
											{{ $capacidad_local->capacidad.' Personas o menos' }}
										</label>
									</div>
								</div>
							@endforeach
								<div class="col-xs-12 col-sm-4 col-md-4">
									<div class="form-group">
										<label>
											<input type="radio" name="capacidad" id="501">
											500 Personas o mas
										</label>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Tipos de eventos permitidos en el local</h3>
					</div>
					<div class="box-body">
						<div class="row">
							@foreach($data['tipos_evento'] as $tipo_evento)
								<div class="col-xs-12 col-sm-4 col-md-3">
									<div class="form-group">
										<label for="infantil">
											<input type="checkbox" name="{{$tipo_evento->nombre}}" id="{{$tipo_evento->nombre}}">
											{{$tipo_evento->nombre}}
										</label>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Caracterisricas del local</h3>
					</div>
					<div class="box-body">
						<div class="row">
							@foreach($data['caracteristicas_local'] as $caracteristica_local)
								<div class="col-xs-12 col-sm-3 col-md-3">
									<div class="form-group">
										<label>
											<input type="checkbox" name="{{ $caracteristica_local->nombre }}" id="{{ $caracteristica_local->nombre }}">
											{{ $caracteristica_local->nombre }}
										</label>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Servicios extras</h3>
					</div>
					<div class="box-body">
						<div class="row">
						@foreach($data['servicios_extra'] as $servicio_extra)
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="form-group">
									<label>
										<input type="checkbox" name="{{ $servicio_extra->nombre }}" id="{{ $servicio_extra->nombre }}">
										{{ $servicio_extra->nombre }}
									</label>
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-primary pull-right">Guardar Datos</button>
		</div>
		<div class="clearfix"></div>
	</section>

@stop