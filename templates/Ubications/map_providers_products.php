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
<link id="theme-color-file" href="../home/css/color-themes/default-theme.css" rel="stylesheet">

<style type="text/css">
  .my-custom-scrollbar {
    position: relative;
    height: 800px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
    }
</style>

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
                                    <li class="dropdown"><?= $this->Html->link('Productos','/products')?></li>
                                    <li class="current dropdown"><?= $this->Html->link('Ubicaciones','/ubications')?></li>
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
                                <li class="dropdown"><?= $this->Html->link('Productos','/products')?></li>
                                <li class="current dropdown"><a href="#">Ubicaciones</a></li>
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
                <h1>Ubicaciones</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--<div id="container" class="two-column"></div> -->  
    <section class="project-detail">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Mapa de productos por departamento del Perú</h2>
            </div>
            <div class="two-column">
                <div class="row clearfix">
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <div id="container" style="height:800px;" class="center-block"></div>
                    </div>
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        
                        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Departamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < 20; $i++) { ?>
                                            <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            </tr>
                                            <tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
        </div> 
    </section>
        
<!-- Main Footer -->
<footer class="main-footer alternate" style="background-image: url(images/background/4.jpg);">
        

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

<script src="https://cdn.anychart.com/releases/8.0.1/geodata/countries/peru/peru.js"></script>

<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-base.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-ui.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-exports.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-circular-gauge.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-map.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-table.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-data-adapter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
<script type="text/javascript">var mapSeries, mapChart, tableCharts;
var dataSet, tableChart, populationChart, areaChart, houseSeatsChart;

anychart.onDocumentReady(function () {
    // The data used in this sample can be obtained from the CDN
    // https://cdn.anychart.com/samples-data/maps-in-dashboard/states-of-united-states-dashboard-with-multi-select/data.json
    
    anychart.data.loadJsonFile('../home/json/peru.json', function (data) {
        // pre-processing of the data
        //alert(data[14]['value']);
        for (var i = 0; i < data.length; i++) {
            data[i]['value'] = data[i]['value'];
            data[i]['short'] = data[i]['id'];
            data[i]['id'] = data[i]['id'];
        }
        dataSet = anychart.data.set(data);
        mapChart = drawMap();

        // Setting layout table
        var layoutTable = anychart.standalones.table();
        layoutTable.cellBorder(null);
        layoutTable.container('container');
        layoutTable.draw();

        function changeContent(ids) {
            var contents = [
                ['Productos del Departamento'],
                ['Nombre del Producto', 'Cantidad', 'Departamento']];
            for (var i = 0; i < ids.length; i++) {
                var data = getDataId(ids[i]);
                var purchases = <?php echo json_encode($mapa) ?>;
                alert(data['value']);
                //Aqui se inserta los datos al hacer click en el mapa
                for (var j = 0; j < purchases.length; j++) {
                    if(purchases[j][0] == data['value']){
                        for(var k = 0; k < purchases[j][1].length; k++){
                            contents.push([purchases[j][1][k][0], purchases[j][1][k][1], data['name']]);
                        }
                    }
                }
            }   
        }
        function drawMap() {
            var map = anychart.map();
            //set map title settings using html
            //map.padding([0, 0, 10, 0]);
            var credits = map.credits();
            credits.enabled(true);
            credits.url('https://en.wikipedia.org/wiki/List_of_states_and_territories_of_the_United_States');
            credits.text('Data source: https://en.wikipedia.org/wiki/List_of_states_and_territories_of_the_United_States');
            credits.logoSrc('https://en.wikipedia.org/static/favicon/wikipedia.ico');

            //set map Geo data
            map.geoData(anychart.maps['peru']);

            map.listen('pointsSelect', function (e) {
                var selected = [];
                var selectedPoints = e.seriesStatus[0].points;
                for (var i = 0; i < selectedPoints.length; i++) {
                    selected.push(selectedPoints[i].id);
                }
                changeContent(selected);
            });

            mapSeries = map.choropleth(dataSet);
            mapSeries.labels(null);
            mapSeries.tooltip().useHtml(true);
            mapSeries.tooltip().title().useHtml(true);
            mapSeries.tooltip().titleFormat(function () {
                var data = getDataId(this.id);
                return data['name'];
            });
            mapSeries.tooltip().format(function () {
                var data = getDataId(this.id);
                return '<span style="font-size: 12px; color: #b7b7b7">Código: </span>' + data['id'];
                //return '';
            });
            var scale = anychart.scales.ordinalColor([
                {less: 0},
                {from: 0, to: 5},
                {from: 5, to: 10},
                {from: 10, to: 15},
                {from: 15, to: 20},
                {from: 20, to: 25},
                {greater: 25}
            ]);
            scale.colors(['#81d4fa', '#4fc3f7', '#29b6f6', '#039be5', '#0288d1', '#0277bd', '#01579b']);
            mapSeries.hovered().fill('#f06292');
            mapSeries.selected()
                    .fill('#c2185b')
                    .stroke(anychart.color.darken('#c2185b'));
            mapSeries.colorScale(scale);

            /*mapSeries.stroke(function () {
                this.iterator.select(this.index);
                var pointValue = this.iterator.get(this.referenceValueNames[1]);
                var color = this.colorScale.valueToColor(pointValue);
                return anychart.color.darken(color);
            });*/

            var colorRange = map.colorRange();
            colorRange.enabled(true);
            colorRange.ticks().stroke('3 #ffffff').position('center').length(20).enabled(true);
            colorRange.colorLineSize(5);
            colorRange.labels().fontSize(11).padding(0, 0, 0, 0).format(function () {
                var range = this.colorRange;
                var name;
                //Rango para los colores
                if (isFinite(range.start + range.end)) {
                    name = range.start + ' - ' + range.end;
                } else if (isFinite(range.start)) {
                    name = 'After ' + range.start;
                } else {
                    name = 'Before ' + range.end;
                }
                return name
            });
            return map;
        }

        // Creates general layout table with two inside layout tables
        function fillInMainTable(flag) {
            if (flag == 'wide') {
                layoutTable.contents([
                    [mapChart],
                ], true);
            } else {
                layoutTable.contents([
                    [mapChart],
                ], true);
            }
            layoutTable.draw();
        }
        
        if (window.innerWidth > 768)
            fillInMainTable('wide');
        else {
            fillInMainTable('slim');
        }
        // On resize changing layout to mobile version or conversely
        /*window.onresize = function () {
            if (layoutTable.colsCount() == 1 && window.innerWidth > 767) {
                fillInMainTable('wide');
            } else if (layoutTable.colsCount() == 2 && window.innerWidth <= 767) {
                fillInMainTable('slim');
            }
        };*/
        
        function getDataId(id) {
            //id = 2;
            for (var i = 0; i < data.length; i++) {
                if (data[i].id == id) 
                    return data[i]
            }
        }

        function getDataSum(field) {
            var result = 0;
            for (var i = 0; i < data.length; i++) {
                result += parseInt(data[i][field])
            }
            return result
        }
        
        
    });
});</script>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<script src="../home/js/jquery.js"></script>
<script src="../home/js/popper.min.js"></script>
<script src="../home/js/bootstrap.min.js"></script>
<script src="../home/js/jquery-ui.js"></script>
<script src="../home/js/jquery.fancybox.js"></script>
<script src="../home/js/owl.js"></script>
<script src="../home/js/appear.js"></script>
<script src="../home/js/wow.js"></script>
<script src="../home/js/mixitup.js"></script>
<script src="../home/js/script.js"></script>
<script src="../home/js/color-settings.js"></script>

</body>
</html>