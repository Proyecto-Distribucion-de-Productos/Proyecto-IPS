
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Proveedores</title>

<!-- Stylesheets -->
<link href="home/css/bootstrap.css" rel="stylesheet">
<link href="home/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="home/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="home/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="home/css/style.css" rel="stylesheet">
<link href="home/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="home/css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="home/css/color-themes/default-theme.css" rel="stylesheet">

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
                    </nav>
                    <!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" >
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>PROVEEDORES</h1>
             
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Testimonials And BLogs -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12">

                </div>

                <!-- Blog Column -->
                <div class="blogs-column col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <?php foreach ($providers as $provider): ?>
                            <!-- News Block -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure><img src="home/images/resource/provider.jpg" alt=""></figure>
                                        <a href="home/images/resource/provider.jpg" class="lightbox-image"><i class="plus-icon"></i></a>
                                    </div>
                                    <div class="lower-content">
                                        <div class="content">
                                            <div class="date-and-like">
                                                <div class="like"><i class="fa fa-map-marker" aria-hidden="true"></i><span><?= $provider->department->name;?></span></div>
                                            </div>
                                            <h3><?= h($provider->name) ?></h3>
                                            
                                            <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-angle-double-right']).'Ver Mas',['action' => 'view', $provider->id],['class' => 'read-more', 'escape' => false])?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-center clearfix">
                        <ul class="clearfix">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials And BLogs -->

    <!-- Main Footer -->
    <footer class="main-footer">
       

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © 2020 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="home/js/jquery.js"></script>
<script src="home/js/popper.min.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="home/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="home/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="home/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="home/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="home/js/jquery-ui.js"></script>
<script src="home/js/jquery.fancybox.js"></script>
<script src="home/js/owl.js"></script>
<script src="home/js/appear.js"></script>
<script src="home/js/wow.js"></script>
<script src="home/js/mixitup.js"></script>
<script src="home/js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="home/js/map-script.js"></script>
<!--End Google Map APi-->
<script src="home/js/color-settings.js"></script>
</body>
</html>
