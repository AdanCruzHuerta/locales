@extends('templates.administrador')

@section('content')

	<section class="content-header">
		<h1>
			Proveedores
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
						<h3 class="box-title">Proveedores</h3>
						<div class="pull-right box-tools">
							<div class="btn-group" data-toggle="tooltip" title="Nuevo Proveedor">
								<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-nuevoProveedor"><i class="fa fa-plus"></i></button>
							</div>
						</div>
					</div>
					<div class="box-body no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Domicilio</th>
									<th>Teléfono</th>
									<th>Correo Electrónico</th>
									<th>Acciones</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal-nuevoProveedor">
		<div class="modal-dialog">
			<form class="modal-content" id="form-nuevoProveedor">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Registro de Proveedor</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nombre completo">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Teléfono fijo">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Correo Electrónico">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Domicilio">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Celular">
							</div>
							<div class="form-group">
								<select name="" id="" class="form-control selectpicker">
									<option value="">Categoría</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary">Guardar Datos</button>
				</div>
			</form>
		</div>
	</div>

@stop