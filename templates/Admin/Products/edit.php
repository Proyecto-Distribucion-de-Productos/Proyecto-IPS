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
  <title>Editar Productos</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="login-box">
      <!-- Inicio del formulario login-->
      <div class="login-form">

        <?= $this->Form->create($product) ?>
        <!--<form class="login-form" method="post" accept-charset="utf-8" action="user/login">-->
          <h3 class="login-head">Productos</h3>

          <div class="form-group">
            <?php 
        

            echo $this->Form->control('category_id', ['label' => 'category', 'class' => 'form-control', 'options' => $categories]);
            echo $this->Form->control('measurement_id', ['label' => 'Measurement', 'class' => 'form-control', 'options' => $measurements]);
             echo $this->Form->control('name', ['label' => 'name', 'class' => 'form-control']);
             echo $this->Form->control('price', ['label' => 'price', 'class' => 'form-control']);
             

            ?> 
          </div>
          <div class="form-group">

            <?php 
           echo $this->Form->control('purchases._ids', ['label' => 'Purchases', 'class' => 'form-control', 'options' => $purchases]);
           ?> 
            </div>

          <div class="form-group">
          </div>
          <div class="form-group btn-container">
            <div class="side-nav">
            
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
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
