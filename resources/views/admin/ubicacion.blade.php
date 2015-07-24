@extends('templates.administrador')

@section('content')

	<section class="content-header">
		<h1>
		Datos del local
		<small>Ubicación</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-desktop"></i> Home</a></li>
			<li class="active">Local</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Ubicación del local</h3>
					</div>
					<form class="box-body" id="form-ubicacion">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<select name="estado_id" id="estado_id" class="form-control">
										<option value="">Estado *</option>
									</select>
								</div>
								<div class="form-group">
									<select name="municipio_id" id="municipio_id" class="form-control">
										<option value="">Municipio *</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Colonia *" name="colonia" id="colonia">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Codigo Postal *" name="codigo_postal" id="codigo_postal">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Domicilio *" name="domicilio" id="domicilio">
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="No interior *" name="numero_int" id="numero_int">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="No exterior" name="numero_ext" id="numero_ext">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-8">
								<div class="form-group">
									<textarea name="referencia" id="referencia" cols="30" rows="5" class="form-control" placeholder="Referencia del local"></textarea>
								</div>
								<div class="form-group">
									<textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" placeholder="Descripción"></textarea>
								</div>
							</div>
						</div>
						<div class="box-group">
							<div class="panel box box-primary">
								<div class="box-header">
									<h4 class="box-title">
										<a href="#mapa" data-toggle="collapse" class="collapsed">Mapa</a>
									</h4>
								</div>
								<div class="panel-collapse collapse" id="mapa">
									<div class="box-body">
										Mapa
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary pull-right">Guardar Datos</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</section>

@stop