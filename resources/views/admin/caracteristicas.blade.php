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
						<div class="form-group">
							<label for="campestre">
								<input type="radio" name="tipo" id="campestre" checked>
								Campestre
							</label>
						</div>
						<div class="form-group">
							<label for="urbano">
								<input type="radio" name="tipo" id="urbano">
								Urbano
							</label>
						</div>
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
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="form-group">
									<label for="50p">
										<input type="radio" name="capacidad" id="50p" checked>
										50 Personas o menos
									</label>
								</div>
								<div class="form-group">
									<label for="100p">
										<input type="radio" name="capacidad" id="100p">
										100 Personas o menos
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="form-group">
									<label for="250p">
										<input type="radio" name="capacidad" id="250p">
										250 Personas o menos
									</label>
								</div>
								<div class="form-group">
									<label for="350p">
										<input type="radio" name="capacidad" id="350p">
										350 Personas o menos
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="form-group">
									<label for="500p">
										<input type="radio" name="capacidad" id="500p">
										500 Personas o menos
									</label>
								</div>
								<div class="form-group">
									<label for="masp">
										<input type="radio" name="capacidad" id="masp">
										Mas de 500 personas
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
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="form-group">
									<label for="infantil">
										<input type="checkbox" name="infantil" id="infantil">
										Infantil
									</label>
								</div>
								<div class="form-group">
									<label for="familiar">
										<input type="checkbox" name="familiar" id="familiar">
										Familiar
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="form-group">
									<label for="15anos">
										<input type="checkbox" name="15anos" id="15anos">
										XV años
									</label>
								</div>
								<div class="form-group">
									<label for="negocios">
										<input type="checkbox" name="negocios" id="negocios">
										Negocios
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="form-group">
									<label for="bodas">
										<input type="checkbox" name="bodas" id="bodas">
										Bodas
									</label>
								</div>
								<div class="form-group">
									<label for="baby">
										<input type="checkbox" name="baby" id="baby">
										Baby Shower
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="form-group">
									<label for="bautizos">
										<input type="checkbox" name="bautizos" id="bautizos">
										Bautizos
									</label>
								</div>
								<div class="form-group">
									<label for="graduaciones">
										<input type="checkbox" name="graduaciones" id="graduaciones">
										Graduaciones
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="form-group">
									<label for="comunion">
										<input type="checkbox" name="comunion" id="comunion">
										Primera comunión
									</label>
								</div>
								<div class="form-group">
									<label for="posadas">
										<input type="checkbox" name="posadas" id="posadas">
										Posadas
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
						<h3 class="box-title">Caracterisricas del local</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="form-group">
									<label for="meseros">
										<input type="checkbox" name="meseros" id="meseros">
										Meseros
									</label>
								</div>
								<div class="form-group">
									<label for="alberca">
										<input type="checkbox" name="" id="alberca">
										Alberca
									</label>
								</div>
								<div class="form-group">
									<label for="terraza">
										<input type="checkbox" name="terraza" id="terraza">
										Terraza
									</label>
								</div>
								<div class="form-group">
									<label for="verdes">
										<input type="checkbox" name="verdes" id="verdes">
										Áreas verdes
									</label>
								</div>
								<div class="form-group">
									<label for="minusvalidos">
										<input type="checkbox" name="minusvalidos" id="minusvalidos">
										Acceso a minusvalidos
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="form-group">
									<label for="banos">
										<input type="checkbox" name="banos" id="banos">
										Baños
									</label>
								</div>
								<div class="form-group">
									<label for="escenario">
										<input type="checkbox" name="escenario" id="escenario">
										Escenario
									</label>
								</div>
								<div class="form-group">
									<label for="fuente">
										<input type="checkbox" name="fuente" id="fuente">
										Fuente
									</label>
								</div>
								<div class="form-group">
									<label for="estanque">
										<input type="checkbox" name="estanque" id="estanque">
										Lago/Estanque
									</label>
								</div>
								<div class="form-group">
									<label for="asador">
										<input type="checkbox" name="asador" id="asador">
										Zona de asador
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

									</label>
								</div>
								<div class="form-group">
									<label for="">
										<input type="checkbox" name="" id="">

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
						<h3 class="box-title">Servicios extras</h3>
					</div>
					<div class="box-body">
						<div class="row">
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