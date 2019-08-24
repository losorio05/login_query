<?php
class funciones
{
	
	function __construct(){$this->db = new database();}
	//SABER CANTIDAD DE DIAS DE UN MES
	function diasdelmes($Month, $Year){return date("d",mktime(0,0,0,$Month+1,0,$Year));}
	//genera iinputs para la aplicacion
	public function inputs($t,$name,$vv,$property)
	{
		$ty=array('text','radio','checkbox','hidden','password','submit','button','file');
		$html='<input type="'.$ty[$t].'" name="'.$name.'" value="'.$vv.'" '.$property.'>';
		return $html;
	}
	public function txtarea($name,$vv,$property)//GENERA TEXTAREA
	{
		$html='<textarea rows="4" name="'.$name.'" '.$property.'>'.$vv.'</textarea>';
		return $html;
	}
	public function selects($name,$vv,$arr,$property)//GENERA SELECT VALOR=K
	{
		$html='<select name="'.$name.'" '.$property.'><option value="">Seleccione</option>';
		foreach($arr as $k=>$v)
		{
			$se=($vv!='' && $k==$vv)?'selected="selected"':'';
			$html.='<option value="'.$k.'" '.$se.'>'.$v.'</option>';
		}
		$html.='</select>';
		return $html;
	}
	//saber ip del cliente
	public function real_ip()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];

		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		return $_SERVER['HTTP_X_FORWARDED_FOR'];

		return $_SERVER['REMOTE_ADDR'];
	}
	//INICIO FUNCIONES PAGINACION
	public function calc_paginas1($num)
	{
		$RegistrosAMostrar=$num;
		if(isset($_GET['pag'])){$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;$PagAct=$_GET['pag'];}else{$RegistrosAEmpezar=0;$PagAct=1;}
		return array($RegistrosAMostrar, $RegistrosAEmpezar, $PagAct);
	}
	public function calc_paginas2($consulta, $PagAct, $RegistrosAMostrar)
	{
		$query=$this->db->consulta($consulta);$rww1=$this->db->num_rows($query);$PagAnt=$PagAct-1;$PagSig=$PagAct+1;$PagUlt=$rww1/$RegistrosAMostrar;$Res=$rww1%$RegistrosAMostrar;if($Res>0){$PagUlt=floor($PagUlt)+1;}$this->db->free_result($query);
		return array($rww1, $PagAct, $PagAnt, $PagSig, $PagUlt);
	}
	public function pagination($quer, $PagAct, $RegistrosAMostrar)
	{
		list($rww1, $PagAct, $PagAnt, $PagSig, $PagUlt)=$this->calc_paginas2($quer, $PagAct, $RegistrosAMostrar);$datos=array();
		$datos=array(1,$PagAnt,1,$PagSig,$PagUlt);$url=$_SESSION['url'];$pagg='<p>';
		for($i=0;$i<5;$i++)
		{
			if($PagAct>1){$inicio='<a href="'.$url.'&pag=1" title="INICIO">&lt;&lt;</a>';$anterior='<a href="'.$url.'&pag='.$PagAnt.'" title="ANTERIOR">&lt;</a>';}
			else{$inicio='<a class="nopag" title="INICIO">&lt;&lt;</a>';$anterior='<a class="nopag" title="ANTERIOR">&lt;</a>';}
			if($PagAct<$PagUlt)
			{$siguiente='<a href="'.$url.'&pag='.$PagSig.'" title="SIGUIENTE">&gt;</a>';$final='<a href="'.$url.'&pag='.$PagUlt.'" title="FINAL">&gt;&gt;</a>';}
			else{$siguiente='<a class="nopag" title="SIGUIENTE">&gt;</a>';$final='<a class="nopag" title="FINAL">&gt;&gt;</a>';}
			switch($i)
			{
				case 0: $pagg.=$inicio; break;case 1: $pagg.=$anterior; break;
				case 2: $pagg.="<span><strong>&nbsp;&nbsp;&nbsp;".$PagAct." / ".$PagUlt."&nbsp;&nbsp;&nbsp;</strong></span>";break;
				case 3: $pagg.=$siguiente; break;case 4: $pagg.=$final; break;
			}
		}
		$pagg.="</p><p><strong>Total: ".number_format($rww1)."</strong></p>";
		return '<div class="pagination" align="center">'.$pagg.'</div>';
	}
	//FIN FUNCIONES PAGINACION
	public function encryptar($palabra)
	{
		//global $arraykeys, $divisor_key;
		$Construir="";
		$letra="";
		$encuentra=0;
		for($i = 0; $i < strlen($palabra); $i++)
		{
			if($i>0){$delimiter=divisor_key;}else{$delimiter="";}
			$letra=substr($palabra, $i,1);
			if (array_key_exists($letra, arraykeys)){$Construir=$Construir.delimiter.arraykeys[$letra];$encuentra=1;}
			else{$encuentra=0;break;}
		}
		if($encuentra==1){return $Construir;}else{return "";}
	}
	public function desencryptar($palabra)
	{
		//global $arraykeys, $divisor_key;
		$Construir="";
		$letra="";
		$encuentra=0;
		$arreglo=explode(divisor_key,$palabra);
		foreach($arreglo as $key=>$valor)
		{
			if(strlen($valor)==3)
			{
				if (($letra = array_search($valor, arraykeys)) !== FALSE){$Construir=$Construir.$letra;$encuentra=1;}else{$encuentra=0;break;}
			}
		}
		if($encuentra==1){return $Construir;}else{return "";}
	}

}