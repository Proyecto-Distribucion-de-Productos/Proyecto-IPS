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
                                <li class="dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
                                <li class="dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
                                <li class="current dropdown"><?= $this->Html->link('Productos','/products')?></li>
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
    <section class="page-title" style="background-image:url(images/background/imagen-backg-1.png);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Productos</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Shop Single-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-9 col-md-12 col-sm-12">
                    <div class="product-details">
                        <!--Basic Details-->
                        <div class="basic-details">
                            <div class="row clearfix">
                                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                    <figure class="image-box"><a href="../../home/images/resource/products/product-single.jpg" class="lightbox-image" title="Image Caption Here"><img src="../../home/images/resource/products/product-single.jpg" alt=""></a></figure>
                                </div>
                                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="details-header">
                                            <h4><?= h($product->name) ?></h4>
                                            <div class="item-price">S/<?= $this->Number->format($product->price) ?></div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                            </div>
                                            <!--<span class="review">( 3 Customer Reviews )</span>-->
                                        </div>
                                        <div class="clearfix">
                                            <?php 
                                                $cantidad_total=0;
                                                foreach ($product->purchases as $purchases) :
                                                    $cantidad_total = $cantidad_total + (int)$purchases->_joinData->quantity;
                                                endforeach; 
                                                echo ("<button type='button' class='theme-btn btn-style-two'>Cantidad: $cantidad_total {$product->measurement->name}</button>");
                                            ?>
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
                                    <li data-tab="#prod-description" class="tab-btn active-btn">Proveedores</li>
                                </ul>

                                <!--Tabs Content-->
                                <div class="tabs-container tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-description">
                                        
                                        <?php if (!empty($query)) : ?>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th><?= __('#') ?></th>
                                                            <th><?= __('Proveedor') ?></th>
                                                            <th><?= __('Acciones') ?></th>
                                                        </tr>
                                                    </thead>
                                                    <?php for ($i = 0; $i < count($query); $i++) : ?>
                                                        <tr>
                                                            <td><?= h($i) ?></td>
                                                            <td><?= h($query[$i][2]) ?></td>
                                                            <td class="actions">
                                                                <?= $this->Html->link('Ver', ['controller' => 'Providers', 'action' => 'view', $query[$i][0]], ['class' => 'btn-style-one']) ?> 
                                                            </td>
                                                        </tr>
                                                    <?php endfor; ?>
                                                </table>
                                            
                                            </div>
                                        <?php else: ?>
                                            <div class="content">
                                                <p>No hay Proveedores Disponibles</p>
                                            </div>
                                        <?php endif; ?>
                                        <!--<div class="content">
                                            <p>One of the best hardware options available to the mining community, this product is quiet and efficient. It’s a true powerhouse, offering excellent performance with a reasonable price tag and comparatively low power consumption. If you need a reliable option for your mining rig, look no further. Can be set up to mine a number of currencies (bitcoin, bitcoin gold, monero, etc.), although take care to configure it properly as different cryptocurrencies require different settings.</p>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div><!-- End product info tabs -->
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h2>Categorias</h2></div>
                            <ul class="category-list">
                                <li><?= $this->Html->link('Todos los productos', ['action' => 'index']) ?></li>
                                <?php foreach ($categories as $category): ?>
                                    <li><?= $this->Html->link(h($category->name), ['controller'=>'categories','action' => 'view', $category->id]) ?></li>
                                <?php endforeach; ?>
                                <!--<li><a href="#">Cooling Kit  <span>12</span></a></li>-->
                            </ul>
                        </div>
                    </aside>
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