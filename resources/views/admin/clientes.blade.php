@extends('templates.administrador')

@section('content')

	<section class="content-header">
		<h1>
			Clientes
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
						<h3 class="box-title">Clientes</h3>
						<div class="pull-right box-tools">
							<div class="btn-group" data-toggle="tooltip" title="Nuevo Cliente">
								<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-nuevoCliente"><i class="fa fa-plus"></i></button>
							</div>
							<button class="btn btn-default btn-sm" data-toggle="tooltip" title="Eliminar cliente" id="eliminar-cliente" disabled><i class="fa fa-trash"></i></button>
							<button class="btn btn-default btn-sm" data-toggle="tooltip" title="Editar cliente" id="editar-cliente" disabled><i class="fa fa-pencil"></i></button>
						</div>
					</div>
					<div class="box-body no-padding">
						<table class="table table-hover" id="table-clientes">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Domicilio</th>
									<th>Teléfono</th>
									<th>Correo Electrónico</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<tr id="1">
									<td>Nombre</td>
									<td>Domicilio</td>
									<td>Teléfono</td>
									<td>Correo Electrónico</td>
									<td>Acciones</td>
								</tr>
								<tr id="2">
									<td>Nombre</td>
									<td>Domicilio</td>
									<td>Teléfono</td>
									<td>Correo Electrónico</td>
									<td>Acciones</td>
								</tr>
								<tr id="3">
									<td>Nombre</td>
									<td>Domicilio</td>
									<td>Teléfono</td>
									<td>Correo Electrónico</td>
									<td>Acciones</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal-nuevoCliente">
		<div class="modal-dialog">
			<form class="modal-content" id="form-nuevoCliente">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Registro de Cliente</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nombre completo" id="nombre" name="nombre">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Teléfono fijo" id="telefono" name="telefono">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Domicilio" id="domicilio" name="domicilio">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Celular" id="celular" name="celular">
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Correo Electrónico" id="correo" name="correo">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar Datos</button>
				</div>
			</form>
		</div>
	</div>

@stop