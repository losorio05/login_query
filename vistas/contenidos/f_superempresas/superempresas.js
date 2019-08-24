$(function()
{
	$("#detalle_paciente").hide();
	$("#createlistado").hide();
	$(".icon_new_registro").on("click", NuevoRegistro);
	$('#myDatepicker').datetimepicker({format: 'DD/MM/YYYY',defaultDate: new Date()});
	$("#guardar_nueva_empresa").on("click", GuardarNuevoRegistro);
	$("#cancelar_nueva_empresa").on("click", CancelarNuevoRegistro);
	
	$("#Usuario").on("keypress", function(e){if(e.which==13){$("#Contrasena").focus();}});
	$("#Contrasena").on("keypress", function(e){if(e.which==13){ValidarLogin();}});
	$("#BtnInicioSesion").on("keypress", function(e){if(e.which==13){ValidarLogin();}});
	
	function NuevoRegistro()
	{
		$("#createlistado").show();
		$("#viewlistado").hide();		
		$(".icon_new_registro").hide();
		$("#titulo_empresa").html('Registrar Nueva Empresa');
	}
	function CancelarNuevoRegistro()
	{
		var d = new Date();var month = d.getMonth()+1;var day = d.getDate();
		var FechaActual=(day<10?'0':'')+day+'/'+(month<10?'0':'')+month+'/'+d.getFullYear();
		$("#cedula").val('');
		$("#apellido").val('');
		$("#nombre").val('');
		$("#genero").val('');
		$('#fecha_nacimiento').val(FechaActual);
		$("#createlistado").hide();
		$("#viewlistado").show();		
		$(".icon_new_registro").show();
		$("#titulo_empresa").html('Listado de Empresas');
	}
	function MostrarMensaje(msg)
	{
		$("#mensajeajax").html(msg);
	}
    function GuardarNuevoRegistro()
	{
		var empre=$("#empresa").val();
		var ru=$("#ruc").val();
		var dir=$("#direccion").val();
		var codpos=$("#codpostal").val();
		var tel=$('#telefono').val();
		$.ajax({
			url : './vistas/contenidos/f_superempresas/db.php',
			data : {opc:1,empresa:empre,ruc:ru,direccion:dir,codpostal:codpos,telefono:tel},
			type : 'POST',
			success : function(e) {
				
			},
			error : function(xhr, status){alert('Disculpe, existió un problema');},

			// código a ejecutar sin importar si la petición falló o no
			complete : function(xhr, status) {
				alert('Petición realizada');
			}
		});
	}
	
});