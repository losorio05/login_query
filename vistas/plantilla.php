<?php
include "core/db.php";$db=new database();$db->set_charset();
include "core/funciones.php";$func=new funciones();
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include "./vistas/modulos/headplantilla.php";include "./vistas/modulos/scriptsEnd.php";?></head>
<?php
    require_once "./controlador/vistasControlador.php";
    $vt=new vistasControlador();
    $vistasR=$vt->obtener_vistas_controlador();
    
    if($vistasR=="login"):
        require_once "./vistas/contenidos/f_login/login.php";
    else:
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?php echo COMPANY;?></span></a>
            </div>
            <div class="clearfix"></div>
            <?php //include "./vistas/modulos/navfotolateral.php";?>
            <br />
            <?php include "./vistas/modulos/navlateral.php";?>
            <?php include "./vistas/modulos/navfooterlateral.php";?>
          </div>
        </div>
        <?php include "./vistas/modulos/topnavmenu.php";?>
        <div class="right_col" role="main">
            <?php require_once $vistasR;?>
        </div>
        <footer>
          <div class="pull-right"><?php echo COMPANY;?><a href="javascript:;"> PTY Solution</a></div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>
    
  </body>
<?php endif; ?>
</html>
<!-- Custom Theme Scripts -->
<script src="<?php echo SERVERURL; ?>build/js/custom.min.js"></script>