<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
    <?= $this->Html->css('main.css') ?>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registrarse</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="register-content">
      <div class="register-box">
        <!-- Inicio del formulario login-->
        <div class="register-form">
        <?= $this->Form->create() ?>
        <!--<form class="register-form" method="post" accept-charset="utf-8" action="user/login">-->
          <h3 class="register-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTRARSE</h3>
          <div class="form-group">
            <label class="control-label">NOMBRE DE USUARIO</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Ingrese su nombre de usuario" required="required" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">NOMBRE</label>
            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ingrese su nombre" required="required">
          </div>
          <div class="form-group">
            <label class="control-label">APELLIDOS</label>
            <input class="form-control" type="text" name="secondname" id="secondname" placeholder="Ingrese su apellido" required="required">
          </div>
          <div class="form-group">
            <label class="control-label">CORREO ELECTRÓNICO</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese su correo" required="required">
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
            
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Registrarse</button>
          </div>
        <!--</form>-->
        <?= $this->Form->end() ?></div>

        <!-- Inicio del formulario login-->
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <!--<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>-->
    <?= $this->Html->script('jquery-3.2.1.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('main.js') ?>

    <!-- The javascript plugin to display page loading on top-->
    <!--<script src="js/plugins/pace.min.js"></script>-->
    <?= $this->Html->script('plugins/pace.min.js') ?>

    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>