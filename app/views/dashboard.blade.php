@extends('basic')

@section('content')
<!-- Main Container -->
<div id="main-container">
    <!-- Header -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available header.navbar classes:

        'navbar-default'            for the default light header
        'navbar-inverse'            for an alternative dark header

        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
    -->
    <header class="navbar navbar-default">
        <!-- Left Header Navigation -->
        <ul class="nav navbar-nav-custom">
            <!-- Main Sidebar Toggle Button -->
            <li>
                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                    <i class="fa fa-bars fa-fw"></i>
                </a>
            </li>
            <!-- END Main Sidebar Toggle Button -->

            <!-- Template Options -->
            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="gi gi-settings"></i>
                </a>
                <ul class="dropdown-menu dropdown-custom dropdown-options">
                    <li class="dropdown-header text-center">Header Style</li>
                    <li>
                        <div class="btn-group btn-group-justified btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                        </div>
                    </li>
                    <li class="dropdown-header text-center">Page Style</li>
                    <li>
                        <div class="btn-group btn-group-justified btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                        </div>
                    </li>
                    <li class="dropdown-header text-center">Main Layout</li>
                    <li>
                        <button class="btn btn-sm btn-block btn-primary" id="options-header-top">Fixed Side/Header (Top)</button>
                        <button class="btn btn-sm btn-block btn-primary" id="options-header-bottom">Fixed Side/Header (Bottom)</button>
                    </li>
                    <li class="dropdown-header text-center">Footer</li>
                    <li>
                        <div class="btn-group btn-group-justified btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-primary" id="options-footer-static">Default</a>
                            <a href="javascript:void(0)" class="btn btn-primary" id="options-footer-fixed">Fixed</a>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- END Template Options -->
        </ul>
        <!-- END Left Header Navigation -->

        <!-- Search Form -->
        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom" role="search">
            <div class="form-group">
                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
            </div>
        </form>
        <!-- END Search Form -->
    </header>
    <!-- END Header -->

    <!-- Page content -->
    <div id="page-content">
        <!-- Dashboard Header -->
        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
        <div class="content-header content-header-media">
            <div class="header-section">
                <div class="row">
                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                        <h1>Bienvenido <strong>Demo</strong></h1>
                    </div>
                    <!-- END Main Title -->

                    <!-- Top Stats -->
                    <div class="col-md-8 col-lg-6">
                        <div class="row text-center">
                            <div class="col-xs-4 col-sm-3">
                                <h2 class="animation-hatch">
                                    $<strong>93</strong><br>
                                    <small><i class="fa fa-thumbs-o-up"></i> Clientes</small>
                                </h2>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                                <h2 class="animation-hatch">
                                    <strong>167</strong><br>
                                    <small><i class="fa fa-heart-o"></i> Campañas</small>
                                </h2>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                                <h2 class="animation-hatch">
                                    <strong>101</strong><br>
                                    <small><i class="fa fa-calendar-o"></i> Eventos</small>
                                </h2>
                            </div>
                            <!-- We hide the last stat to fit the other 3 on small devices -->
                            <div class="col-sm-3 hidden-xs">
                                <h2 class="animation-hatch">
                                    <strong>27&deg; C</strong><br>
                                    <small><i class="fa fa-map-marker"></i> Hoy</small>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- END Top Stats -->
                </div>
            </div>
            <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
            <img src="img/background.jpg" alt="header image">
        </div>
        <!-- END Dashboard Header -->

        <!-- Advanced Stats Widgets with Flot Charts Row -->
                       <div class="row">
                           <div class="col-md-6">
                               <!-- Large Widget (Active Color Theme Light) -->
                               <div class="widget">
                                   <div class="widget-advanced widget-advanced-alt">
                                       <!-- Widget Header -->
                                       <div class="widget-header text-center themed-background">
                                           <h3 class="widget-content-light text-left pull-left animation-pullDown">
                                               <strong>Sales &amp; Earnings</strong><br>
                                               <small>2013</small>
                                           </h3>
                                           <!-- Flot Charts (initialized in js/pages/widgetsStats.js), for more examples you can check out http://www.flotcharts.org/ -->
                                           <div id="chart-widget1" class="chart"></div>
                                       </div>
                                       <!-- END Widget Header -->

                                       <!-- Widget Main -->
                                       <div class="widget-main">
                                           <div class="row text-center">
                                               <div class="col-xs-4">
                                                   <h3 class="animation-hatch"><strong>7.500</strong><br><small>Clients</small></h3>
                                               </div>
                                               <div class="col-xs-4">
                                                   <h3 class="animation-hatch"><strong>10.970</strong><br><small>Sales</small></h3>
                                               </div>
                                               <div class="col-xs-4">
                                                   <h3 class="animation-hatch"><strong>$ 31.230</strong><br><small>Earnings</small></h3>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- END Widget Main -->
                                   </div>
                               </div>
                               <!-- END Large Widget (Active Color Theme Light) -->
                           </div>
                           <div class="col-md-6">
                               <!-- Large Widget (Active Color Theme Dark) -->
                               <div class="widget">
                                   <div class="widget-advanced widget-advanced-alt">
                                       <!-- Widget Header -->
                                       <div class="widget-header text-center themed-background-dark">
                                           <h3 class="widget-content-light text-left pull-left animation-pullDown">
                                               <strong>Sales &amp; Earnings</strong><br>
                                               <small>2013</small>
                                           </h3>
                                           <!-- Flot Charts (initialized in js/pages/widgetsStats.js), for more examples you can check out http://www.flotcharts.org/ -->
                                           <div id="chart-widget2" class="chart"></div>
                                       </div>
                                       <!-- END Widget Header -->

                                       <!-- Widget Main -->
                                       <div class="widget-main">
                                           <div class="row text-center">
                                               <div class="col-xs-4">
                                                   <h3 class="animation-hatch"><i class="gi gi-group"></i> <br><small><strong>7.500</strong></small></h3>
                                               </div>
                                               <div class="col-xs-4">
                                                   <h3 class="animation-hatch"><i class="gi gi-briefcase"></i><br><small><strong>10.970</strong></small></h3>
                                               </div>
                                               <div class="col-xs-4">
                                                   <h3 class="animation-hatch"><i class="gi gi-money"></i><br><small><strong>$ 31.230</strong></small></h3>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- END Widget Main -->
                                   </div>
                               </div>
                               <!-- END Large Widget (Active Color Theme Dark) -->
                           </div>
                       </div>
                       <!-- END Advanced Stats Widgets with Flot Charts Row -->
    </div>
    <!-- END Page Content -->

    <!-- Footer -->
    <footer class="clearfix">
        <div class="pull-right">
            Crafted with  by <a href="http://goo.gl/vNS3I" target="_blank">Ga Comunicación</a>
        </div>
        <div class="pull-left">
            <span id="year-copy"></span> &copy; <a href="htttp://www.gacomunicacion.com" target="_blank">Ga Comunicación</a>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Main Container -->

@stop

@section('scripts')
    @parent()
        {{ HTML::script('/js/pages/widgetsStats.js') }}
        <script>$(function(){ WidgetsStats.init(); });</script>
@stop
