<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider[]|\Cake\Collection\CollectionInterface $providers
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Visualizaciones</title>

<!-- Stylesheets -->
<link href="home/css/bootstrap.css" rel="stylesheet">
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
                        <div class="">
                            <?= $this->Html->link('Ingresar','/admin/users/login',['class' => 'btn-style-one'])?>
                            <?= $this->Html->link('Registrarse','/admin/users/register',['class' => 'btn-style-one'])?>
                        </div>
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
                                    <li class="current dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
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
                                <li class="current dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
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
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Project detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Project detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="project-detail">
        <div class="auto-container">
            <!-- Upper box -->
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                       <div class="image-box"><a href="images/resource/project-detail.jpg" class="lightbox-image"><img src="images/resource/project-detail.jpg" alt=""></a></div>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <h2>At a Glance</h2>
                        <ul class="price-list">
                            <li>Axle <span>$149.95 Each</span></li>
                            <li>Front Brakes Repair <span>$49.95</span></li>
                            <li>Rear Brakes Repair <span>$59.95</span></li>
                            <li>Rear Brake Shoes <span>$65.25</span></li>
                            <li>Starters / Alternators <span>$225.95 Plus Parts</span></li>
                            <li>Blelts / Hoses <span> $65.25</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content">
                <h2>Brief Description</h2>
                <p>Tremendous opportunities are available at our reputable independent, family owned and operated auto body shop. We are looking for remark able teammates to fulfill our growing staffing needs. 100% customer satisfaction and quality repairs has always been a staple in our business model and we are expanding to help serve our loyal and growing customer base. We are looking for experienced, motivated employees that are willing to work in a team-oriented repair process/model</p>
                <p>We offer a full range of garage services to vehicle owners in Tucson. We can help you with everything from an oil change to an engine change Whether you drive a small car or medium sized truck or SUV, our mechanics strive to ensure that your vehicle will be performing at its best before leaving our car shop</p>
            </div>

            <!-- Two Columns -->
            <div class="two-column">
                <h3>Scope of wrok</h3>
                <div class="row clearfix">
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <p>We offer full range of garage services to vehicle owners in Tucson Our professionals know how to handle a wide range of car services We can handle any problem on both foreign.</p>
                        <ul class="list-style-one">
                            <li>We make auto repair and maintenance more convenient for you</li>
                            <li>We are a friendly, helpful and professional group of people</li>
                            <li>Our professionals know how to handle a wide range of car services</li>
                            <li>We get the job done right — the first time</li>
                            <li>Same day service for most repairs and maintenance</li>
                        </ul>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <a href="images/resource/image-1.jpg" class="lightbox-image"><img src="images/resource/image-1.jpg" alt=""></a>
                    </div>
                </div>
            </div>

            <!-- Project Info -->
             <div class="project-info">
                <div class="row clearfix">
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="info"><span class="icon fa fa-user"></span><strong>Client :</strong> TransGas</div>
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="info"><span class="icon fa fa-globe"></span><strong>Investors Website :</strong> <a href="index.html">www.clickhere.com</a></div>
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="info"><span class="icon fa fa-calendar"></span><strong>Construction Date :</strong> October 2015</div>
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="social-icons">
                            <span class="follow">Share :</span>
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-google-plus-g"></span></a>
                            <a href="#"><span class="fab fa-pinterest"></span></a>
                            <a href="#"><span class="fab fa-dribbble"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Check out our repair service for your car and get a free clean</h3>
                <a href="#" class="call-btn">Order Now</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- Main Footer -->
    <footer class="main-footer alternate" style="background-image: url(images/background/4.jpg);">
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <a href="index.html"><img src="images/footer-logo.png" alt=""></a>
                                </figure>
                            </div>
                            <div class="widget-content">
                                <div class="text">How to pursue pleasure rationally thats encounter consequences that extremely painful. Nor again is there anyones who loves or pursues or ut desires obtains pain of itself, because.</div>
                                <h4>Follow Us:</h4>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget services-widget">
                            <h2 class="widget-title">Our Services</h2>
                            <div class="widget-content">
                                <ul class="services-list">
                                    <li><a href="#">Engine Diagnostic & Repair</a></li>
                                    <li><a href="#">Maintanence Inspaection</a></li>
                                    <li><a href="#">Electrical System Diagnostic</a></li>
                                    <li><a href="#">Wheel Allignment & Installation</a></li>
                                    <li><a href="#">Air Conditioner Service & Repair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget gallery-widget">
                            <h2 class="widget-title">Instragram</h2>
                             <!--Footer Column-->
                            <div class="widget-content">
                                <div class="outer clearfix">
                                    <figure class="image">
                                        <a href="images/resource/feature-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-1.jpg" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/resource/feature-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2.jpg" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/resource/feature-3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-3.jpg" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/resource/feature-4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-4.jpg" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/resource/news-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-5.jpg" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/resource/news-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-6.jpg" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget news-widget">
                            <h2 class="widget-title">Latest News</h2>
                             <!--Footer Column-->
                            <div class="widget-content">
                                <div class="post">
                                    <h4><a href="#">Get Usefull Car Maintanence Tips From Our Expets</a></h4>
                                    <span class="date"><i class="far fa-calendar-check"></i>Aug 21, 2015</span>
                                </div>

                                <div class="post">
                                    <h4><a href="#">Get Usefull Car Maintanence Tips From Our Expets</a></h4>
                                    <span class="date"><i class="far fa-calendar-check"></i>Aug 21, 2015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © 2019 All Rights Reserved. by <a href="#"> Expert Themes</a></p>
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
<script src="home/js/jquery-ui.js"></script>
<script src="home/js/jquery.fancybox.js"></script>
<script src="home/js/owl.js"></script>
<script src="home/js/appear.js"></script>
<script src="home/js/wow.js"></script>
<script src="home/js/mixitup.js"></script>
<script src="home/js/script.js"></script>
<script src="home/js/color-settings.js"></script>
</body>
</html>
