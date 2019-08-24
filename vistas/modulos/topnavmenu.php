<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
		
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo SERVERURL; ?>vistas/images/img.jpg" alt=""><?php echo $_SESSION['Nombre'].' '.$_SESSION['Apellido']?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?=SERVERURL?>profile">Perfil de Usuario</a></li>
            <li><a href="<?=SERVERURL?>help">Ayuda</a></li>
            <li><a href="<?=SERVERURL?>logout"><i class="fa fa-sign-out pull-right"></i>Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>