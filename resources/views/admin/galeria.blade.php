@extends('templates.administrador')

@section('content')

	<section class="content-header">
		<h1>
			Datos del local
			<small>Galeria</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-desktop"></i> Home</a></li>
			<li class="active">Local</li>
		</ol>
	</section>
	<section class="content" id="galeria">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="box box-default">
					<div class="box-body">
						<div class="form-group">
							<input type="file" multiple=true id="input-galeria" accept="image/x-png, image/jpeg" style="display:none;">
						</div>
					</div>
					<div class="overlay" style="min-height:352px;">
						<i class="fa fa-refresh fa-spin"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

@stop