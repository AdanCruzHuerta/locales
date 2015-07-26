@extends('templates.sitio')

@section('content')

	@include('sitio.resources.apiGoogleMaps')
	
	{{--<section class="portada"></section>--}}
	
	<section class="formulario-registro">
		<div class="container">

			{!! Form::open(['class' => 'well', 'id' => 'form-registro'])!!}
				<ul class="nav nav-tabs nav-justified process" id="myTab">
					<div class="liner"></div>
					<li class="active">
						<a href="#personal" data-toggle="tab" id="tab-personal">
							<span class="round-tabs">
								<i class="fa fa-user"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="#empresa" data-toggle="tab" id="tab-empresa">
							<span class="round-tabs">
								<i class="fa fa-bullseye"></i>
							</span>
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="personal">
						<div class="seccion">
							<span>Datos de acceso</span>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Correo *" name="correo" id="correo">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Contraseña *" name="password" id="password">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Comprobar contraseña *" name="confPass" id="confPass">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aliquam ratione eaque rerum laboriosam error. Blanditiis officiis ipsa pariatur veniam adipisci voluptate deserunt et harum, fuga accusamus. Vitae, tenetur, facere?</p>
							</div>
						</div>
						<div class="seccion">
							<span>Datos de facturación y contacto</span>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre completo *" name="nombre_completo" id="nombre_completo">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre local *" name="nombre_local" id="nombre_local">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Razón social *" name="razon_social" id="razon_social">
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
												<label for="persona_fisica">
													<input type="radio" name="estatus_fiscal" id="persona_fisica" value="1" checked>
													Persona Física *
												</label>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
												<label for="persona_moral">
													<input type="radio" name="estatus_fiscal" id="persona_moral" value="2">
													Persona Moral *
												</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="RFC *" name="rfc_f" id="rfc_f">
									<input type="text" style="display:none;" class="form-control" placeholder="RFC *" name="rfc_m" id="rfc_m">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Teléfono" name="telefono" id="telefono">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Celular" name="celular" id="celular">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Sitio web" name="sitio_web" id="sitio_web">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Whatsapp" name="whatsapp" id="whatsapp">
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="form-group">
							<button type="button" class="btn btn-primary pull-right" id="siguiente-empresa">Siguiente</button>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab-pane fade in" id="empresa">
						<div class="seccion">
							<span>Ubicación de local</span>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<select name="estado_id" id="estado_id" class="form-control">
										<option value="">Estado *</option>
										@foreach($estados as $estado)
										
										<option value="{{$estado->id}}">{{$estado->nombre}}</option>

										@endforeach
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
									<textarea name="referencia" id="referencia" cols="30" rows="5" class="form-control" placeholder="Referencia: Ej. A un costado de Hospital Puerta de Hierro."></textarea>
								</div>
								<div class="form-group">
									<textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" placeholder="Realiza una descripción amplia y detallada del local."></textarea>
								</div>
							</div>
							<div class="row">
								<label style="margin-top:20px;">Indica en el mapa la ubicación de tu local</label>
								<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
									<div id="map-canvas"></div>
									<input type="hidden" name="latitud" id="latitud">
									<input type="hidden" name="longitud" id="longitud">
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="form-group">
							<button type="button" class="btn btn-primary pull-left" id="anterior-personal">Anterior</button>
							<button type="button" class="btn btn-primary pull-right" id="finalizar-registro">Guardar</button>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			{!! Form::close()!!}
		</div>
	</section>

	<script>
		$(document).ready(function(){

			$('#persona_fisica').click(function() {
				$('#rfc_f').show();
				$('#rfc_m').hide();
			});

			$('#persona_moral').click(function() {
				$('#rfc_f').hide();
				$('#rfc_m').show();
			});

			var registro = $('#form-registro').validate({
				rules:{
					correo:{required:true,email:true},
					password:{required:true},
					confPass:{required:true,equalTo:"#password"},
					nombre_completo:{required:true},
					razon_social:{required:true},
					nombre_local:{required:true},
					rfc_f:{required:true, minlength:13, maxlength:13},
					rfc_m:{required:true, minlength:12, maxlength:12},
					telefono:{required:true,minlength:10,maxlength:10,digits:true},
					celular:{minlength:10,maxlength:10,digits:true},
					estado_id:{required:true},
					municipio_id:{required:true},
					colonia:{required:true},
					codigo_postal:{required:true,digits:true,minlength:5,maxlength:5},
					domicilio:{required:true},
					numero_int:{required:true}
				}
			});
			$('#siguiente-empresa').click(function(){
				if(registro.form()){
					$('#tab-empresa').click();
					setTimeout(function(){initialize();},400);
				}
			});
			$('#anterior-personal').click(function(){
				$('#tab-personal').click();
			});
			$('#finalizar-registro').click(function(){
				if(registro.form()){
					$.hacerAjax('/register',$('#form-registro'),function(respuesta){
						if(respuesta.result){
							$.notificacion(respuesta.mensaje,'success');
						}else{
							$.notificacion(respuesta.mensaje,'warning');
						}
					});
				}
			});

			$('#estado_id').change(function() {
				var estado_id = $(this).val();
				$.ajax({
					type: "POST",
					url: "/municipios",
					data:{
							estado_id:estado_id,
						  	_token: $('input[name=_token]').val()
						 },
					success: function(response){
						var cadena = '<option value="">Selecciona Municipio</option>';
						for(var i = 0; i < response.length; i++){
							cadena += '<option value="'+response[i].id+'">'+response[i].nombre+'</option>';
						}
						$('#municipio_id').html(cadena);
					}
				});
			});
		})
	</script>

@stop