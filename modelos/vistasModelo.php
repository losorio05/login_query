<?php
class vistasModelo
{
	protected function obtener_vistas_modelo($vistas)
	{
		$listaBlanca=["home","search","padrinos","pacientes",//area de los modulos
		"profile","logout","help",//area del usuario comun
		"config","reports","users",//area de administradores
		"superconfig","superusers","superempresas"//area de superadministradores
		];
		$db=new database();
		if(in_array($vistas, $listaBlanca)){
			if (is_file("./vistas/contenidos/f_".$vistas."/".$vistas.".php")) {
				$contenido="./vistas/contenidos/f_".$vistas."/".$vistas.".php";
			}
			else{
				$contenido="./vistas/contenidos/f_404/404.php";
			}				
		}
		elseif($vistas=="login"){
			$contenido="login";
		}
		elseif($vistas=="index"){
			$contenido="login";
		}
		elseif($vistas==""){
			$contenido="./vistas/contenidos/f_home/home.php";
		}
		else{
			$contenido="./vistas/contenidos/f_404/404.php";
		}
		return $contenido;
	}
}