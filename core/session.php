<?php
header('Content-Type: text/html; charset=UTF-8');
define('DURACION_SESION','18000'); //5 horas
ini_set("session.cookie_lifetime",DURACION_SESION);
ini_set("session.gc_maxlifetime",DURACION_SESION);
//if($ValTemp==1){ini_set("session.save_path","./temp");}else{ini_set("session.save_path","../../../temp");}
session_cache_expire(DURACION_SESION);
session_start();
session_regenerate_id(true);