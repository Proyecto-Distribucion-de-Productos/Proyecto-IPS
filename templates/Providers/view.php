<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider $provider
 */
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<title>Productos</title>

<!-- Stylesheets -->
<?= $this->Html->css('../home/css/bootstrap.css',['rel'=>'stylesheet']);?>
<?= $this->Html->css('../home/css/style.css',['rel'=>'stylesheet']);?>
<?= $this->Html->css('../home/css/responsive.css',['rel'=>'stylesheet']);?>
<!--Color Switcher Mockup-->
<?= $this->Html->css('../home/css/color-switcher-design.css',['rel'=>'stylesheet']);?>

<!--Color Themes-->
<link id="theme-color-file" href="../../home/css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-four">

        <!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li>Realice consultas sobre los proveedores y productos disponibles<i class="fa fa-long-arrow-alt-right"></i></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <!-- Botones ingresar y registrarse-->
                            <?php if(isset($current_user)):?>
                                <?php if($current_user['role'] === 'Administrador'):?>
                                    <div class="dropdown">
                                        <?= $this->Html->link($current_user['name'],'#',['class' => 'btn-style-one dropdown-toggle', 'data-toggle'=>'dropdown'])?>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?= $this->Html->link('Tablero de Administrador','/admin/dashboard',['class' => 'dropdown-item'])?>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Perfil</a>
                                            <?= $this->Html->link('Cerrar Sesión','/admin/users/logout',['class' => 'dropdown-item'])?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="dropdown">
                                        <?= $this->Html->link($current_user['name'],'#',['class' => 'btn-style-one dropdown-toggle', 'data-toggle'=>'dropdown'])?>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Perfil</a>
                                            <?= $this->Html->link('Cerrar Sesión','/admin/users/logout',['class' => 'dropdown-item'])?>
                                        </div>
                                    </div>
                                <?php endif ?>             
                            <?php else: ?>
                                <?= $this->Html->link('Ingresar','/admin/users/login',['class' => 'btn-style-one'])?>
                                <?= $this->Html->link('Registrarse','/admin/users/register',['class' => 'btn-style-one'])?>  
                            <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><?= $this->Html->link('Principal','/')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
                                    <li class="current dropdown"><?= $this->Html->link('Productos','/products')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Ubicaciones','/ubications')?></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!--outer Box-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="dropdown dropdown-outer">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--End outer Box-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><?= $this->Html->link('Principal','/')?></li>
                                <li class="dropdown"><a href="#">Proveedores</a></li>
                                <li class="dropdown"><a href="#">Visualizaciones</a></li>
                                <li class="current dropdown"><?= $this->Html->link('Productos','/products')?></li>
                                <li class="dropdown"><a href="#">Ubicaciones</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/imagen-backg-1.png);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Proveedores</h1>
               
            </div>

            
        </div>

        
    </section>
    <!--End Page Title-->

    <!--Shop Single-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-9 col-md-12 col-sm-12">
                <div class="row">
   
    <div class="column-responsive column-80">
   
        <div class="providers view content">
     
            <h3><?= h($provider->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($provider->name) ?></td>
                </tr>
              
                <tr>
                    <th><?= __('Distrito') ?></th>
                    <td><?= $provider->has('district') ? h($provider->district->name) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Provincia') ?></th>
                    <td><?= $provider->has('province') ? h($provider->province->name) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $provider->has('department') ? h($provider->department->name) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dirección') ?></th>
                    <td><?= h($provider->direction) ?></td>
                </tr>
             
            </table>
            <div class="related">
                <h4><?= __('Teléfono') ?></h4>
                <?php if (!empty($provider->phones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            
                            <th><?= __('Number') ?></th>
                           
                        </tr>
                        <?php foreach ($provider->phones as $phones) : ?>
                        <tr>
                           
                            <td><?= h($phones->number) ?></td>
                           
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Compra de productos relacionados') ?></h4>
                <?php if (!empty($provider->products_purchases)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Compra Id') ?></th>
                            
                            <th><?= __('Producto Id') ?></th>
                            
                            <th><?= __('Cantidad') ?></th>
                            
                        </tr>
                        <?php foreach ($provider->products_purchases as $productsPurchases) : ?>
                        <tr>
                            <td><?= h($productsPurchases->id) ?></td>
                            <td><?= h($productsPurchases->purchase_id) ?></td>
                           
                            <td><?= h($productsPurchases->product_id) ?></td>
                            
                            <td><?= h($productsPurchases->quantity) ?></td>
                        
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Compras Relacionadas') ?></h4>
                <?php if (!empty($provider->purchases)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Proveedor Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            
                           
                        </tr>
                        <?php foreach ($provider->purchases as $purchases) : ?>
                        <tr>
                            <td><?= h($purchases->id) ?></td>
                            <td><?= h($purchases->provider_id) ?></td>
                            <td><?= h($purchases->date) ?></td>
                            
                         
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
                </div>

             
            </div>
        </div>
    </div>
    <!--End Shop Single-->
    <!-- Main Footer -->
    <footer class="main-footer alternate" style="background-image: url(images/background/4.jpg);">
       

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © 2020 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<?= $this->Html->script('../home/js/jquery.js');?>
<?= $this->Html->script('../home/js/popper.min.js');?>
<?= $this->Html->script('../home/js/bootstrap.min.js');?>
<?= $this->Html->script('../home/js/jquery-ui.js');?>
<?= $this->Html->script('../home/js/jquery.fancybox.js');?>
<?= $this->Html->script('../home/js/jquery.bootstrap-touchspin.js');?>
<?= $this->Html->script('../home/js/owl.js');?>
<?= $this->Html->script('../home/js/appear.js');?>
<?= $this->Html->script('../home/js/wow.js');?>
<?= $this->Html->script('../home/js/mixitup.js');?>
<?= $this->Html->script('../home/js/script.js');?>
<?= $this->Html->script('../home/js/color-settings.js');?>
</body>
</html>