<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mengaji Online">
        <meta name="author" content="Mubaligh Id">
        <!--alerts CSS -->
        <link href="<?= asset('theme/skin') ?>/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">  <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('theme/skin') ?>/assets/images/favicon.png">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Custom CSS -->
        <link href="<?= asset('theme/skin') ?>/dist/css/style.min.css" rel="stylesheet">

    </head>

    <body class="skin-blue fixed-layout">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Adminsitrator Area</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?= url('/admin') ?>">

                            <span class="hidden-xs"><span class="font-bold">Mubaligh.</span>Id</span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <!--                            <li class="nav-item">
                                                            <form class="app-search d-none d-md-block d-lg-block">
                                                                <input type="text" class="form-control" placeholder="Search & enter">
                                                            </form>
                                                        </li>-->
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">

                            @if(Auth::guard('admin')->check())
<!--                            <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                                <div class="dropdown-menu animated bounceInDown">
                                    <ul class="mega-dropdown-menu row">


                                        <li class="col-lg-3 col-xlg-4 m-b-30">
                                            <h4 class="m-b-20">Data Induk</h4>
                                             List style 
                                            <ul class="list-style-none">
                                                <li><a href="<?= url('/admin/kategori') ?>" ><i class="fa fa-book text-success"></i> Kategori</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>-->
                            <li class="nav-item dropdown u-pro">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= asset('theme/skin') ?>/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">{{ Auth::user()->name }} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                    <!-- text-->
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                    <!-- text-->
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                    <!-- text-->
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                    <!-- text-->
                                    <div class="dropdown-divider"></div>
                                    <!-- text-->
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                    <!-- text-->
                                    <div class="dropdown-divider"></div>
                                    <!-- text-->
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i>  {{ __('Logout') }}</a>
                                    <!-- text-->
                                </div>
                            </li>
                            @endif
                            <!-- User Profile -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- End User Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
<!--                            <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?= asset('theme/skin') ?>/assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Prof. Mark</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </li>-->
                            <li class="nav-small-cap">--- PERSONAL</li>
                            <li> <a class="waves-effect waves-dark" href="<?= url('/admin') ?>"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Data Induk</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)" class="_mtransaksi" data-coba="kategori">Kategori</a></li>
                                    <li><a href="app-chat.html">Chat app</a></li>
                                    <li><a href="app-ticket.html">Support Ticket</a></li>
                                    <li><a href="app-contact.html">Contact / Employee</a></li>
                                    <li><a href="app-contact2.html">Contact Grid</a></li>
                                    <li><a href="app-contact-detail.html">Contact Detail</a></li>
                                </ul>
                            </li>
