<?php
class database
{
private $conexion;
function __construct(){if(!isset($this->conexion))
{
	$host='localhost';
	$data_base='crm1';
	$dbuser='luis';
	$dbpass='*963/8527410';
	$this->conexion = mysqli_connect($host, $dbuser, $dbpass, $data_base);
	if (!$this->conexion){die('Error de Conexión ('.mysqli_connect_errno().') '. mysqli_connect_error());}

}}
public function consulta($consulta){$resultado=mysqli_query($this->conexion, $consulta);if(!$resultado)
{
	if($_SESSION['user']=='losorio')
	{
		echo 'MySQL Error: <br><br>'.mysqli_error().'<br><br><br><br>'.$consulta.'<br><br><br>';
		$_SESSION['css']=ERROR_MYSQL;exit;
	}
}return $resultado;}
public function fetch_array($consulta){return mysqli_fetch_array($consulta, MYSQLI_BOTH);}
public function num_rows($consulta){return mysqli_num_rows($consulta);}
public function lastid(){return mysqli_insert_id($this->conexion);}
public function free_result($consulta){return mysqli_free_result($consulta);}
public function info(){return mysqli_info($this->conexion);}
public function affected_rows(){return mysqli_affected_rows($this->conexion);}
public function close(){return mysqli_close($this->conexion);}
public function real_escape($word){return mysqli_real_escape_string($this->conexion, $word);}
public function set_charset(){return mysqli_set_charset($this->conexion, "utf8");}
public function s_i($word)
{
	$pa='';
	if(isset($_POST[$word])){$pa=$_POST[$word];}
	else
	{
		if(isset($_GET[$word])){$pa=$_GET[$word];}
		else
		{
			if(isset($_SESSION[$word])){$pa=$_SESSION[$word];}
			else{$pa='';}
		}
	}
	return trim(stripslashes(htmlspecialchars($this->real_escape($pa))));
}

}