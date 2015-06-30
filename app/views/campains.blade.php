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
                    <!-- Social Widgets Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-share_alt"></i>Campañas<br><small>Listado detallado de campañas</small>
                            </h1>
                        </div>
                    </div>
                    <!-- END Social Widgets Header -->

                    <!-- Advanced Widgets Alternative Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>
                        <div class="col-md-4">
                            <!-- Advanced Active Theme Color Widget Alternative -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background-dark">
                                        <div class="widget-options-left">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                        </div>
                                        <div class="widget-options">
                                            <button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></button>
                                        </div>
                                        <a href="page_ready_user_profile.html">
                                            <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="widget-image img-circle">
                                        </a>
                                        <h4 class="widget-content-light">
                                            <a href="page_ready_user_profile.html">Marca Primera</a><br>
                                            <small><i class="gi gi-pin"></i>Nombre de Campaña</small>
                                        </h4>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="list-group remove-margin">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>160</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-file fa-fw"></i> Medios</h4>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>90</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-briefcase fa-fw"></i> Anuncios</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <span class="pull-right"><strong>3.589</strong></span>
                                                <h4 class="list-group-item-heading remove-margin"><i class="fa fa-users fa-fw"></i> Estados</h4>
                                                <p class="list-group-item-text"></p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Advanced Active Theme Color Widget Alternative -->
                        </div>

                    </div>
                    <!-- END Advanced Widgets Alternative Row -->

                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">Ga Comunicación</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="htttp://www.gacomunicacion.com" target="_blank">Ga Comunicación</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
@stop

@section('scripts')
    @parent
        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/widgetsSocial.js"></script>
        <script>$(function(){ WidgetsSocial.init(); });</script>

@stop
