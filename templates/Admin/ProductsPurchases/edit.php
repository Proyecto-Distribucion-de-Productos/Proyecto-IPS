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
  <title>Editar Compra de Producto</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="register-content">
    <div class="register-box">
      <!-- Inicio del formulario login-->
      <div class="register-form">

         <?= $this->Form->create($productsPurchase) ?>
        <!--<form class="login-form" method="post" accept-charset="utf-8" action="user/login">-->
          <h3 class="register-head">COMPRA DE PRODUCTO</h3>

          <div class="form-group">
            <?php 
              echo $this->Form->control('purchase_id', ['label' => 'Compra', 'class' => 'form-control', 'options' => $purchases]);
              echo $this->Form->control('provider_id', ['label' => 'Proveedor', 'class' => 'form-control', 'options' => $providers]);
              echo $this->Form->control('product_id', ['label' => 'Producto', 'class' => 'form-control', 'options' => $products]);
              echo $this->Form->control('quantity', ['label' => 'Cantidad', 'class' => 'form-control']);
            ?> 
          </div>
          

          <div class="form-group">
          </div>


            <button class="btn btn-primary btn-block" type="submit">CONFIRMAR</button>
            

          </div>
          <!--</form>-->
          <?= $this->Form->end() ?></div>
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
