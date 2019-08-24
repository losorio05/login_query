$(function()
{
	$("#detalle_paciente").hide();
	$("#createlistado").hide();
	$(".icon_new_registro").on("click", NuevoRegistro);
	$('#myDatepicker').datetimepicker({format: 'DD/MM/YYYY',defaultDate: new Date()});
	//$("#guardar_nuevo_paciente").on("click", GuardarNuevoRegistro);
	$("#cancelar_nuevo_paciente").on("click", CancelarNuevoRegistro);
	
	$("#Usuario").on("keypress", function(e){if(e.which==13){$("#Contrasena").focus();}});
	$("#Contrasena").on("keypress", function(e){if(e.which==13){ValidarLogin();}});
	$("#BtnInicioSesion").on("keypress", function(e){if(e.which==13){ValidarLogin();}});
	
	function NuevoRegistro()
	{
		$("#createlistado").show();
		$("#viewlistado").hide();		
		$(".icon_new_registro").hide();
	}
	function CancelarNuevoRegistro()
	{
		$("#createlistado").hide();
		$("#viewlistado").show();		
		$(".icon_new_registro").show();
	}
	function MostrarMensaje(msg)
	{
		$("#mensajeajax").html(msg);
	}
    	
	
});