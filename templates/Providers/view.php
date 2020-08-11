<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Proveedores</title>
<!-- Stylesheets -->
<?= $this->Html->css('../home/css/bootstrap.css',['rel'=>'stylesheet']);?>
<?= $this->Html->css('../home/css/style.css',['rel'=>'stylesheet']);?>
<?= $this->Html->css('../home/css/responsive.css',['rel'=>'stylesheet']);?>
<!--Color Switcher Mockup-->
<?= $this->Html->css('../home/css/color-switcher-design.css',['rel'=>'stylesheet']);?>

<!--Color Themes-->
<link id="theme-color-file" href="../../home/css/color-themes/default-theme.css" rel="stylesheet">

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
                                            <?= $this->Html->link('Tablero de Administrador','/admin/providers',['class' => 'dropdown-item'])?>
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
                                    <li class="current dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Productos','/products')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Ubicaciones','/ubications')?></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
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
                                <li class="current dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
                                <li class="dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
                                <li class="dropdown"><?= $this->Html->link('Productos','/products')?></li>
                                <li class="dropdown"><?= $this->Html->link('Ubicaciones','/ubications')?></li>
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
    <section class="page-title">
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
<<<<<<< HEAD
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="product-details">

                        <!--Basic Details-->
                        <div class="">
                            <div class="row clearfix">
                                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                    <figure class="image-box"><a href="../../home/images/resource/products/product-single.jpg" class="lightbox-image" title="Image Caption Here"><img src="../../home/images/resource/products/product-single.jpg" alt=""></a></figure>
                                </div>
                                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="details-header">
                                            <h3><?= h($provider->name) ?></h3>
                                            <!--<span class="review">( 3 Customer Reviews )</span>-->
                                        </div>
                                        <div class="clearfix">
                                            <div class="text">
                                            
                                            <div class="providers view content">
                                                <table class="table table-striped table-responsive">
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
                                                    <tr>
                                                        <th><?= __('Teléfono') ?></th>
                                                        <?php if (!empty($provider->phones)) : ?>
                                                        <td>
                                                        <?php foreach ($provider->phones as $phones) : ?>
                                                            <?= h($phones->number) ?><br>
                                                        <?php endforeach; ?>
                                                        </td>
                                                        <?php endif; ?>
                                                    </tr>
                                                
                                                </table> 
                                            </div>
                                            </div>
                                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Basic Details-->
                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">

                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box" id="product-tabs">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-description" class="tab-btn active-btn">Productos</li>
                                </ul>

                                <!--Tabs Content-->
                                <div class="tabs-container tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-description">
                                    <?php if (!empty($provider->products_purchases)) : ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th><?= __('#') ?></th>
                                                <th><?= __('Nombre Producto') ?></th>
                                                <th><?= __('Cantidad') ?></th>
                                                <th class="actions"><?= __('Acciones') ?></th>
                                                
                                            </tr>
                                            <?php 
                                                $i=0;
                                                foreach ($provider->products_purchases as $productsPurchases) : 
                                            ?>
                                            <tr>
                                                <td><?= h($i+1) ?></td>
                                                <td><?= h($productos[$i][0]) ?></td>
                                                <td><?= h($productsPurchases->quantity) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link('Ver', ['controller' => 'Products', 'action' => 'view', $productsPurchases->product_id], ['class' => 'btn-style-one']) ?> 
                                                </td>
                                            </tr>
                                            <?php 
                                                $i++;
                                                endforeach; ?>
                                        </table>
                                    </div>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End product info tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Shop Single-->
    <!-- Main Footer -->
    <footer class="main-footer alternate">
        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © 2020 All Rights Reserved. </p>
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