<!--                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-email.html">Mailbox</a></li>
                                    <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                    <li><a href="app-compose.html">Compose Mail</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-user-card.html">User Cards</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-tab.html">Tab</a></li>
                                    <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                    <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                    <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-range-slider.html">Range slider</a></li>
                                    <li><a href="ui-timeline.html">Timeline</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                    <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                    <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                    <li><a href="ui-list-media.html">List Media</a></li>
                                    <li><a href="ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                    <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- PROFESSIONAL</li>
                            <li> <a class="waves-effect waves-dark" href="university-events.html"><i class="ti-calendar"></i><span class="hide-menu">Event</span></a>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Professors</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="university-professors.html">All Professors</a></li>
                                    <li><a href="university-add-professor.html">Add Professor</a></li>
                                    <li><a href="university-edit-professor.html">Edit Professor</a></li>
                                    <li><a href="university-professor-profile.html">Professor Profile</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-graduation-cap"></i><span class="hide-menu">Students</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="university-students.html">All Students</a></li>
                                    <li><a href="university-add-student.html">Add Student</a></li>
                                    <li><a href="university-edit-student.html">Edit Student</a></li>
                                    <li><a href="university-student-profile.html">Student Profile</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-bars"></i><span class="hide-menu">Courses</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="university-courses.html">All Courses</a></li>
                                    <li><a href="university-add-course.html">Add Course</a></li>
                                    <li><a href="university-edit-course.html">Edit Course</a></li>
                                    <li><a href="university-course-info.html">Course Information</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Library</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="university-library-assets.html">Library Assets</a></li>
                                    <li><a href="university-add-asset.html">Add Library Asset</a></li>
                                    <li><a href="university-edit-asset.html">Edit Library Asset</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu">Department</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="university-departments.html">Departments</a></li>
                                    <li><a href="university-add-department.html">Add Department</a></li>
                                    <li><a href="university-edit-department.html">Edit Department</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Reports</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="university-general-report.html">General Report</a></li>
                                    <li><a href="university-income-report.html">Income Report</a></li>
                                    <li><a href="university-expense-report.html">Expense Report</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layouts</a></li>
                                    <li><a href="form-addons.html">Form Addons</a></li>
                                    <li><a href="form-material.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Floating Lable</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-icheck.html">Icheck control</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                    <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                    <li><a href="form-typehead.html">Form Typehead</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                                    <li><a href="form-summernote.html">Summernote Editor</a></li>
                                    <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="table-basic.html">Basic Tables</a></li>
                                    <li><a href="table-layout.html">Table Layouts</a></li>
                                    <li><a href="table-data-table.html">Data Tables</a></li>
                                    <li><a href="table-footable.html">Footable</a></li>
                                    <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                                    <li><a href="table-responsive.html">Responsive Table</a></li>
                                    <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                                    <li><a href="table-editable-table.html">Editable Table</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="widget-data.html">Data Widgets</a></li>
                                    <li><a href="widget-apps.html">Apps Widgets</a></li>
                                    <li><a href="widget-charts.html">Charts Widgets</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="layout-single-column.html">1 Column</a></li>
                                    <li><a href="layout-fix-header.html">Fix header</a></li>
                                    <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                                    <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                                    <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                    <li><a href="layout-logo-center.html">Logo in Center</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge badge-pill badge-info">25</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="starter-kit.html">Starter Kit</a></li>
                                    <li><a href="pages-blank.html">Blank page</a></li>
                                    <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="pages-login.html">Login 1</a></li>
                                            <li><a href="pages-login-2.html">Login 2</a></li>
                                            <li><a href="pages-register.html">Register</a></li>
                                            <li><a href="pages-register2.html">Register 2</a></li>
                                            <li><a href="pages-register3.html">Register 3</a></li>
                                            <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                            <li><a href="pages-recover-password.html">Recover password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-profile.html">Profile page</a></li>
                                    <li><a href="pages-animation.html">Animation</a></li>
                                    <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                    <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-treeview.html">Treeview</a></li>
                                    <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                    <li><a href="pages-search-result.html">Search result</a></li>
                                    <li><a href="pages-scroll.html">Scrollbar</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-faq.html">Faqs</a></li>
                                    <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="pages-error-400.html">400</a></li>
                                            <li><a href="pages-error-403.html">403</a></li>
                                            <li><a href="pages-error-404.html">404</a></li>
                                            <li><a href="pages-error-500.html">500</a></li>
                                            <li><a href="pages-error-503.html">503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                    <li><a href="chart-echart.html">Echarts</a></li>
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-knob.html">Knob Chart</a></li>
                                    <li><a href="chart-chart-js.html">Chartjs</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                    <li><a href="chart-peity.html">Peity Charts</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="icon-material.html">Material Icons</a></li>
                                    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                    <li><a href="icon-themify.html">Themify Icons</a></li>
                                    <li><a href="icon-weather.html">Weather Icons</a></li>
                                    <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                    <li><a href="icon-flag.html">Flag Icons</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="map-google.html">Google Maps</a></li>
                                    <li><a href="map-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)">item 1.1</a></li>
                                    <li><a href="javascript:void(0)">item 1.2</a></li>
                                    <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                            <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                            <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                            <li><a href="javascript:void(0)">item 1.3.4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">item 1.4</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- SUPPORT</li>
                            <li> <a class="waves-effect waves-dark" href="<?= asset('theme/skin') ?>/documentation/documentation.html" aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                            <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                            <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a></li>
                            -->
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                @yield('content')
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2020
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?= asset('theme/skin') ?>/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= asset('theme/skin') ?>/assets/node_modules/popper/popper.min.js"></script>
        <script src="<?= asset('theme/skin') ?>/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?= asset('theme/skin') ?>/dist/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="<?= asset('theme/skin') ?>/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?= asset('theme/skin') ?>/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="<?= asset('theme/skin') ?>/dist/js/custom.min.js"></script>
        <!-- Sweet-Alert  -->
        @yield('scripts')
    </body>
</html>