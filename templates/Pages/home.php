<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();
?>

<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Distribucion de Productos</title>

<!-- Stylesheets -->
<link href="home/css/bootstrap.css" rel="stylesheet">
<link href="home/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="home/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="home/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<!-- Error boton desplegable-->
<link href="home/css/style.css" rel="stylesheet">
<link href="home/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="home/css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="home/css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="home/images/favicon.png" type="image/x-icon">
<link rel="icon" href="home/images/favicon.png" type="image/x-icon">

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
    <header class="main-header header-style-three">

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
                        <div class="logo"><a href="index.html"><img src="home/images/logo-2.png" alt=""></a></div>
                    </div>
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
                    <!-- Main Menu -->
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
                                    <li class="current dropdown"><?= $this->Html->link('Principal','/')?></li>
                                    <li class="dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
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
        <!-- End Header Lower -->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="home/images/logo-small.png" alt="" title=""></a>
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
                                <li class="current dropdown"><?= $this->Html->link('Principal','/')?></li>
                                <li class="dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
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

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="home/images/main-slider/imagen-2IPS.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="home/images/main-slider/imagen-2IPS.jpg">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['550','600','550','550']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h4>Los datos están</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','700']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Seguros en nuestras manos</h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['700','700','450','450']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['5','5','5','5']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">Nosotros nos especializamos en tener la data <br> siempre actualizada.</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="auto"
                        data-whitespace="nowrap"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['105','105','105','105']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="home/images/main-slider/imagen-1IPS.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="home/images/main-slider/imagen-1IPS.jpg">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['550','600','550','550']"
                        data-whitespace="normal"
                        data-textalign="center"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','700']"
                        data-textalign="center"
                        data-whitespace="normal"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2> Informacion De los Proveedores contratados por el estado peruano</h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-textalign="center"
                        data-whitespace="normal"
                        data-width="['700','700','550','450']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['5','5','5','15']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="auto"
                        data-whitespace="nowrap"
                        data-textalign="center"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['105','105','105','105']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="home/images/main-slider/imagen-10IPS.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="home/images/main-slider/imagen-10IPS.jpg">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['490','490','490','490']"
                        data-whitespace="normal"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h4>Data Acualizada de los Productos para la</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['490','590','490','490']"
                        data-whitespace="normal"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>prevención del COVID-19</h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['490','490','390','490']"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['5','5','5','5']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">Utilizado en el Territorio Peruano</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['490','490','490','490']"
                        data-whitespace="nowrap"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['105','105','105','105']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Call to Action -->
    <section class="call-to-action style-two">
        <!--<div class="auto-container clearfix">
            <div class="title-box">
               <p>We provide them access to customers, schedule flexibility, and high-quality parts</p>
            </div>
            <div class="btn-box">
                <a href="#" class="theme-btn btn-style-one">Contact now</a>
            </div>
        </div>-->
    </section>
    <!-- End Call to Action -->


     <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Categorías</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>
            <div class="services-carousel owl-carousel owl-theme">
                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="home/images/resource/service-1.jpg" alt=""></figure>
                            <div class="title"><h4>Medicamentos</h4></div>
                        </div>
                        <div class="caption-box">
                            <div class="title-box">
                                <span class="icon flaticon-pistons"></span>
                                <h4><a href="service-detail.html">Medicamentos</a></h4>
                            </div>
                            <p>Los medicamentos son aquellas sustancias químicas que se utilizan para prevenir o modificar estados patológicos o explorar estados fisiológicos para beneficio de quien los recibe.</p>
                            <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-angle-double-right']).'Ver Medicamentos Disponibles',['controller'=>'products','action' => 'index'],['class' => 'read-more', 'escape' => false])?>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="home/images/resource/service-2.jpg" alt=""></figure>
                            <div class="title"><h4>Material Desinfectante</h4></div>
                        </div>
                        <div class="caption-box">
                            <div class="title-box">
                                <span class="icon flaticon-pistons"></span>
                                <h4><a href="service-detail.html">Material Desinfectante</a></h4>
                            </div>
                            <p>Cualquier sustancia química o algún agente físico utilizado para eliminar o inhibir el crecimiento de diversos microorganismos. Usualmente de baja toxicidad para la célula hospedera y usualmente se aplica sobre superficies.</p>
                            <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-angle-double-right']).'Ver Desinfectantes Disponibles',['controller'=>'products','action' => 'index'],['class' => 'read-more', 'escape' => false])?>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="home/images/resource/service-3.jpg" alt=""></figure>
                            <div class="title"><h4>Pruebas de Diagnóstico</h4></div>
                        </div>
                        <div class="caption-box">
                        <div class="title-box">
                                <span class="icon flaticon-electrical"></span>
                                <h4><a href="service-detail.html">Pruebas de Diagnóstico</a></h4>
                            </div>
                            <p>Una prueba diagnóstica tiene como fin establecer la presencia de salud o enfermedad, en cuyo caso puede, incluso, graduar el grado de afección.</p>
                            <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-angle-double-right']).'Ver Prubas de Diagnostico',['controller'=>'products','action' => 'index'],['class' => 'read-more', 'escape' => false])?>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="home/images/resource/service-4.jpg" alt=""></figure>
                            <div class="title"><h4>EPP</h4></div>
                        </div>
                        <div class="caption-box">
                            <div class="title-box">
                                <span class="icon flaticon-pistons"></span>
                                <h4><a href="service-detail.html">EPP</a></h4>
                            </div>
                            <p>Equipo o dispositivo destinado para ser utilizado por el trabajador, para protegerlo de uno o varios riesgos y aumentar su seguridad o su salud en el trabajo.</p>
                            <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-angle-double-right']).'Ver EPP Disponible',['controller'=>'products','action' => 'index'],['class' => 'read-more', 'escape' => false])?>
                        </div>
                    </div>
                </div>
                



            </div>
        </div>
    </section>
    <!-- End Services Section -->
    
    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(home/images/background/4.jpg);">
        

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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
<script src="home/js/map-script.js"></script>
<!--End Google Map APi-->
<script src="home/js/color-settings.js"></script>
</body>
</html>


