$(document).ready(function(){
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
});
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