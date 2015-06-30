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
                               <i class="fa fa-table"></i>Facturas<br><small> listado de facturas y su status</small>
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
                                       <th class="text-center">Folio</th>
                                       <th class="text-center">Cliente</th>
                                       <th class="text-center">Contepto</th>
                                       <th class="text-center">Total</th>
                                       <th class="text-center">Status</th>
                                       <th class="text-center">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td class="text-center">29934</td>
                                       <td class="text-center">client1</td>
                                       <td class="text-center">concepto 1</td>
                                       <td class="text-center">$0.00</td>
                                       <td><span class="label label-primary">Pagado</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="text-center">29934</td>
                                       <td class="text-center">client1</td>
                                       <td class="text-center">concepto 1</td>
                                       <td class="text-center">$0.00</td>
                                       <td><span class="label label-danger">No Pagado</span></td>
                                       <td class="text-center">
                                           <div class="btn-group">
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                               <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                           </div>
                                       </td>
                                   </tr> <tr>
                                        <td class="text-center">29934</td>
                                        <td class="text-center">client1</td>
                                        <td class="text-center">concepto 1</td>
                                        <td class="text-center">$0.00</td>
                                        <td><span class="label label-primary">Pagado</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">29934</td>
                                        <td class="text-center">client1</td>
                                        <td class="text-center">concepto 1</td>
                                        <td class="text-center">$0.00</td>
                                        <td><span class="label label-danger">No Pagado</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr> <tr>
                                         <td class="text-center">29934</td>
                                         <td class="text-center">client1</td>
                                         <td class="text-center">concepto 1</td>
                                         <td class="text-center">$0.00</td>
                                         <td><span class="label label-primary">Pagado</span></td>
                                         <td class="text-center">
                                             <div class="btn-group">
                                                 <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                 <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="text-center">29934</td>
                                         <td class="text-center">client1</td>
                                         <td class="text-center">concepto 1</td>
                                         <td class="text-center">$0.00</td>
                                         <td><span class="label label-danger">No Pagado</span></td>
                                         <td class="text-center">
                                             <div class="btn-group">
                                                 <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                 <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                             </div>
                                         </td>
                                     </tr> <tr>
                                          <td class="text-center">29934</td>
                                          <td class="text-center">client1</td>
                                          <td class="text-center">concepto 1</td>
                                          <td class="text-center">$0.00</td>
                                          <td><span class="label label-primary">Pagado</span></td>
                                          <td class="text-center">
                                              <div class="btn-group">
                                                  <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                  <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="text-center">29934</td>
                                          <td class="text-center">client1</td>
                                          <td class="text-center">concepto 1</td>
                                          <td class="text-center">$0.00</td>
                                          <td><span class="label label-danger">No Pagado</span></td>
                                          <td class="text-center">
                                              <div class="btn-group">
                                                  <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                  <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                              </div>
                                          </td>
                                      </tr> <tr>
                                           <td class="text-center">29934</td>
                                           <td class="text-center">client1</td>
                                           <td class="text-center">concepto 1</td>
                                           <td class="text-center">$0.00</td>
                                           <td><span class="label label-primary">Pagado</span></td>
                                           <td class="text-center">
                                               <div class="btn-group">
                                                   <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                   <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="text-center">29934</td>
                                           <td class="text-center">client1</td>
                                           <td class="text-center">concepto 1</td>
                                           <td class="text-center">$0.00</td>
                                           <td><span class="label label-danger">No Pagado</span></td>
                                           <td class="text-center">
                                               <div class="btn-group">
                                                   <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                   <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                               </div>
                                           </td>
                                       </tr> <tr>
                                            <td class="text-center">29934</td>
                                            <td class="text-center">client1</td>
                                            <td class="text-center">concepto 1</td>
                                            <td class="text-center">$0.00</td>
                                            <td><span class="label label-primary">Pagado</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">29934</td>
                                            <td class="text-center">client1</td>
                                            <td class="text-center">concepto 1</td>
                                            <td class="text-center">$0.00</td>
                                            <td><span class="label label-danger">No Pagado</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr> <tr>
                                             <td class="text-center">29934</td>
                                             <td class="text-center">client1</td>
                                             <td class="text-center">concepto 1</td>
                                             <td class="text-center">$0.00</td>
                                             <td><span class="label label-primary">Pagado</span></td>
                                             <td class="text-center">
                                                 <div class="btn-group">
                                                     <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                     <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                 </div>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="text-center">29934</td>
                                             <td class="text-center">client1</td>
                                             <td class="text-center">concepto 1</td>
                                             <td class="text-center">$0.00</td>
                                             <td><span class="label label-danger">No Pagado</span></td>
                                             <td class="text-center">
                                                 <div class="btn-group">
                                                     <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                     <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                 </div>
                                             </td>
                                         </tr> <tr>
                                              <td class="text-center">29934</td>
                                              <td class="text-center">client1</td>
                                              <td class="text-center">concepto 1</td>
                                              <td class="text-center">$0.00</td>
                                              <td><span class="label label-primary">Pagado</span></td>
                                              <td class="text-center">
                                                  <div class="btn-group">
                                                      <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                      <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="text-center">29934</td>
                                              <td class="text-center">client1</td>
                                              <td class="text-center">concepto 1</td>
                                              <td class="text-center">$0.00</td>
                                              <td><span class="label label-danger">No Pagado</span></td>
                                              <td class="text-center">
                                                  <div class="btn-group">
                                                      <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                      <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                  </div>
                                              </td>
                                          </tr> <tr>
                                               <td class="text-center">29934</td>
                                               <td class="text-center">client1</td>
                                               <td class="text-center">concepto 1</td>
                                               <td class="text-center">$0.00</td>
                                               <td><span class="label label-primary">Pagado</span></td>
                                               <td class="text-center">
                                                   <div class="btn-group">
                                                       <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                       <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                   </div>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td class="text-center">29934</td>
                                               <td class="text-center">client1</td>
                                               <td class="text-center">concepto 1</td>
                                               <td class="text-center">$0.00</td>
                                               <td><span class="label label-danger">No Pagado</span></td>
                                               <td class="text-center">
                                                   <div class="btn-group">
                                                       <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                       <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                   </div>
                                               </td>
                                           </tr> <tr>
                                                <td class="text-center">29934</td>
                                                <td class="text-center">client1</td>
                                                <td class="text-center">concepto 1</td>
                                                <td class="text-center">$0.00</td>
                                                <td><span class="label label-primary">Pagado</span></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">29934</td>
                                                <td class="text-center">client1</td>
                                                <td class="text-center">concepto 1</td>
                                                <td class="text-center">$0.00</td>
                                                <td><span class="label label-danger">No Pagado</span></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr> <tr>
                                                 <td class="text-center">29934</td>
                                                 <td class="text-center">client1</td>
                                                 <td class="text-center">concepto 1</td>
                                                 <td class="text-center">$0.00</td>
                                                 <td><span class="label label-primary">Pagado</span></td>
                                                 <td class="text-center">
                                                     <div class="btn-group">
                                                         <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                         <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                     </div>
                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td class="text-center">29934</td>
                                                 <td class="text-center">client1</td>
                                                 <td class="text-center">concepto 1</td>
                                                 <td class="text-center">$0.00</td>
                                                 <td><span class="label label-danger">No Pagado</span></td>
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
                        Crafted with  by <a href="http://goo.gl/vNS3I" target="_blank">Ga Comunicación</a>
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

     {{ HTML::script('js/pages/tablesDatatablesBills.js') }}
     <script>$(function(){ TablesDatatables.init(); });</script>
@stop
