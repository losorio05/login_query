<?php
include "../../../core/configGeneral.php";
include "../../../core/session.php";
include "../../../core/db.php";$db=new database();$db->set_charset();

$opc=$db->s_i('opc');

if($opc==1)//GUARDAMOS NUEVO REGISTRO
{
	$nombre=$db->s_i('nombre');
	$apellido=$db->s_i('apellido');
	$cedula=$db->s_i('cedula');
	$genero=$db->s_i('genero');
	$fecha_nacim=$db->s_i('fecha_nacimiento');
	
	if($nombre<>'' && $apellido<>'' && $cedula<>'' && $genero<>'' && $fecha_nacim<>'')
	{
		
	}
	else
	{
		if($nombre==''){}
		//fecha_nacimiento
		alert("Todos los campos son obligatorios");
	}
	
	$query="SELECT a.CodUsuario, a.Contrasena, a.NivelAcceso, a.EsAuditor,
		b.Nombre, b.Apellido, b.Cedula, b.Email, b.Celular, b.Telefono,
		a.EsAdmin, a.EsSuperAdmin
		FROM usuarios a
		LEFT JOIN usuarios_datos b ON b.CodUsuario=b.CodUsuario
		WHERE a.CodUsuario='".$user."'";
	$sql=$db->consulta($query);$row=$db->fetch_array($sql);$num=$db->num_rows($sql);
	if($num==1)
	{
		if($passw==$row["Contrasena"])
		{
			$_SESSION["CodUsuario"]=$row['CodUsuario'];
			$_SESSION["NivelAcceso"]=$row['NivelAcceso'];
			$_SESSION["EsAuditor"]=$row['EsAuditor'];
			$_SESSION['Nombre']=$row['Nombre'];
			$_SESSION['Apellido']=$row['Apellido'];
			$_SESSION['Cedula']=$row['Cedula'];
			$_SESSION['Email']=$row['Email'];
			$_SESSION['Celular']=$row['Celular'];
			$_SESSION['Telefono']=$row['Telefono'];
			$_SESSION["EsAdmin"]=$row['EsAdmin'];
			$_SESSION["EsSuperAdmin"]=$row['EsSuperAdmin'];
			
			echo "<script type='text/javascript'>document.location.href='".SERVERURL."';</script>";
		}
		else{echo 'Las contraseñas no coinciden.';}
	}
	else{echo 'No existe usuario.';}
}

