<?php

?>
<style type="text/css">
#mensajeajax{margin:0 0 10px 0;color:red;font-weight:bold;}
</style>
<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form>
            <h1>Inicio de Sesión</h1>
            <div id="mensajeajax"></div>
            <div><input type="text" class="form-control" id="Usuario" placeholder="Usuario" tabindex="1" /></div>
            <div><input type="password" class="form-control" id="Contrasena" placeholder="Contraseña" tabindex="2" /></div>
            <div><input type="button" id="BtnInicioSesion" class="btn btn-default" value="Iniciar Sesión" tabindex="3" /></div>
            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <div>
                <h1><i class="fa fa-paw"></i> <?php echo COMPANY;?></h1>
                <p>©<?php echo date("Y");?> Todos los derechos reservados. PTY Solution.</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
<script src="<?php echo SERVERURL; ?>vistas/contenidos/f_login/login.js"></script>