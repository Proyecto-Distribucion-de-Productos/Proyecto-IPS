<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <?= $this->Html->css('main.css');?>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <!--<header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>-->
    <header class="app-header"><?= $this->Html->link('Principal','/',['class'=>'app-header__logo'])?>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <!--<li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>-->
            <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-sign-out fa-lg']).'Cerrar Sesión','/admin/users/logout',['class' => 'dropdown-item', 'escape' => false])?></li>
          </ul>
        </li>
      </ul>
    </header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Tablero</span></a></li>
        <li><a class="app-menu__item" href="providers"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Proveedores</span></a></li>
        <li><a class="app-menu__item active" href="products"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Productos</span></a></li>
        <li><a class="app-menu__item" href="users"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Usuarios</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Reportes</span></a></li>
      </ul>
    </aside>
<!-- End Sidebar menu-->
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Productos</h1>
          <!--<p>Basic bootstrap tables</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!--<li class="breadcrumb-item">Tables</li>-->
          <li class="breadcrumb-item active"><a href="#">Productos</a></li>
        </ul>
    </div>
    <div class="row">
    <!-- Formulario para hacer el filtro-->
    <div class="col-md-12">
          <div class="tile">
             <?= $this->Form->create() ?>
             <?= $this->Form->control('category_id', ['options' => $categories]) ?>
             <?= $this->Form->button(__('Fitrar')) ?>
             <?= $this->Form->end() ?>
          </div>
    </div>


        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <div class="row mb-3">
                  <div class="col-sm-12 col-md-12"><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus', 'aria-hidden' => 'true']).'Nuevo', ['action' => 'add'],['class' => 'btn btn-success float-right', 'escape' => false])?></div>
                  <!--<div class="col-sm-12 col-md-12"><button class="btn btn-success float-right" type="button"><i class="fa fa-plus" aria-hidden="true"></i>Nuevo</button></div>-->
                </div>
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('category_id') ?></th>
                        <th><?= $this->Paginator->sort('measurement_id') ?></th>
                        <th><?= $this->Paginator->sort('name') ?></th>
                        <th><?= $this->Paginator->sort('price') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $this->Number->format($product->id) ?></td>
                            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                            <td><?= $product->has('measurement') ? $this->Html->link($product->measurement->name, ['controller' => 'Measurements', 'action' => 'view', $product->measurement->id]) : '' ?></td>
                            <td><?= h($product->name) ?></td>
                            <td><?= $this->Number->format($product->price) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('', ['action' => 'view', $product->id], ['class' => 'btn btn-info fa fa-eye']) ?>
                                <?= $this->Html->link('', ['action' => 'edit', $product->id], ['class' => 'btn btn-warning fa fa-pencil']) ?>
                                <?= $this->Form->postLink('', ['action' => 'delete', $product->id], ['confirm' => __('¿Estás seguro de que quieres eliminar # {0}?', $product->id), 'class' => 'btn btn-danger fa fa-trash']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>

<!-- Essential javascripts for application to work-->
    <?= $this->Html->script('jquery-3.2.1.min.js');?>
    <?= $this->Html->script('popper.min.js');?>
    <?= $this->Html->script('bootstrap.min.js');?>
    <?= $this->Html->script('main.js');?>
<!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <?= $this->Html->script('plugins/jquery.dataTables.min.js',['type'=>'text/javascript']);?>
    <?= $this->Html->script('plugins/dataTables.bootstrap.min.js',['type'=>'text/javascript']);?>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
</body>
</html>








