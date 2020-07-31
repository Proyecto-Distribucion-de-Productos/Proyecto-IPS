<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title>Ubicaciones</title>
<!-- Stylesheets -->
<link href="../home/css/bootstrap.css" rel="stylesheet">
<link href="../home/css/style.css" rel="stylesheet">
<link href="../home/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="../home/css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="../home/css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<meta content="AJAX Chart,Chart from JSON,Choropleth Map,Circular Gauge,Dashboard,Gauges,Geo Chart,Geo Visualization,JSON Chart,JSON Plot,Table Layout" name="keywords" />
<meta content="AnyChart - JavaScript Charts designed to be embedded and integrated" name="description" /><!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://cdn.anychart.com/playground-css/maps_in_dashboard/USA_dashboard_multiselect/style.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.anychart.com/releases/8.0.1/css/anychart-ui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.anychart.com/releases/8.0.1/fonts/css/anychart-font.min.css" rel="stylesheet" type="text/css" />

<style>html, body, #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}</style>
</head>
<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
</div>
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
                        <li class="dropdown"><?= $this->Html->link('Proveedores','/providers')?></li>
                        <li class="dropdown"><?= $this->Html->link('Visualizaciones','/visualizations')?></li>
                        <li class="dropdown"><?= $this->Html->link('Productos','/products')?></li>
                        <li class="current dropdown"><?= $this->Html->link('Ubicaciones','/ubications')?></li>
                    </ul>
                </div>
            </nav><!-- Main Menu End-->
        </div>

    </div>
