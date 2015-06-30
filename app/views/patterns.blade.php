@extends('basic')

@section('content')

            <!-- Main Container -->
            <div id="main-container">
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

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Alternative Sidebar Toggle Button -->
                        <li>
                            <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">
                                <i class="gi gi-share_alt"></i>
                                <span class="label label-primary label-indicator animation-floating">4</span>
                            </a>
                        </li>
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>
                                <li>
                                    <a href="page_ready_timeline.html">
                                        <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge pull-right">10</span>
                                        Updates
                                    </a>
                                    <a href="page_ready_inbox.html">
                                        <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge pull-right">5</span>
                                        Messages
                                    </a>
                                    <a href="page_ready_pricing_tables.html"><i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge pull-right">3</span>
                                        Subscriptions
                                    </a>
                                    <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                                        <span class="badge pull-right">11</span>
                                        FAQ
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="page_ready_user_profile.html">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Profile
                                    </a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="#modal-user-settings" data-toggle="modal">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                    <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                </li>
                                <li class="dropdown-header text-center">Activity</li>
                                <li>
                                    <div class="alert alert-success alert-alt">
                                        <small>5 min ago</small><br>
                                        <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                    </div>
                                    <div class="alert alert-info alert-alt">
                                        <small>10 min ago</small><br>
                                        <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                    </div>
                                    <div class="alert alert-warning alert-alt">
                                        <small>3 hours ago</small><br>
                                        <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                    </div>
                                    <div class="alert alert-danger alert-alt">
                                        <small>Yesterday</small><br>
                                        <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)" class="alert-link">New bug submitted</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Blank Alternative Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-brush"></i>Ga Comunicacion<br><small> de medios por estado</small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Blank Alternative Header -->

                    <!-- Blank Alternative Content -->
                    <div class="block block-alt-noborder">
                        {{ HTML::style('css/map.css') }}

                       <div id="modal_window" class="modal_window">
                           <div class="modal-container"></div>
                       </div>

                       <!-- Inicio Mapa de la republica -->
                       <section class="content map-iframe">
                           <div class="box box-solid">
                               <div id="map">
                                   <div id="tooltip"></div> <!-- aqui se despliegan los nombres de los estados -->
                                   <svg width="660" height="550" id="statesvg"></svg> <!-- area de dibujo -->
                               </div>
                           </div>
                       </section>
                       <!-- Fin Mapa de la republica -->

                       <!-- Inicio Mapa de la republica -->
                       <section class="content frame-catalog">
                           <div class="box box-solid">
                               <div id="catalog">
                               		<iframe src="{{ asset('catalogo.html') }}"></iframe>
                               </div>
                           </div>
                       </section>
                       <!-- Fin Mapa de la republica -->

                       <!-- Modal Mapa -->
                       <div id="modal-cst-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                       <h3 class="modal-title" id="">Modal Title</h3>
                                       <small class="modal-state">Estado</small>
                                   </div>
                                   <div class="modal-body">
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Capital.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario de Mexico.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario de Mexico USA.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario DF.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario Oficial de la Federacion.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Economista.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Grafico.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Reforma.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Sol de Mexico.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Universal.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Estadio.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Esto.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Excelsior.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-titulares"><img src="{{ asset('img/Impacto.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-titular"><img src="{{ asset('img/La Cronica.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-seguridad"><img src="{{ asset('img/La Jornada De Mexico.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-federal"><img src="{{ asset('img/La Prensa.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-estatal"><img src="{{ asset('img/La Razon.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-columnas"><img src="{{ asset('img/Mas Por Mas.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Metro DF.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Milenio.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Publimetro DF.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Punto Critico.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Record DF.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Reporte Indigo.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Rumbo de Mexico.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Siempre.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/The News.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Uno Mas Uno.jpg'); }}"></button>
                                       <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Veinticuatro Horas.jpg'); }}"></button>
                                      <!--<button type="button" class="btn btn-sm btn-primary btn-danger" id="btn-consultar-flipping">Flipping Book</button>-->
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- END Modal Mapa -->


                       <!-- jQuery 2.1.3 -->
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

                       <!-- INICIA SCRIPTS PARA EL MAPA DE CONSULTAS-->
                               {{ HTML::script( 'js/map.js' ) }}
                               <script type="text/javascript">     var _main_path = '{{ URL::to("/") }}';  </script>
                               <script src="http://d3js.org/d3.v3.min.js"></script>
                               <script>
                                   $("#modal-cst-info").hide();
                                   function tooltipHtml(n, d){ /* FUNCION PARA MOSTRAR EL NOMBRE DEL ESTADO EN EL MAPA :s */
                                       return "<h4>"+n+"</h4><p>Numero de Medios: "+Math.round(10*Math.random())+"</p>";
                                   }

                                   var sampleData ={};
                                   [ "SN", "VZ", "CHP", "OAX", "GRO", "TAB", "MIC", "PUE", "MOR", "EMX", "COL", "CAM", "JAL", "DF", "TLA", "HID",
                                   "GUA", "QUE", "YUC", "ZAC", "SLP", "AGU", "QROO", "NY", "DG", "NL", "COA", "SIN", "CH", "BCS", "BCN", "TAM"
                                   ].forEach(function(d){
                                       var low=Math.round(100*Math.random()),
                                       mid=Math.round(100*Math.random()),
                                       high=Math.round(100*Math.random());

                                       sampleData[d]={low:d3.min([low,mid,high]), high:d3.max([low,mid,high]),
                                           avg:Math.round((low+mid+high)/3), alter_color:d3.interpolate("#FE0000", "#FE0000")(low/100) , color:d3.interpolate("#848484", "#848484")(low/100)};
                                   });

                                   /* DIBUJAR LOS ESTADOS EN EN SVG */
                                   uStates.draw("#statesvg", sampleData, tooltipHtml);

                               </script>
                       <!-- FIN SCRIPTS PARA EL MAPA DE CONSULTAS-->
                    </div>
                    <!-- END Blank Alternative Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with  by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 2.1</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
@stop
