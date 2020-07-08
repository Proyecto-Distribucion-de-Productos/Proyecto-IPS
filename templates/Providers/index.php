<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider[]|\Cake\Collection\CollectionInterface $providers
 */
?>
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
        <li><a class="app-menu__item active" href="providers"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Proveedores</span></a></li>
        <li><a class="app-menu__item" href="products"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Productos</span></a></li>
        <li><a class="app-menu__item" href="users"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Usuarios</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Reportes</span></a></li>
      </ul>
    </aside>
<!-- End Sidebar menu-->
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Proveedores</h1>
          <!--<p>Basic bootstrap tables</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!--<li class="breadcrumb-item">Tables</li>-->
          <li class="breadcrumb-item active"><a href="#">Proveedores</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('#') ?></th>
                        <th><?= $this->Paginator->sort('Ruc') ?></th>
                        <th><?= $this->Paginator->sort('Nombre') ?></th>
                        <th><?= $this->Paginator->sort('Correo') ?></th>
                        <th><?= $this->Paginator->sort('Distrito') ?></th>
                        <th><?= $this->Paginator->sort('Provincia') ?></th>
                        <th><?= $this->Paginator->sort('Departamento') ?></th>
                        <th><?= $this->Paginator->sort('Dirección') ?></th>
                        <th class="actions"><?= __('Acciones') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($providers as $provider): ?>
                    <tr>
                        <td><?= $this->Number->format($provider->id) ?></td>
                        <td><?= h($provider->ruc) ?></td>
                        <td><?= h($provider->name) ?></td>
                        <td><?= h($provider->email) ?></td>
                        <td><?= $provider->has('district') ? $this->Html->link($provider->district->name, ['controller' => 'Districts', 'action' => 'view', $provider->district->id]) : '' ?></td>
                        <td><?= $provider->has('province') ? $this->Html->link($provider->province->name, ['controller' => 'Provinces', 'action' => 'view', $provider->province->id]) : '' ?></td>
                        <td><?= $provider->has('department') ? $this->Html->link($provider->department->name, ['controller' => 'Departments', 'action' => 'view', $provider->department->id]) : '' ?></td>
                        <td><?= h($provider->direction) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $provider->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provider->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?>
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


<!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
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
