<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
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
  <title>Proveedores</title>
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
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../img/usuario.jpg" alt="User Image">
                  <div>
                    <p class="app-sidebar__user-name"><?= $current_user['name']; ?></p>
                    <p class="app-sidebar__user-designation">Administrador</p>
                  </div>
                </div>
                <ul class="app-menu">
                  <li><?= $this->Html->link('Proveedores', ['controller' => 'Providers', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Productos', ['controller' => 'Products', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Categorias', ['controller' => 'Categories', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Medidas', ['controller' => 'Measurements', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Compras de Productos', ['controller' => 'ProductsPurchases', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Departamentos', ['controller' => 'Departments', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Distritos', ['controller' => 'Districts', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Provincias', ['controller' => 'Provinces', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Roles', ['controller' => 'Roles', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Telefonos', ['controller' => 'Phones', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                  <li><?= $this->Html->link('Reportes', ['controller' => 'Reports', 'action' => 'index'], ['class' => 'app-menu__item app-menu__label']) ?></li>
                </ul>
              </aside>
              <!-- End Sidebar menu-->
              <main class="app-content">
                <div class="app-title">
                  <div>
                    <h1><i class="fa fa-th-list"></i>Proveedores</h1>
                    <!--<p>Basic bootstrap tables</p>-->
                  </div>
                  <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <!--<li class="breadcrumb-item">Tables</li>-->
                    <li class="breadcrumb-item active"><a href="#">Providers</a></li>
                  </ul>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="tile">
                      <div class="tile-body">
                        <div class="table-responsive">
                          
                         <h3><?= h($provider->name) ?></h3>
                         <table class="table table-hover table-bordered" id="sampleTable">
                          <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($provider->name) ?></td>
                          </tr>
                          <tr>
                           <th><?= __('District') ?></th>
                           <td><?= $provider->has('district') ? $this->Html->link($provider->district->name, ['controller' => 'Districts', 'action' => 'view', $provider->district->id]) : '' ?></td>
                         </tr>
                         <tr>
                           <th><?= __('Province') ?></th>
                           <td><?= $provider->has('province') ? $this->Html->link($provider->province->name, ['controller' => 'Provinces', 'action' => 'view', $provider->province->id]) : '' ?></td>
                         </tr>
                         <tr>
                          <th><?= __('Department') ?></th>
                          <td><?= $provider->has('department') ? $this->Html->link($provider->department->name, ['controller' => 'Departments', 'action' => 'view', $provider->department->id]) : '' ?></td>
                        </tr>
                        <tr>
                          <th><?= __('Direction') ?></th>
                          <td><?= h($provider->direction) ?></td>
                        </tr>
                        <tr>
                          <th><?= __('Id') ?></th>
                          <td><?= $this->Number->format($provider->id) ?></td>
                        </tr>


                        <tr>
                          <th><?= $this->Paginator->sort('Acciones') ?></th>
                          <td class="actions">
                            <?= $this->Html->link('', ['action' => 'edit', $provider->id], ['class' => 'btn btn-warning fa fa-pencil']) ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $provider->id], ['confirm' => __('¿Estás seguro de que quieres eliminar # {0}?', $provider->id), 'class' => 'btn btn-danger fa fa-trash']) ?>
                          </td>
                        </tr>

                      </table>
                      <h4><?= __('Telefonos relacionados') ?></h4>
                      <table class="table table-hover table-bordered" id="sampleTable">
                       <tr>
                        <th><?= $this->Paginator->sort('Id') ?></th>
                        <th><?= $this->Paginator->sort('Provider Id') ?></th>
                        <th><?= $this->Paginator->sort('Number') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                      </tr>

                      <?php foreach ($provider->phones as $phones) : ?>
                        <tr>
                          <td><?= h($phones->id) ?></td>
                          <td><?= h($phones->provider_id) ?></td>
                          <td><?= h($phones->number) ?></td>
                          <td class="actions">
                            <?= $this->Html->link('', ['action' => 'view', $phones->id], ['class' => 'btn btn-info fa fa-eye']) ?>
                            <?= $this->Html->link('', ['action' => 'edit', $phones->id], ['class' => 'btn btn-warning fa fa-pencil']) ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $phones->id], ['confirm' => __('¿Estás seguro de que quieres eliminar # {0}?', $phones->id), 'class' => 'btn btn-danger fa fa-trash']) ?>

                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </table>



                    <div class="related">
                      <?php if (!empty($provider->products_purchases)): ?>
                        <h4><?= __('Compras de productos relacionados') ?></h4>
                        <?php if (!empty($provider->products_purchases)) : ?>
                          <div class="table-responsive">
                            <table>
                              <tr>
                                <th><?= $this->Paginator->sort('Id') ?></th>
                                <th><?= $this->Paginator->sort('Purchase Id') ?></th>
                                <th><?= $this->Paginator->sort('Provider Id') ?></th>
                                <th><?= $this->Paginator->sort('Product Id') ?></th>
                                <th><?= $this->Paginator->sort('Quantity') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                              </tr>

                              <?php foreach ($provider->products_purchases as $productsPurchases) : ?>
                                <tr>
                                  <td><?= h($productsPurchases->id) ?></td>
                                  <td><?= h($productsPurchases->purchase_id) ?></td>
                                  <td><?= h($productsPurchases->provider_id) ?></td>
                                  <td><?= h($productsPurchases->product_id) ?></td>
                                  <td><?= h($productsPurchases->quantity) ?></td>

                                  <td class="actions">
                                    <?= $this->Html->link('', ['action' => 'view', $productsPurchases->id], ['class' => 'btn btn-info fa fa-eye']) ?>
                                    <?= $this->Html->link('', ['action' => 'edit', $productsPurchases->id], ['class' => 'btn btn-warning fa fa-pencil']) ?>
                                    <?= $this->Form->postLink('', ['action' => 'delete', $productsPurchases->id], ['confirm' => __('¿Estás seguro de que quieres eliminar # {0}?', $productsPurchases->id), 'class' => 'btn btn-danger fa fa-trash']) ?>
                                  </td>
                                </tr>
                              <?php endforeach; ?>
                            </table>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </div>  
                    
                    <div class="related">
                      <?php if (!empty($provider->purchases)): ?>
                        <h4><?= __('Compras relacionadas') ?></h4>
                        <?php if (!empty($provider->purchases)) : ?>
                          <div class="table-responsive">
                            <table>
                             
                              <tr>
                                <th><?= $this->Paginator->sort('Id') ?></th>
                                <th><?= $this->Paginator->sort('Provider Id') ?></th>
                                <th><?= $this->Paginator->sort('Date') ?></th>
                                <th><?= $this->Paginator->sort('User Id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                              </tr>
                              <?php foreach ($provider->purchases as $purchases) : ?>
                                <tr>
                                  <td><?= h($purchases->id) ?></td>
                                  <td><?= h($purchases->provider_id) ?></td>
                                  <td><?= h($purchases->date) ?></td>
                                  <td><?= h($purchases->user_id) ?></td>

                                  <td class="actions">
                                    <?= $this->Html->link('', ['action' => 'view', $purchases->id], ['class' => 'btn btn-info fa fa-eye']) ?>
                                    <?= $this->Html->link('', ['action' => 'edit', $purchases->id], ['class' => 'btn btn-warning fa fa-pencil']) ?>
                                    <?= $this->Form->postLink('', ['action' => 'delete', $purchases->id], ['confirm' => __('¿Estás seguro de que quieres eliminar # {0}?', $purchases->id), 'class' => 'btn btn-danger fa fa-trash']) ?>
                                  </td>

                                </tr>
                              <?php endforeach; ?>
                            </table>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </div>

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
    <?= $this->Html->script('main.js',['type'=>'text/javascript']);?>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <?= $this->Html->script('main.js',['type'=>'text/javascript']);?>
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