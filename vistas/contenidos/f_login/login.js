$(function()
{
	$("#Usuario").focus();
	$("#Usuario").on("keypress", function(e){if(e.which==13){$("#Contrasena").focus();}});
	$("#Contrasena").on("keypress", function(e){if(e.which==13){ValidarLogin();}});
	$("#BtnInicioSesion").on("keypress", function(e){if(e.which==13){ValidarLogin();}});
	$("#BtnInicioSesion").on("click", ValidarLogin);
	function ValidarLogin()
	{
		var Usua = $.trim($("#Usuario").val());
    	var Passw = $.trim($("#Contrasena").val());
    	MostrarMensaje("");
    	if(Usua==''){MostrarMensaje("El usuario es obligatorio.");}
    	else if(Passw==''){MostrarMensaje('La contraseña es obligatoria.');}
    	else if(Passw.length<5){MostrarMensaje("La contraseña debe tener más de 4 dígitos.");}
    	else
    	{
    		$.ajax(
    		{
				url: "./vistas/contenidos/f_login/validarsesion.php",
				data: {usuario:Usua, contrasena:Passw},
				type:'post',
				success: function(resultado){MostrarMensaje(resultado);}
			});
    	}
	}
	function MostrarMensaje(msg)
	{
		$("#mensajeajax").html(msg);
	}
    	
	
});