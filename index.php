<?php
error_reporting(E_ALL);ini_set('display_errors',1);
include "core/configGeneral.php";
include "core/session.php";

include "controlador/vistasControlador.php";
$plantilla=new vistasControlador();

$plantilla->obtener_plantilla_controlador();