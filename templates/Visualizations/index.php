<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provider[]|\Cake\Collection\CollectionInterface $providers
 */
?>

<!DOCTYPE html>
<html lang="es">
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
                                    <li class="dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
                                    <li class="current dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
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
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Visualizaciones</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="project-detail">
        <div class="auto-container">
            <!-- Two Columns -->
            <div class="two-column">
                
                <div class="row clearfix">
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="highcharts-figure">
                            <div id="container1"></div>
                            <p class="highcharts-description">
                                En este reporte se podra ver la cantidad de productos que se adquirieron por cada categoria
                            </p>
                        </figure>
                    </div>
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="highcharts-figure">
                            <div id="container2"></div>
                            <p class="highcharts-description">
                                En este reporte se podra ver cuales son los productos mas frecuentes que se adquierieron
                            </p>
                        </figure>
                    </div>
                </div>  
            </div> 
        </div>
    </section>
    <section class="project-detail">
        <div class="auto-container">
            <!-- Two Columns -->
            <div class="two-column">
                <div class="row clearfix">
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="highcharts-figure">
                            <div id="container3"></div>
                            <p class="highcharts-description">
                                En este reporte se podra ver la cantidad de productos por proveedor
                            </p>
                        </figure>
                    </div>
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="highcharts-figure">
                            <div id="container4"></div>
                            <p class="highcharts-description">
                                En este reporte se podra ver los proveedores mas frecuentes contratados por el estado peruano
                            </p>
                        </figure>
                    </div>
                </div>  
            </div> 
        </div>
    </section>
    <!-- End Gallery section -->

    <!-- Main Footer -->
    <footer class="main-footer alternate">
        

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
<script src="home/js/jquery-ui.js"></script>
<script src="home/js/jquery.fancybox.js"></script>
<script src="home/js/owl.js"></script>
<script src="home/js/appear.js"></script>
<script src="home/js/wow.js"></script>
<script src="home/js/mixitup.js"></script>
<script src="home/js/script.js"></script>
<script src="home/js/color-settings.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>

<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<script src="https://code.highcharts.com/highcharts-3d.js"></script>


<!-- Reporte Productos según categoría -->
<script type="text/javascript">
    // Create the chart
Highcharts.chart('container1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Reporte Cantidad de productos por categoría'.bold()
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Cantidad de productos'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.0f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> en total<br/>'
    },

    series: [
        {
            name: "Cantidad",
            colorByPoint: true,
            data: [
                <?php
                 for ($i = 0; $i < count($productos_por_categoria); $i++) :
                ?>
                {
                    name: '<?php echo $productos_por_categoria[$i][1]?>',
                    y: <?php echo $productos_por_categoria[$i][2]?>,
                    drilldown: null
                },
                <?php endfor;?>
            ]
        }
    ]
});
</script>

<!-- Reporte cantidad de productos segun proveedor -->
<script type="text/javascript">
    Highcharts.chart('container3', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Reporte Cantidad de productos por proveedor'.bold()
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad de Productos'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Cantidad: <b>{point.y:.0f} Productos</b>'
        },
        series: [{
            name: 'Cantidad',
            data: [
                <?php
                 //for ($i = 0; $i < count($productos_por_proveedor); $i++) :
                for ($i = 0; $i < 27; $i++) :
                ?>
                ['<?php echo $productos_por_proveedor[$i][1]?>', <?php echo (int)$productos_por_proveedor[$i][2]?>],
                <?php endfor;?>
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.0f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
</script>

<!-- Reporte Productos mas frecuentes -->
<script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Reporte Cantidad de productos mas frecuentes'.bold()
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Cantidad',
        colorByPoint: true,
        data: [
            <?php
                 for ($i = 0; $i < count($productos_seleccionados); $i++) :
                ?>
                {
                    name: '<?php echo $productos_seleccionados[$i][1]?>',
                    y: <?php echo $productos_seleccionados[$i][2]?>, 
                },
            <?php endfor;?>
           ]
    }]
});
</script>

<!-- Reporte Proveedores mas frecuentes -->
<script type="text/javascript">
Highcharts.chart('container4', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Reporte de Proveedores mas frecuentes'.bold()
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Cantidad de Productos',
        data: [
            <?php
                 for ($i = 0; $i < count($proveedores_seleccionados); $i++) :
                ?>
                ['<?php echo $proveedores_seleccionados[$i][1]?>', <?php echo $proveedores_seleccionados[$i][2]?>],
            <?php endfor;?>
        ]
    }]
});
</script>

</body>
</html>
