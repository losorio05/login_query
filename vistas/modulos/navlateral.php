<?php
$query="SELECT id, CodMenuTipo, Descripcion, link, parent, icono, orden
FROM menu ORDER BY CodMenuTipo ASC, parent ASC, orden ASC";
$con=$db->consulta($query);

echo '<div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><div class="menu_section">';
$cierre=0;
while($row=$db->fetch_array($con))
{
	if($row["parent"]==0)
	{
		if($cierre>0){echo '</ul>';}
		echo '<br><h3>'.$row["Descripcion"].'</h3><ul class="nav side-menu">';
	}
	if($row["parent"]>0)
	{
		echo '<li><a href="'.SERVERURL.$row["link"].'"><i class="fa fa-'.$row["icono"].'"></i> '.$row["Descripcion"].'</a></li>';
	}
	$cierre=$cierre+1;
}
echo '</ul></div></div>';

?>
	
		