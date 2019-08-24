<?php
require_once "./modelos/vistasModelo.php";
class vistasControlador extends vistasModelo
{
	public function obtener_plantilla_controlador(){
		
		return require_once "./vistas/plantilla.php";
	}
	public function obtener_vistas_controlador()
	{
		if (isset($_GET["views"]))
		{
			if(isset($_SESSION["CodUsuario"]))
			{
				$ruta=explode("/",$_GET["views"]);
				$respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
			}
			else
			{
				$respuesta="login";
			}
		}
		else
		{
			if (isset($_SESSION["CodUsuario"]))
			{
				$ruta='home';
				$respuesta=vistasModelo::obtener_vistas_modelo($ruta);
			}
			else
			{
				$respuesta="login";
			}
		}
		return $respuesta;
	}
}