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
                   <!-- Datatables Header -->
                   <div class="content-header">
                       <div class="header-section">
                           <h1>
                               <i class="fa fa-table"></i>Clientes<br><small> lista de clientes actualez de la agencia</small>
                           </h1>
                       </div>
                   </div>
                   <!-- END Datatables Header -->

                   <!-- Datatables Content -->
                   <div class="block full">
                       <div class="table-responsive">
                           <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                               <thead>
                                   <tr>
                                       <th class="text-center">ID</th>
                                       <th>Cliente</th>
                                       <th>Contacto</th>
                                       <th>Status</th>
                                       <th class="text-center">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td class="text-center">1</td>

                                       <td><a href="javascript:void(0)">client1</a></td>
                                       <td>client1@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">2</td>

                                       <td><a href="javascript:void(0)">client2</a></td>
                                       <td>client2@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">3</td>
                                       <td><a href="javascript:void(0)">client3</a></td>
                                       <td>client3@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">4</td>

                                       <td><a href="javascript:void(0)">client4</a></td>
                                       <td>client4@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">5</td>
                                       <td><a href="javascript:void(0)">client5</a></td>
                                       <td>client5@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">6</td>
                                       <td><a href="javascript:void(0)">client6</a></td>
                                       <td>client6@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">7</td>
                                       <td><a href="javascript:void(0)">client7</a></td>
                                       <td>client7@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">8</td>
                                       <td><a href="javascript:void(0)">client8</a></td>
                                       <td>client8@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">9</td>
                                       <td><a href="javascript:void(0)">client9</a></td>
                                       <td>client9@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">10</td>
                                       <td><a href="javascript:void(0)">client10</a></td>
                                       <td>client10@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">11</td>

                                       <td><a href="javascript:void(0)">client11</a></td>
                                       <td>client11@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">12</td>
                                       <td><a href="javascript:void(0)">client12</a></td>
                                       <td>client12@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">13</td>
                                       <td><a href="javascript:void(0)">client13</a></td>
                                       <td>client13@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">14</td>
                                       <td><a href="javascript:void(0)">client14</a></td>
                                       <td>client14@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">15</td>
                                       <td><a href="javascript:void(0)">client15</a></td>
                                       <td>client15@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">16</td>

                                       <td><a href="javascript:void(0)">client16</a></td>
                                       <td>client16@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">17</td>
                                       <td><a href="javascript:void(0)">client17</a></td>
                                       <td>client17@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">18</td>
                                       <td><a href="javascript:void(0)">client18</a></td>
                                       <td>client18@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">19</td>

                                       <td><a href="javascript:void(0)">client19</a></td>
                                       <td>client19@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">20</td>
                                       <td><a href="javascript:void(0)">client20</a></td>
                                       <td>client20@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">21</td>
                                       <td><a href="javascript:void(0)">client21</a></td>
                                       <td>client21@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">22</td>
                                       <td><a href="javascript:void(0)">client22</a></td>
                                       <td>client22@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">23</td>

                                       <td><a href="javascript:void(0)">client23</a></td>
                                       <td>client23@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">24</td>

                                       <td><a href="javascript:void(0)">client24</a></td>
                                       <td>client24@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">25</td>
                                       <td><a href="javascript:void(0)">client25</a></td>
                                       <td>client25@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">26</td>
                                       <td><a href="javascript:void(0)">client26</a></td>
                                       <td>client26@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">27</td>
                                       <td><a href="javascript:void(0)">client27</a></td>
                                       <td>client27@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">28</td>

                                       <td><a href="javascript:void(0)">client28</a></td>
                                       <td>client28@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">29</td>
                                       <td><a href="javascript:void(0)">client29</a></td>
                                       <td>client29@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">30</td>
                                       <td><a href="javascript:void(0)">client30</a></td>
                                       <td>client30@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">31</td>
                                       <td><a href="javascript:void(0)">client31</a></td>
                                       <td>client31@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">32</td>

                                       <td><a href="javascript:void(0)">client32</a></td>
                                       <td>client32@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">33</td>
                                       <td><a href="javascript:void(0)">client33</a></td>
                                       <td>client33@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">34</td>
                                       <td><a href="javascript:void(0)">client34</a></td>
                                       <td>client34@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">35</td>

                                       <td><a href="javascript:void(0)">client35</a></td>
                                       <td>client35@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">36</td>

                                       <td><a href="javascript:void(0)">client36</a></td>
                                       <td>client36@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">37</td>

                                       <td><a href="javascript:void(0)">client37</a></td>
                                       <td>client37@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">38</td>

                                       <td><a href="javascript:void(0)">client38</a></td>
                                       <td>client38@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">39</td>
                                       <td><a href="javascript:void(0)">client39</a></td>
                                       <td>client39@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">40</td>
                                       <td><a href="javascript:void(0)">client40</a></td>
                                       <td>client40@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">41</td>
                                       <td><a href="javascript:void(0)">client41</a></td>
                                       <td>client41@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">42</td>
                                       <td><a href="javascript:void(0)">client42</a></td>
                                       <td>client42@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">43</td>

                                       <td><a href="javascript:void(0)">client43</a></td>
                                       <td>client43@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">44</td>
                                       <td><a href="javascript:void(0)">client44</a></td>
                                       <td>client44@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">45</td>

                                       <td><a href="javascript:void(0)">client45</a></td>
                                       <td>client45@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">46</td>
                                       <td><a href="javascript:void(0)">client46</a></td>
                                       <td>client46@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">47</td>
                                       <td><a href="javascript:void(0)">client47</a></td>
                                       <td>client47@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">48</td>
                                       <td><a href="javascript:void(0)">client48</a></td>
                                       <td>client48@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">49</td>
                                       <td><a href="javascript:void(0)">client49</a></td>
                                       <td>client49@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">50</td>
                                       <td><a href="javascript:void(0)">client50</a></td>
                                       <td>client50@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">51</td>
                                       <td><a href="javascript:void(0)">client51</a></td>
                                       <td>client51@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">52</td>

                                       <td><a href="javascript:void(0)">client52</a></td>
                                       <td>client52@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">53</td>
                                       <td><a href="javascript:void(0)">client53</a></td>
                                       <td>client53@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">54</td>
                                       <td><a href="javascript:void(0)">client54</a></td>
                                       <td>client54@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">55</td>
                                       <td><a href="javascript:void(0)">client55</a></td>
                                       <td>client55@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">56</td>

                                       <td><a href="javascript:void(0)">client56</a></td>
                                       <td>client56@company.com</td>
                                       <td><span class="label label-info">Business</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">57</td>

                                       <td><a href="javascript:void(0)">client57</a></td>
                                       <td>client57@company.com</td>
                                       <td><span class="label label-warning">Trial</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">58</td>
                                       <td><a href="javascript:void(0)">client58</a></td>
                                       <td>client58@company.com</td>
                                       <td><span class="label label-primary">Personal</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">59</td>

                                       <td><a href="javascript:void(0)">client59</a></td>
                                       <td>client59@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">60</td>

                                       <td><a href="javascript:void(0)">client60</a></td>
                                       <td>client60@company.com</td>
                                       <td><span class="label label-success">VIP</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <!-- END Datatables Content -->
               </div>
               <!-- END Page Content -->

               <!-- Footer -->
               <footer class="clearfix">
                   <div class="pull-right">
                       Crafted with by <a href="http://goo.gl/vNS3I" target="_blank">Ga Comunicación</a>
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

@section ('scripts')
    @parent

     {{ HTML::script('js/pages/tablesDatatables.js') }}
     <script>$(function(){ TablesDatatables.init(); });</script>
@stop
