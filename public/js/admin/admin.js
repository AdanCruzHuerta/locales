$(document).ready(function(){
	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%'
	});
	jQuery.extend(jQuery.validator.messages, {
		required: "Este campo es obligatorio.",
		remote: "Por favor, rellena este campo.",
		email: "Por favor, escribe una dirección de correo válida",
		url: "Por favor, escribe una URL válida.",
		date: "Por favor, escribe una fecha válida.",
		dateISO: "Por favor, escribe una fecha (ISO) válida.",
		number: "Por favor, escribe un número entero válido.",
		digits: "Por favor, escribe sólo dígitos.",
		creditcard: "Por favor, escribe un número de tarjeta válido.",
		equalTo: "Por favor, escribe el mismo valor de nuevo.",
		accept: "Por favor, escribe un valor con una extensión aceptada.",
		maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
		minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
		rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
		range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
		max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
		min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
	});
	jQuery.validator.setDefaults({
		errorElement: "span",
		errorClass:"help-block error",
		highlight: function(element, error){
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success: function(element){
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
		},
	});

	var base_url = window.location.protocol + "//" + window.location.host + "/";
	var url = window.location.href;

	$.hacerAjax = function(url,formulario,respuesta){
		Pace.track(function(){
			$.ajax({
				async : true,
				type: 'POST',
				url: url,
				data: formulario.serialize(),
				dataType: 'json',
				beforeSend: function(){
					formulario.find('button[type="submit"]').prop('disabled', true);
				},
				error: function(){
					formulario.find('button[type="submit"]').prop('disabled', false);
					respuesta({result:false,mensaje:'Error en el servidor'});
				},
				success: function(result){
					formulario.find('button[type="submit"]').prop('disabled', false);
					respuesta(result);
				}
			});
		});
	}
	$.hacerAjaxData = function(url,data,respuesta){
		Pace.track(function(){
			$.ajax({
				async : true,
				type: 'POST',
				url: url,
				data: data,
				dataType: 'json',
				error: function(){
					respuesta({result:false,mensaje:'Error en el servidor'});
				},
				success: function(result){
					respuesta(result);
				}
			});
		});
	}
	$.notificacion = function(mensaje,tipo){
		var icono;
		if(tipo == 'info'){
			icono = 'fa fa-info';
		}else if(tipo == 'success'){
			icono = 'fa fa-check';
		}else if(tipo == 'warning'){
			icono = 'fa fa-warning';
		}else if(tipo == 'danger'){
			icono = 'fa fa-danger';
		}
		$.notify({
			icon: icono,
			title: '<strong>Alerta!</strong>',
			message: mensaje
		},{
			type: tipo
		});
	}

	//$('#galeria').ready(function(){
	if(base_url+'admin/local/galeria' == url){
		$.getScript(base_url+'js/admin/fileinput.min.js',function(){
			$.getScript(base_url+'js/admin/fileinput_es.js',function(){
				$("#input-galeria").fileinput({
					language: "es",
					uploadUrl: "http://localhost/file-upload-single/1", // server upload action
					uploadAsync: true,
					minFileCount: 1,
					maxFileCount: 2,
					overwriteInitial: false,
					allowedFileExtensions: ["jpg", "png"],
					/*initialPreview: [
						"<img src='http://placeimg.com/200/150/people/1'>",
						"<img src='http://placeimg.com/200/150/people/2'>",
					],
					initialPreviewConfig: [
						{caption: "People-1.jpg", width: "120px", url: "/site/file-delete", key: 1},
						{caption: "People-2.jpg", width: "120px", url: "/site/file-delete", key: 2},
					],
					uploadExtraData: {
						img_key: "1000",
						img_keywords: "happy, people",
					}*/
				});
				$('.overlay').remove();
			});
		});
	}

	//$('#calendario').ready(function(){
	if(base_url+'admin/calendario' == url){
		$.getScript(base_url+'js/admin/moment.js',function(){
			$.getScript(base_url+'js/admin/fullcalendar.min.js',function(){
				moment.locale('es');
				var date = new Date();
				var d = date.getDate(),
					m = date.getMonth(),
					y = date.getFullYear();
				$('#calendar').fullCalendar({
					lang: 'es',
					header: {
						left: 'prev,next ',
						center: 'title',
						right: 'today'
					},buttonText: {
						today: 'Hoy',
						month: 'Mes',
						week: 'Semana',
						day: 'Dia'
					},selectable: true,
					editable: true,
					droppable: true,
					select: function(start,end) {
						/*var inicio = start.format('YYYY-MM-DD');
						var fin = end.format('YYYY-MM-DD');
						var evento_rapido = BootstrapDialog.show({
							type: BootstrapDialog.TYPE_PRIMARY,
							closeByBackdrop: false,
							closeByKeyboard: false,
							title: 'Evento rapido',
							message: '<div class="alert alert-danger animated" role="alert" id="alerta_evento_rapido"><button type="button" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><strong>Error!</strong>&nbsp;<span id="mensaje_evento_rapido"></span></div><label>Titulo:</label><input type="text" class="form-control" id="input_evento_rapido">',
							buttons:[
								{
									label: 'Cancelar',
									action: function(){
										$('#calendar').fullCalendar('unselect');
										evento_rapido.close();
									}
								},
								{
									label: 'Aceptar',
									cssClass: 'btn-success',
									action: function(){
										var expRegNombre = /^\s*$/;
										var titulo = $('#input_evento_rapido').val();
										var validar = true;
										$('.close').click(function(){
											$('#alerta_evento_rapido').removeClass('bounceIn').addClass('bounceOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
												$('#alerta_evento_rapido').hide();
											});
										});
										if(!titulo || expRegNombre.test(titulo)){
											$('#mensaje_evento_rapido').html("Escribe un titulo valido");
											$('#alerta_evento_rapido').show().removeClass('bounceOut').addClass('bounceIn');
											$('#input_evento_rapido').focus();
											validar = false;
										}
										if(validar){
											$('#calendar').fullCalendar('renderEvent',{title:titulo, start:start, end:end},true);
											$.ajax({
												type: "POST",
												url: "<?php echo site_url('admon/evento_rapido'); ?>",
												data: {titulo:titulo,inicio:inicio,fin:fin}
											});
											$('#calendar').fullCalendar('unselect');
											evento_rapido.close();
										}
									}
								}
							]
						});*/
					},
					eventDrop: function(event) {
						var id = event.id;
						var inicio = event.start.format('YYYY-MM-DD');
						var fin = event.end.format('YYYY-MM-DD');
						$.ajax({
							type: "POST",
							url: "<?php echo site_url('admon/actualiza_evento'); ?>",
							data: {id:id,inicio:inicio,fin:fin}
						});
					},
					eventResize: function(event) {
						var id = event.id;
						var inicio = event.start.format('YYYY-MM-DD');
						var fin = event.end.format('YYYY-MM-DD');
						$.ajax({
							type: "POST",
							url: "<?php echo site_url('admon/actualiza_evento'); ?>",
							data: {id:id,inicio:inicio,fin:fin}
						});
					},
					drop: function(date, allDay) {
						var originalEventObject = $(this).data('eventObject');
						var copiedEventObject = $.extend({}, originalEventObject);
						var titulo = copiedEventObject.title;
						var inicio = date.format('YYYY-MM-DD');
						var fin = date.format('YYYY-MM-DD');
						var descripcion = copiedEventObject.description;
						var icono = copiedEventObject.icon;
						var color = copiedEventObject.className;
						/*$.ajax({
							type: "POST",
							url: "<?php echo site_url('admon/evento'); ?>",
							data: {titulo:titulo,inicio:inicio,fin:fin,descripcion:descripcion,icono:icono,color:color},
							success: function(resp){
								var datos = jQuery.parseJSON(resp);
								copiedEventObject.id = datos;
								copiedEventObject.start = date;
								copiedEventObject.end = date;
							}
						});*/
						$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
						$(this).remove();
					},
					eventRender: function(event, element){

					},
					/*eventRender: function (event, element, icon, background) {
						if (!event.description == "") {
							element.find('.fc-event-title').append("<br/><span class='event-description'>"+event.description+"</span>");
						}
						if (!event.icon == "") {
							element.find('.fc-event-title').append("<i class='pull-top-right glyphicon "+event.icon+"'></i>");
						}
					},*/
					eventClick: function(event,jsEvent,view ){
							var alerta_eliminar = BootstrapDialog.show({
							type: BootstrapDialog.TYPE_DANGER,
							closeByBackdrop: false,
							closeByKeyboard: false,
							title: 'Eliminar evento: '+event.title,
							message: '¿Deseas eliminar el evento?',
							buttons:[
								{
									label: 'Cancelar',
									action: function(){
										alerta_eliminar.close();
									}
								},
								{
									label: 'Aceptar',
									cssClass: 'btn-success',
									action: function(){
										var id = event.id;
										$('#calendar').fullCalendar('removeEvents',id);
										$.ajax({
											type: "POST",
											url: "<?php echo site_url('admon/eliminar_evento'); ?>",
											data: {id:id}
										});
										alerta_eliminar.close();
									}
								}
							]
						});
					},
					events: [{
						title: 'All Day Event',
						start: new Date(y, m, 1),
						backgroundColor: "#f56954", //red
						borderColor: "#f56954" //red
					},{
						title: 'Long Event',
						start: new Date(y, m, d - 5),
						end: new Date(y, m, d - 2),
						backgroundColor: "#f39c12", //yellow
						borderColor: "#f39c12" //yellow
					},{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false,
						backgroundColor: "#0073b7", //Blue
						borderColor: "#0073b7" //Blue
					}],
				});
				$('.overlay').remove();
				/*var initDrag = function(e) {
					var eventObject = {
						title: $.trim(e.children().text()),
						description: $.trim(e.children('div').attr('data-description')),
						icon: $.trim(e.children('div').attr('data-icon')),
						className: $.trim(e.children('div').attr('class'))
					};
					e.data('eventObject', eventObject);
					e.draggable({
						zIndex: 999,
						revert: true,
						revertDuration: 0
					});
				};*/

				/*var agregarEvento = function(cliente, tipo, paquete, color){
					var html = $('<li><div class="new-event '+color+'" data-cliente="'+cliente+'" data-tipo="'+tipo+'" data-paquete="'+paquete+'" data-color="'+color+'">'+
							'<span><i class="fa fa-user"></i> '+cliente+'</span>'+
							'<p><i class="fa fa-tag"></i> '+tipo+' '+
							'<i class="fa fa-list-alt"></i> '+paquete+'</p>'+
						'</div></li>').prependTo('ul#external-events').hide().fadeIn();
					initDrag(html);
				};*/

				/*$('#external-events > li').each(function(){
					initDrag($(this));
				});*/

				$('#agregar_evento').click(function(){
					var cliente = $('#cliente_evento option:selected').val();
					var tipo = $('#tipo_evento option:selected').val();
					var paquete = $('#paquete_evento option:selected').val();
					var color = $('#estatus_evento option:selected').val();
					//agregarEvento(cliente, tipo, paquete, color);
					var html = $('<li><div class="new-event '+color+'" data-cliente="'+cliente+'" data-tipo="'+tipo+'" data-paquete="'+paquete+'" data-color="'+color+'">'+
							'<span><i class="fa fa-user"></i> '+cliente+'</span>'+
							'<p><i class="fa fa-tag"></i> '+tipo+' '+
							'<i class="fa fa-list-alt"></i> '+paquete+'</p>'+
						'</div></li>').prependTo('ul#external-events').hide().fadeIn();
					//initDrag(html);
					var eventObject = {
						cliente: cliente,
						tipo: tipo,
						paquete: paquete,
						color: color
					};
					html.data('eventObject', eventObject);
					html.draggable({
						zIndex: 999,
						revert: true,
						revertDuration: 0
					});
				});
			});
		});
	}
	if(base_url+'admin/clientes' == url){
		var cliente = $('#form-nuevoCliente').validate({
			rules:{
				nombre:{required:true},
				telefono:{required:true,digits:true,minlength:10,maxlength:10},
				domicilio:{required:true},
				celular:{required:false,digits:true,minlength:10,maxlength:10},
				correo:{required:true, email:true},
			},
			submitHandler: function(){
				$.hacerAjax(url+'login/validaUsuario',$('#form-nuevoCliente'),function(respuesta){
					if(respuesta.result){
						$.notificacion(respuesta.mensaje,'success');
					}else{
						$.notificacion(respuesta.mensaje,'warning');
					}
				});
			}
		});
		$('#modal-nuevoCliente').on('hidden.bs.modal', function (e) {
			cliente.resetForm();
			$('#form-nuevoCliente').trigger('reset');
			$('#form-nuevoCliente .form-group').removeClass('has-success has-error');
		});

		$('#table-clientes tbody').on('click','tr',function(){
			if ($(this).hasClass('active') ) {
				$(this).removeClass('active');
				$('#eliminar-cliente').prop('disabled',true);
				$('#editar-cliente').prop('disabled',true);
			}else {
				$('tr.active').removeClass('active');
				$(this).addClass('active');
				$('#eliminar-cliente').prop('disabled',false);
				$('#editar-cliente').prop('disabled',false);
			}
		});

		$('#eliminar-cliente').click(function(){
			var tr = $('#table-clientes tbody tr.active');
			if(tr.attr('id') > 0){
				alert(tr.attr('id'));
			}else{
				alert('selecciona un cliente');
			}
		});
	}
});