</div>
<!--End Sticky Header-->
</header>
 <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Ubicaciones</h1>
                <ul class="bread-crumb clearfix">
                
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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
        tableChart = getTableChart();
        mapChart = drawMap();
        tableCharts = getTableCharts();

        // Setting layout table
        var layoutTable = anychart.standalones.table();
        layoutTable.cellBorder(null);
        layoutTable.container('container');
        layoutTable.draw();

        function getTableChart() {
            var table = anychart.standalones.table();
            table.cellBorder(null);
            table.fontSize(11).vAlign('middle').fontColor('#212121');
            table.getCell(0, 0).colSpan(8).fontSize(14).vAlign('bottom').border().bottom('1px #dedede').fontColor('#7c868e');
            table.useHtml(true).contents([
                ['Productos del Departamento'],
                ['Nombre del Producto', 'Cantidad', 'Acciones'],
            ]);
            table.getRow(1).cellBorder().bottom('2px #dedede').fontColor('#7c868e');
            table.getRow(0).height(45).hAlign('center');
            table.getRow(1).height(35);
            table.getCol(0).width(300);
            table.getCol(1).hAlign('left');
            table.getCol(2).hAlign('left');
            table.getCol(2).width(100);
            return table;
        }

        function solidChart(value) {
            var gauge = anychart.gauges.circular();
            gauge.data([value, 100]);
            gauge.padding(5);
            gauge.margin(0);
            var axis = gauge.axis().radius(100).width(1).fill(null);
            axis.scale()
                    .minimum(0)
                    .maximum(100)
                    .ticks({interval: 1})
                    .minorTicks({interval: 1});
            axis.labels().enabled(false);
            axis.ticks().enabled(false);
            axis.minorTicks().enabled(false);

            var stroke = '1 #e5e4e4';
            gauge.bar(0).dataIndex(0).radius(80).width(40).fill('#64b5f6').stroke(null).zIndex(5);
            gauge.bar(1).dataIndex(1).radius(80).width(40).fill('#F5F4F4').stroke(stroke).zIndex(4);
            gauge.label().width('50%').height('25%').adjustFontSize(true).hAlign('center').anchor('center');
            gauge.label()
                    .hAlign('center')
                    .anchor('center')
                    .padding(5, 10)
                    .zIndex(1);
            gauge.background().enabled(false);
            gauge.fill(null);
            gauge.stroke(null);
            return gauge
        }

        function getTableCharts() {
            var table = anychart.standalones.table(2, 3);
            table.cellBorder(null);
            table.getRow(0).height(45);
            table.getRow(1).height(25);
            table.fontSize(11).useHtml(true).hAlign('center');
            table.getCell(0, 0).colSpan(3).fontSize(14).vAlign('bottom').border().bottom('1px #dedede');
            table.getRow(1).cellBorder().bottom('2px #dedede');
            populationChart = solidChart(0);
            areaChart = solidChart(0);
            houseSeatsChart = solidChart(0);
            table.contents([
                ['Categoria de Productos'],
                ['Categoria 1', 'Categoria 2', 'Categoria 3'],
                [populationChart, areaChart, houseSeatsChart]
            ]);
            return table;
        }

        function changeContent(ids) {
            var contents = [
                ['Productos del Departamento'],
                ['Nombre del Producto', 'Cantidad', 'Acciones']];
            var population = 0;
            var area = 0;
            var seats = 0;
            for (var i = 0; i < ids.length; i++) {
                var data = getDataId(ids[i]);
                population += parseInt(data['population']);
                area += parseInt(data['area']);
                seats += parseInt(data['house_seats']);
                /*label.width('100%').height('100%').text('').background().enabled(true).fill({
                    src: data['flag'],
                    mode: 'fit'
                });*/
                    

                //alert(data['value']);
                //Aqui se inserta los datos al hacer click en el mapa
                var a=[data['id'], data['value'], data['id']];
                contents.push(a);
          
            }

            populationChart.data([(population * 100 / getDataSum('population')).toFixed(2), 100]);
            populationChart.label().text((population * 100 / getDataSum('population')).toFixed(2) + '%');

            areaChart.data([(area * 100 / getDataSum('area')).toFixed(2), 100]);
            areaChart.label().text((area * 100 / getDataSum('area')).toFixed(2) + '%');

            houseSeatsChart.data([(seats * 100 / getDataSum('house_seats')).toFixed(2), 100]);
            houseSeatsChart.label().text((seats * 100 / getDataSum('house_seats')).toFixed(2) + '%');

            tableChart.contents(contents);
            for (i = 0; i < ids.length; i++) {
                tableChart.getRow(i + 2).maxHeight(35);
            }
        }

        function drawMap() {
            var map = anychart.map();
            //set map title settings using html
            map.title().padding(10, 0, 10, 0).margin(0).useHtml(true);
            map.title('Mapa de ubicación' +
                    '<br/>de proveedores');
            map.padding([0, 0, 10, 0]);
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
                return this.name + '<span style="font-size: 10px"> (since ' + data['statehood'] + ')</span>';
            });
            mapSeries.tooltip().format(function () {
                var data = getDataId(this.id);
                return '<span style="font-size: 12px; color: #b7b7b7">Capital: </span>' + data['id'];
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

            mapSeries.stroke(function () {
                this.iterator.select(this.index);
                var pointValue = this.iterator.get(this.referenceValueNames[1]);
                var color = this.colorScale.valueToColor(pointValue);
                return anychart.color.darken(color);
            });

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
                    [mapChart, tableCharts],
                    [null, tableChart]
                ], true);
                layoutTable.getCell(0, 0).rowSpan(2);
                layoutTable.getRow(0).height(null);
                layoutTable.getRow(1).height(null);
            } else {
                layoutTable.contents([
                    [mapChart],
                    [tableCharts],
                    [tableChart]
                ], true);
                layoutTable.getRow(0).height(350);
                layoutTable.getRow(1).height(200);
                layoutTable.getRow(2).height(250);
            }
            layoutTable.draw();
        }

        if (window.innerWidth > 768)
            fillInMainTable('wide');
        else {
            fillInMainTable('slim');
        }
        /*mapSeries.select(12);
        mapSeries.select(13);
        mapSeries.select(14);
        mapSeries.select(16);
        changeContent(['US.IN', 'US.KY', 'US.IL', 'US.IA']);*/

        // On resize changing layout to mobile version or conversely
        window.onresize = function () {
            if (layoutTable.colsCount() == 1 && window.innerWidth > 767) {
                fillInMainTable('wide');
            } else if (layoutTable.colsCount() == 2 && window.innerWidth <= 767) {
                fillInMainTable('slim');
            }
        };

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