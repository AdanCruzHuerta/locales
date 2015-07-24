@extends('templates.administrador')

@section('content')

	<section class="content-header">
		<h1>
			Paquetes
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
						<h3 class="box-title">Paquetes</h3>
						<div class="pull-right box-tools">
							<a href="/admin/paquetes/create" class="btn btn-default btn-sm" data-toggle="tooltip" title="Nuevo Paquete"><i class="fa fa-plus"></i></a>
						</div>
					</div>
					<div class="box-body no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>N°</th>
									<th>Nombre</th>
									<th>Fecha Inicial</th>
									<th>Fecha Final</th>
									<th>Costo</th>
									<th>Estado</th>
									<th>Estatus</th>
									<th>Acciones</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

@stop