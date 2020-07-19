<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Productos</title>

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
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Products</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--content side-->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="shop-upper-box clearfix">
                        <div class="items-label pull-left">Showing 1-7 of 84 results</div>
                        <div class="sort-by pull-right">
                            <select class="custom-select-box">
                                <option>Default Sorting</option>
                                <option>Price: Lowest First</option>
                                <option>Price: Highest First</option>
                                <option>Ascending</option>
                                <option>Descending</option>
                            </select>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/1.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Flying Ninja</a></h3>
                                    <span class="price"><del>$15.00</del> $12.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/2.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Happy Ninja</a></h3>
                                    <span class="price">$18.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/3.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Patient Ninja</a></h3>
                                    <span class="price">$35.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/4.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Ninja Silhouette</a></h3>
                                    <span class="price">$20.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/5.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Premium Quality</a></h3>
                                    <span class="price">$35.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/6.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Ship Your Idea</a></h3>
                                    <span class="price"><del>$15.00</del> $12.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/7.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Ninja Silhouette</a></h3>
                                    <span class="price">$20.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/8.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Premium Quality</a></h3>
                                    <span class="price">$35.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/resource/products/9.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="shop-single.html">Ship Your Idea</a></h3>
                                    <span class="price"><del>$15.00</del> $12.00</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Product" required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h2>Categories</h2></div>
                            <ul class="category-list">
                                <li><a href="#">Cooling Kit  <span>12</span></a></li>
                                <li><a href="#">Engine Kit   <span>15</span></a></li>
                                <li><a href="#">Car Engine   <span>10</span></a></li>
                                <li><a href="#">Single Parts <span>08</span></a></li>
                                <li><a href="#">Break Kit    <span>05</span></a></li>
                            </ul>
                        </div>

                        <!--Price Filter Widget-->
                        <div class="sidebar-widget price-filter-widget">
                            <div class="sidebar-title"><h2>Filter by Price</h2></div>
                            <div class="widget-content">
                                <div class="range-slider-one clearfix">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="#" class="theme-btn btn-style-two">Filtter</a>
                                        </div>
                                        <div class="pull-right">
                                            <div class="title">Price:</div>
                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title"><h2>Popular Products</h2></div>
                            <div class="widget-content">
                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail.html"><img src="images/resource/products/thumb-1.jpg" alt=""></a></figure>
                                    <h4><a href="shop-detail.html">Woo Album #4</a></h4>
                                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                    <span class="price">$287</span>
                                </div>

                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail.html"><img src="images/resource/products/thumb-2.jpg" alt=""></a></figure>
                                    <h4><a href="shop-detail.html">Happy Ninja</a></h4>
                                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                    <span class="price">$18.00</span>
                                </div>

                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail.html"><img src="images/resource/products/thumb-3.jpg" alt=""></a></figure>
                                    <h4><a href="shop-detail.html">Ninja Silhouette</a></h4>
                                    <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>


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
