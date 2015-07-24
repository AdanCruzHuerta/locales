@extends('templates.administrador')

@section('content')

	<section class="content-header">
		<h1>Calendario</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-desktop"></i> Home</a></li>
			<li class="active">Local</li>
		</ol>
	</section>
	<section class="content" id="calendario">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="box box-default">
					<div class="box-header">
						<h4 class="box-title">
							Nuevo evento
						</h4>
					</div>
					<div class="box-body">
						<div class="form-group">
							<select id="cliente_evento" class="form-control selectpicker">
								<option value="">Cliente</option>
								<option value="Jonathan Ramos">Yop</option>
							</select>
						</div>
						<div class="form-group">
							<select id="tipo_evento" class="form-control selectpicker">
								<option value="">Tipo de evento</option>
								<option value="Infantil">Nose</option>
							</select>
						</div>
						<div class="form-group">
							<select id="paquete_evento" class="form-control selectpicker">
								<option value="">Paquete</option>
								<option value="Todo incluido">Full</option>
							</select>
						</div>
						<div class="form-group">
							<select id="estatus_evento" class="form-control selectpicker">
								<option value="">Estatus</option>
								<option value="label-danger" data-content="<span class='label-danger'>&nbsp;&nbsp;</span> Reservado y pagado"></option>
								<option value="label-warning" data-content="<span class='label-warning'>&nbsp;&nbsp;</span> Reservado con anticipo"></option>
								<option value="label-success" data-content="<span class='label-success'>&nbsp;&nbsp;</span> Reservado"></option>
							</select>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary btn-block" id="agregar_evento">Crear evento</button>
						</div>
					</div>
				</div>
				<div class="box box-default">
					<div class="box-header">
						<h4 class="box-title">
							Eventos
						</h4>
					</div>
					<div class="box-body">
						<ul class="list-unstyled" id="external-events"></ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="box box-default">
					<div class="box-body no-padding" style="min-height:600px;">
						<div id="calendar"></div>
					</div>
					<div class="overlay" style="min-height:600px;">
						<i class="fa fa-refresh fa-spin"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

@stop