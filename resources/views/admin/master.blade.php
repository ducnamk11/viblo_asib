<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:30:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Dashboard 3</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

    <!--jquery ui-->
    <link href="assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!--iCheck-->
    <link href="assets/vendor/icheck/skins/all.css" rel="stylesheet">

    <!--vector maps -->
    <link href="assets/vendor/vector-map/jquery-jvectormap-1.1.1.css" rel="stylesheet" >

    <!--custom styles-->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fixed-nav">

<!--navigation : sidebar & header-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav">

    <!--brand name-->
    <a class="navbar-brand" href="#" data-jq-dropdown="#jq-dropdown-1">
        <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
        <div class="float-left">
            <div>DashLab <i class="fa fa-caret-down pl-2"></i></div>
            <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>ui element</span>
                </span>
        </div>
    </a>
    <!--/brand name-->

    <!--brand mega menu-->
    <div id="jq-dropdown-1" class="jq-dropdown">
        <div class="b-mega-menu">
            <div class="card card-shadow">
                <div class="card-header p-2 pl-3">
                    <div class="navbar-brand mt-2">
                        <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
                        <div class="float-left">
                            <div>DashLab</div>
                            <span class="page-direction f12 weight300">
                                    <span>home</span>
                                    <i class="fa fa-angle-right"></i>
                                    <span>ui element</span>
                                </span>
                        </div>
                    </div>

                    <div class="widget-action-link">
                        <ul class="nav nav-tabs wal-nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="analytics-tab" data-toggle="tab" href="#analytics" role="tab" aria-controls="analytics" aria-selected="false"><i class="fa fa-desktop"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="false"><i class="fa fa-magnet"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-body p-0 ">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row no-gutters">
                                <div class="col-4 border-right">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home pr-2"></i> Application</a>
                                        <a class="nav-link" id="v-pills-report-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-report" aria-selected="false"><i class="fa fa-desktop pr-2"></i> Reports</a>
                                        <a class="nav-link" id="v-pills-management-tab" data-toggle="pill" href="#v-pills-management" role="tab" aria-controls="v-pills-management" aria-selected="false"><i class="fa fa-magnet pr-2"></i>Management</a>
                                        <a class="nav-link" id="v-pills-blog-tab" data-toggle="pill" href="#v-pills-blog" role="tab" aria-controls="v-pills-blog" aria-selected="false"><i class="fa fa-comments-o pr-2"></i>Blog</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li><a href="#">Bootstrap 4 Stable</a></li>
                                                <li class="active"><a href="javascript:;">DashLab Modern Admin</a></li>
                                                <li><a href="#">Awesome Widgets Collection</a></li>
                                                <li><a href="#">Developer Friendly Code</a></li>
                                                <li><a href="#">SASS and GULP Task</a></li>
                                                <li><a href="#">Fully Responsive</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li><a href="#">Daily Reports</a></li>
                                                <li><a href="javascript:;">Weekly Reports</a></li>
                                                <li class="active"><a href="#">Monthly Reports</a></li>
                                                <li><a href="#">Yearly Reports</a></li>
                                                <li><a href="#">HR Reports</a></li>
                                                <li><a href="#">Product Reports</a></li>
                                                <li><a href="#">Order Reports</a></li>
                                                <li><a href="#">Revenue Reports</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-management" role="tabpanel" aria-labelledby="v-pills-management-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li><a href="#">HR Management</a></li>
                                                <li class="active"><a href="javascript:;">Product Management</a></li>
                                                <li><a href="#">Role Management</a></li>
                                                <li><a href="#">Sales Management</a></li>
                                                <li><a href="#">Employee Management</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-blog-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li class="active"><a href="#">Educational Blog</a></li>
                                                <li> <a href="javascript:;">Technology Blog</a></li>
                                                <li><a href="#">Political Blog</a></li>
                                                <li><a href="#">Woocommerce Blog</a></li>
                                                <li><a href="#">Entertainment Blog</a></li>
                                                <li><a href="#">Newspapper Blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                            <div class="p-5 m-4 text-center">
                                <i class="fa fa-desktop f50 text-muted mb-4"></i>
                                <p class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                            <div class="p-5 m-4 text-center">
                                <i class="fa fa-magnet f50 text-muted mb-4"></i>
                                <p class="mb-5">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                <a href="#" class="btn btn-purple">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/brand mega menu-->

    <!--responsive nav toggle-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--/responsive nav toggle-->

    <!--responsive rightside toogle-->
    <a href="javascript:;" class="nav-link right_side_toggle responsive-right-side-toggle">
        <i class="icon-options-vertical"> </i>
    </a>
    <!--/responsive rightside toogle-->

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!--left side nav-->
        <ul class="navbar-nav left-side-nav" id="accordion">

            <li class="nav-item-search" data-toggle="tooltip" data-placement="right" title="Search">
                <div class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
                    <i class="vl_search"></i>
                    <span class="nav-link-text">
                            <input type="text" class="search-form" placeholder="Search Report"/>
                        </span>
                </div>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#dashboard">
                    <i class="vl_dashboard"></i>
                    <span class="nav-link-text">Dashboard </span>
                </a>
                <ul class="sidenav-second-level collapse show" id="dashboard" data-parent="#accordion">
                    <li> <a href="index.html">Dashboard 1</a> </li>
                    <li> <a href="dashboard-2.html">Dashboard 2</a></li>
                    <li class="active"> <a href="dashboard-3.html">Dashboard 3</a></li>
                    <li> <a href="dashboard-4.html">Dashboard 4</a></li>
                    <li> <a href="dashboard-5.html">Dashboard 5</a></li>
                    <li> <a href="dashboard-6.html">Dashboard 6</a></li>
                    <li> <a href="dashboard-crypto.html">Dashboard Crypto <span class="badge badge-success">New</span></a></li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="UI Elements">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#ui_elements">
                    <i class="vl_slider-h-range"></i>
                    <span class="nav-link-text">UI Elements</span>
                </a>
                <ul class="sidenav-second-level collapse" id="ui_elements" data-parent="#accordion">
                    <li> <a href="alert.html">Alerts</a> </li>
                    <li> <a href="buttons.html">Buttons</a></li>
                    <li> <a href="dropdown.html">Dropdown</a></li>
                    <li> <a href="modals.html">Modal</a></li>
                    <li> <a href="toastr-notification.html">Notification Toastr</a></li>
                    <li> <a href="progress.html">Progress</a></li>
                    <li> <a href="popover-tooltips.html">Popup & Tooltips</a></li>
                    <li> <a href="typography.html">Typography</a></li>
                    <li> <a href="tabs-accordion.html">Tabs & Accordion</a></li>
                    <li> <a href="tree.html">Tree</a></li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Widgets">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#widgets">
                    <i class="vl_bond"></i>
                    <span class="nav-link-text">Widgets</span>
                </a>
                <ul class="sidenav-second-level collapse" id="widgets" data-parent="#accordion">
                    <li> <a href="widget-basic.html">Basic Widgets</a> </li>
                    <li> <a href="widget-chart.html">Chart Widgets</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calendar">
                <a class="nav-link" href="calendar-external-events.html">
                    <i class="vl_calendar"></i>
                    <span class="nav-link-text">Calendar <span class="badge badge-primary">2</span> </span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Icons">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#icons">
                    <i class="vl_hand-mike"></i>
                    <span class="nav-link-text">Icons</span>
                </a>
                <ul class="sidenav-second-level collapse" id="icons" data-parent="#accordion">
                    <li> <a href="icon-fontawesome.html">Fontawesome Icons</a> </li>
                    <li> <a href="icon-simple-line.html">Simple Line Icons</a> </li>
                    <li> <a href="icon-themify.html">Themify Icons</a> </li>
                    <li> <a href="icon-weather.html">Weather Icons</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms">
                    <i class="vl_form"></i>
                    <span class="nav-link-text">Forms</span>
                </a>
                <ul class="sidenav-second-level collapse" id="forms" data-parent="#accordion">
                    <li> <a href="form-basic.html">Basic Forms</a> </li>
                    <li> <a href="form-checkbox-radio.html">Checkbox & Radio</a> </li>
                    <li> <a href="form-input-group.html">Input Group</a> </li>
                    <li> <a href="form-validation.html">Form Validation</a> </li>
                    <li> <a href="editor-summernote.html">Editor Summernote</a> </li>
                    <li> <a href="form-dropzone.html">Dropzone</a> </li>
                    <li> <a href="form-pickers.html">Pickers</a> </li>
                    <li> <a href="form-select2.html">Select 2</a> </li>
                    <li> <a href="form-multi-select.html">Multiple Select</a> </li>
                    <li> <a href="form-wizard.html">Form Wizard</a> </li>
                    <li> <a href="form-switch.html">Switchery</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                    <i class="vl_grid-even"></i>
                    <span class="nav-link-text">Data Tables</span>
                </a>
                <ul class="sidenav-second-level collapse" id="d_tables" data-parent="#accordion">
                    <li> <a href="table-basic.html">Basic Table</a> </li>
                    <li> <a href="table-datatable.html">Data Table</a> </li>
                    <li> <a href="table-ajax-datatable.html">Ajax Data Table</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                    <i class="vl_graph-bar"></i>
                    <span class="nav-link-text">Charts</span>
                </a>
                <ul class="sidenav-second-level collapse" id="charts" data-parent="#accordion">
                    <li> <a href="chartjs.html">Chartjs</a> </li>
                    <li> <a href="echarts.html">eCharts</a> </li>
                    <li> <a href="amcharts.html">amCharts</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#extra_pages">
                    <i class="vl_files"></i>
                    <span class="nav-link-text">Extra Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="extra_pages" data-parent="#accordion">
                    <li> <a href="profile.html">Profile</a> </li>
                    <li> <a href="invoice.html">Invoice</a> </li>
                    <li> <a href="blank-page.html">Blank Page</a> </li>
                    <li> <a href="login.html">Login Page</a> </li>
                    <li> <a href="registration.html">Registration Page</a> </li>
                    <li> <a href="404.html">404 Error</a> </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layouts">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#layouts">
                    <i class="vl_board"></i>
                    <span class="nav-link-text">Layouts</span>
                </a>
                <ul class="sidenav-second-level collapse" id="layouts" data-parent="#accordion">
                    <li> <a href="layout-top-nav.html">Top Nav </a></li>
                    <li> <a href="layout-dark-nav.html">Dark Left Nav</a> </li>
                    <li> <a href="blank-page.html">Light Left Nav</a> </li>
                    <li> <a href="layout-default-collapsed.html">Nav Collapsed Light</a></li>
                    <li> <a href="layout-dark-nav-collapsed.html">Nav Collapsed Dark</a></li>
                    <li> <a href="layout-floating-leftside-dark.html">Floating Nav Dark</a></li>
                    <li> <a href="layout-floating-leftside-dark-collapsed.html">Floating Collapsed Dark </a></li>
                    <li> <a href="layout-floating-leftside-light.html">Floating Nav Light </a></li>
                    <li> <a href="layout-floating-leftside-light-collapsed.html">Floating Collapsed Light </a></li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu">
                    <i class="vl_sitemap1"></i>
                    <span class="nav-link-text">Menu Levels</span>
                </a>
                <ul class="sidenav-second-level collapse" id="multi_menu" data-parent="#accordion">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu_2">Third Level</a>
                        <ul class="sidenav-third-level collapse" id="multi_menu_2">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!--/left side nav-->

        <!--nav push link-->
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="left-nav-toggler">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <!--/nav push link-->

        <!--header leftside links-->
        <ul class="navbar-nav header-links">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Application
                </a>
                <div class="dropdown-menu" aria-labelledby="actionNav">
                    <a class="dropdown-item" href="#">Bootstrap 4 Stable</a>
                    <a class="dropdown-item" href="#">DashLab Modern Admin</a>
                    <a class="dropdown-item" href="#">Awesome Widgets Collection</a>
                    <a class="dropdown-item" href="#">Developer Friendly Code</a>
                    <a class="dropdown-item" href="#">SASS and GULP Task</a>
                    <a class="dropdown-item" href="#">Fully Responsive</a>
                    <a class="dropdown-item" href="#">Latest Version Plugins</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="reportNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reports
                </a>
                <div class="dropdown-menu" aria-labelledby="reportNav">
                    <a class="dropdown-item" href="#">Daily Reports</a>
                    <a class="dropdown-item" href="#">Weekly Reports</a>
                    <a class="dropdown-item" href="#">Monthly Reports</a>
                    <a class="dropdown-item" href="#">Yearly Reports</a>
                    <a class="dropdown-item" href="#">HR Reports</a>
                    <a class="dropdown-item" href="#">Product Reports</a>
                    <a class="dropdown-item" href="#">Order Reports</a>
                    <a class="dropdown-item" href="#">Revenue Reports</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="orderNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Management
                </a>
                <div class="dropdown-menu" aria-labelledby="orderNav">
                    <a class="dropdown-item" href="#">HR Management</a>
                    <a class="dropdown-item" href="#">Product Management</a>
                    <a class="dropdown-item" href="#">Role Management</a>
                    <a class="dropdown-item" href="#">Sales Management</a>
                    <a class="dropdown-item" href="#">Employee Management</a>
                </div>
            </li>
        </ul>
        <!--/header leftside links-->

        <!--header rightside links-->
        <ul class="navbar-nav header-links ml-auto hide-arrow">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="vl_chat-bubble"></i>
                    <span class="d-lg-none">Messages
                            <span class="badge badge-pill badge-primary">9 New</span>
                        </span>
                    <div class="notification-alarm">
                        <span class="wave wave-danger"></span>
                        <span class="dot"></span>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header weight500 ">Messages</h6>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item border-bottom msg-unread" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                        </div>
                        <span class="weight500">Andrew Flinton</span>
                        <span class="small float-right text-muted">08:30 AM</span>

                        <div class="dropdown-message">
                            I hope that you will be there in time. See you then
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom msg-unread" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                        </div>
                        <span class="weight500">John Doe</span>
                        <span class="small float-right text-muted">10:28 AM</span>

                        <div class="dropdown-message">
                            Hello this is an example message. Just want to show how it looks
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                        </div>
                        <span class="weight500">Dash Don</span>
                        <span class="small float-right text-muted">07:12 PM</span>

                        <div class="dropdown-message">
                            Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                        </div>
                        <span class="weight500">dkmosa</span>
                        <span class="small float-right text-muted">12:10 PM</span>

                        <div class="dropdown-message">
                            We build a beautiful dashboard admin panel for professional
                        </div>
                    </a>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="vl_bell"></i>
                    <span class="d-lg-none">Notification
                            <span class="badge badge-pill badge-warning">5 New</span>
                        </span>
                    <div class="notification-alarm">
                        <span class="wave wave-warning"></span>
                        <span class="dot bg-warning"></span>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header weight500">Notification</h6>

                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item border-bottom" href="#">
                            <span class="text-primary">
                            <span class="weight500">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                        <span class="small float-right text-muted">03:14 AM</span>

                        <div class="dropdown-message f12">
                            This week project update report generated. All team members are requested to check the updates
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                            <span class="text-danger">
                            <span class="weight500">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                        <span class="small float-right text-muted">10:34 AM</span>

                        <div class="dropdown-message f12">
                            Unexpectedly server response stop. Responsible members are requested to fix it soon
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                            <span class="text-success">
                            <span class="weight500">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                        <span class="small float-right text-muted">12:30 AM</span>

                        <div class="dropdown-message f12">
                            Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                        </div>
                    </a>

                    <a class="dropdown-item small" href="#">View all notification</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-thumb">
                        <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                    <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Sign Out</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link right_side_toggle">
                    <i class="icon-options-vertical"> </i>
                </a>
            </li>
        </ul>
        <!--/header rightside links-->

    </div>
</nav>
<!--/navigation : sidebar & header-->

<!--main content wrapper-->
<div class="content-wrapper">

    <!--creative states-->
    <div class="creative-state-area basic-gradient">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h4 class="creative-state-title">Dashboard</h4>
            </div>
            <div class="col-lg-5  col-12 text-lg-right">
                <div class="row short-states mb-lg-0 mb-4">
                    <div class="col-6">
                        <span class="pr-2">unique visitors</span>
                        <span id="unique_visitors"></span>
                    </div>
                    <div class="col-6">
                        <span class="pr-2">total visitors</span>
                        <span id="total_visitors"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                <i class="vl_user-male"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Visit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                <i class="vl_download"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Downloads</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                <i class="vl_shopping-bag2"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Active Installation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-purple-light sr-icon-box bubble-shadow-small">
                                <i class="vl_cart-empty"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Product Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/creative states-->

    <div class="container-fluid">

        <!--sales statistical overview-->
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-info">
                            <div class="custom-title">Sales Statistical Overview</div>
                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3">
                                <span class="text-muted mb-5 d-inline-block"><i class="fa fa-bolt"></i> Page Views</span>
                                <h1 class="mb-0">135,870</h1>
                                <small class="text-muted">Page views in last month december 2018</small>
                                <ul class="list-unstyled mt-5">
                                    <li class="text-muted">
                                        <i class="fa fa-clock-o pr-2"></i> Data from January
                                    </li>
                                    <li class="text-muted">
                                        <i class="fa fa-clock-o pr-2"></i>  Last active in 12.01.2018
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-9">
                                <canvas id="dash3_sales_chart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/sales statistical overview-->

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">
                                Issue Fixing
                                <ul class="nav nav-pills nav-pill-primary nav-pill-custom nav-pills-sm float-right " id="pills-tab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-today-tab2" data-toggle="pill" href="#pills-weekly2" role="tab" aria-selected="true">Weekly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-month-tab2" data-toggle="pill" href="#pills-month2" role="tab" aria-selected="false">Month</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="custom-post-title">Graphical view of this week issue solving status</div>
                        </div>
                    </div>
                    <div class="card-body pt-5 pb-4">
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel" aria-labelledby="pills-today-tab">
                                <div class="row">
                                    <div class="col-12 col-xl-7 col-md-6 text-center">
                                        <canvas id="doughnut_chart" class="mb-4" ></canvas>
                                        <small class="text-muted">Realtime data update instantly</small>
                                    </div>
                                    <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                        <ul class="list-unstyled f12">
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 40%
                                                <span class="float-right">Solved</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 10%
                                                <span class="float-right">Pending</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 10%
                                                <span class="float-right">Declain</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 40%
                                                <span class="float-right">Reopen</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-month2" role="tabpanel" aria-labelledby="pills-month-tab">
                                <div class="row">
                                    <div class="col-12 col-xl-7 col-md-6 text-center">
                                        <canvas id="doughnut_chart2" class="mb-4"></canvas>
                                        <small class="text-muted">Realtime data update instantly</small>
                                    </div>
                                    <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                        <ul class="list-unstyled f12">
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 30%
                                                <span class="float-right">Solved</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 20%
                                                <span class="float-right">Pending</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 25%
                                                <span class="float-right">Declain</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 25%
                                                <span class="float-right">Reopen</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-warning">
                            <div class="custom-title">Regional Sales</div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div id="usa_map" style="height: 200px"></div>

                        <div class="mb-2">
                            <div class="progress-title mb-0">
                                <span>Washington</span>
                                <span class="float-right">85%</span>
                            </div>
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="progress-title mb-0">
                                <span>California </span>
                                <span class="float-right">55%</span>
                            </div>
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar bg-purple-light" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="progress-title mb-0">
                                <span>Texas</span>
                                <span class="float-right">35%</span>
                            </div>
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sales monitor-->
        <div class="row">
            <div class="col-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-turquoise">
                            <div class="custom-title">Sales Monitor</div>

                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-md-5">
                                <p class="text-muted mb-5">Proper sell monitoring through the world map to plan <br/>
                                    for the next marketing attempt</p>

                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Europe</span>
                                        <span class="float-right">35%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-turquoise" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Latin America </span>
                                        <span class="float-right">55%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Australia</span>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="map-wrapper" id="world-map"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/sales monitor-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card card-shadow mb-4">
                    <div class="row no-gutters">
                        <div class="col-5 basic-gradient-alt weather-radius text-center position-relative">
                            <div class="weather-shade">
                                <img src="assets/img/weather-rain-bg.svg" alt=""/>
                            </div>
                            <div class="card-body mt-5 pt-5">
                                <i class="vl_weather-day-rain text-light f80 mt-5 pt-5 d-block"></i>

                            </div>
                            <div class="card-footer bg-transparent border-0 text-light mt-3 pt-5">
                                <h3 class="weight300">Rainy Day</h3>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="card-body pt-5">
                                <h3 class="text-uppercase">TUE 22 <br/>
                                    <span class="weight300 text-muted">September</span>
                                </h3>
                                <div class="f50 weight300 text-primary pt-5 pb-5">
                                    13<sup>o</sup>
                                    <span class="h3 weight300">Rain</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white text-center border-0 pb-4 mb-2">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="text-muted mb-3">WED</h6>
                                        <i class="vl_weather-day-snow f24"></i>
                                        <p class="mb-0 text-muted">17<sup>o</sup>c</p>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-muted mb-3">THU</h6>
                                        <i class="vl_weather-night-cloud f24"></i>
                                        <p class="mb-0 text-muted">22<sup>o</sup>c</p>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-muted mb-3">FRI</h6>
                                        <i class="vl_weather-sunny-day f24"></i>
                                        <p class="mb-0 text-muted">18<sup>o</sup>c</p>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-muted mb-3">SAT</h6>
                                        <i class="vl_weather-thunder f24"></i>
                                        <p class="mb-0 text-muted">29<sup>o</sup>c</p>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-muted mb-3">SUN</h6>
                                        <i class="vl_weather-snow f24"></i>
                                        <p class="mb-0 text-muted">13<sup>o</sup>c</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">Activity Monitor</div>
                            <div class=" widget-action-link">
                                <a href="#" class="btn btn-transparent text-secondary p-0 text-muted">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled base-timeline activity-timeline">
                            <li class="">
                                <div class="timeline-icon">
                                    <img src="assets/img/avatar/avatar1.jpg" alt=""/>
                                </div>
                                <div class="act-time">Today</div>
                                <div class="base-timeline-info">
                                    <a href="#">John123</a> Successfully purchased item#26
                                </div>
                                <small class="text-muted">
                                    28 mins ago
                                </small>
                            </li>
                            <li class="">
                                <div class="timeline-icon bg-turquoise">
                                    <i class="fa fa-download"></i>
                                </div>
                                <div class="base-timeline-info">
                                    <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                                </div>
                                <small class="text-muted">
                                    2 days ago
                                </small>
                            </li>
                            <li class="">
                                <div class="timeline-icon bg-info">
                                    <i class="fa fa-file-image-o"></i>
                                </div>
                                <div class="act-time">Yesterday</div>
                                <div class="base-timeline-info">
                                    User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                                </div>
                                <small class="text-muted">
                                    12 mins ago
                                </small>
                            </li>
                            <li class="">
                                <div class="timeline-icon">
                                    <img src="assets/img/avatar/avatar2.jpg" alt=""/>
                                </div>
                                <div class="base-timeline-info">
                                    <a href="#" class="text-info">Charlie Johnson  </a> joined DashLab last week.
                                </div>
                                <small class="text-muted">
                                    3 days ago
                                </small>
                            </li>
                            <li class="">
                                <div class="timeline-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <div class="act-time">29 January</div>
                                <div class="base-timeline-info">
                                    User <a href="#" class="text-warning">Lisa Maria</a> checked out from the market
                                </div>
                                <small class="text-muted">
                                    15 mins ago
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">Today's Activity</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled base-timeline">
                            <li class="time-dot-primary">
                                <div class="base-timeline-info">
                                    <a href="#">John123</a> Successfully purchased item#26
                                </div>
                                <small class="text-muted">
                                    28 mins ago
                                </small>
                            </li>
                            <li class="time-dot-danger">
                                <div class="base-timeline-info">
                                    <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                                </div>
                                <small class="text-muted">
                                    2 days ago
                                </small>
                            </li>
                            <li class="time-dot-purple">
                                <div class="base-timeline-info">
                                    User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                                </div>
                                <small class="text-muted">
                                    12 mins ago
                                </small>
                            </li>
                            <li class="time-dot-turquoise">
                                <div class="base-timeline-info">
                                    <a href="#" class="text-info">Charlie Johnson  </a> joined DashLab last week. Congrats to him
                                </div>
                                <small class="text-muted">
                                    3 days ago
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-success">
                            <div class="custom-title">Todo List</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="todo-list-item list-unstyled" id="todo-list">
                            <li class="todo-bg-primary">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Scheduled Meeting with Anthony
                                </p>
                            </li>
                            <li class="todo-bg-danger">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Submit monthly report to John Doe
                                </p>
                            </li>
                            <li class="todo-bg-purple">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Follow up the team work
                                </p>
                            </li>
                            <li class="todo-bg-info">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Submit monthly report to John Doe
                                </p>
                            </li>
                            <li class="todo-bg-warning">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Make a meeting call to client
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form-control border-0 f14" placeholder="Add new task"/>
                            </div>
                            <div class="col-2">
                                <a href="javascript:;" class="btn-todo-list float-right mt-1">
                                    <i class="fa fa-paper-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">Chat</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chat-wrap" style="height: 280px">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            Hi Pristly, How are you?
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat-info">
                                        <div class="chat-text">
                                            I am fine. Danny I need a
                                            help from you. It will be
                                            great for me if you can
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            oh sure tell me, if i can
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat-info">
                                        <div class="chat-text">
                                            I need a dashboard for my project
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            ok, how can i help you?
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat-info">
                                        <div class="chat-text">
                                            can you make a design for this
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            Yeah sure, I'll give you a design next week
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0 chat-type">
                        <div class="row">
                            <div class="col-10">
                                <a href="javascript:;" class="file-attachment float-left">
                                    <i class="fa fa-paperclip"></i>
                                </a>
                                <input type="text" class="form-control border-0 f14" placeholder="Type something here"/>
                            </div>
                            <div class="col-2">
                                <a href="javascript:;" class="btn-todo-list btn-primary float-right mt-1">
                                    <i class="fa fa-paper-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--footer-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; VectorLab 2018</small>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!--/main content wrapper-->

<!--right sidebar-->
<div class="right-sidebar" id="right_side_bar">
    <div class="card border-0">
        <div class="card-body pb-0">
            <!--close toggle-->
            <a href="javascript:;" class="right_side_toggle float-right close-sidebar-icon">
                <i class=" ti-shift-right"> </i>
            </a>
            <!--/close toggle-->
        </div>
        <div class="card-body pt-2">

            <div class="right-widget">
                <div class="custom-title-wrap bar-primary mb-4">
                    <div class="custom-title">Today's Activity</div>
                </div>

                <ul class="list-unstyled base-timeline">
                    <li class="time-dot-primary">
                        <div class="base-timeline-info">
                            <a href="#">John123</a> Successfully purchased item#26
                        </div>
                        <small class="text-muted">
                            28 mins ago
                        </small>
                    </li>
                    <li class="time-dot-danger">
                        <div class="base-timeline-info">
                            <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                        </div>
                        <small class="text-muted">
                            2 days ago
                        </small>
                    </li>
                    <li class="time-dot-purple">
                        <div class="base-timeline-info">
                            User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                        </div>
                        <small class="text-muted">
                            12 mins ago
                        </small>
                    </li>
                </ul>
            </div>

            <div class="right-widget">
                <div class="custom-title-wrap bar-danger mb-4">
                    <div class="custom-title">Active Users</div>
                </div>

                <ul class="list-unstyled mb-0 list-widget">
                    <li class="cursor">
                        <div class="media mb-4">
                            <div class="st-alphabet mr-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                <span class="status bg-success"></span>
                            </div>
                            <div class="media-body ">
                                <div class="float-left">
                                    <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                    <span class="text-muted">Online</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cursor">
                        <div class="media mb-4">
                            <div class="st-alphabet mr-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                <span class="status bg-warning"></span>
                            </div>
                            <div class="media-body ">
                                <div class="float-left">
                                    <h6 class="text-uppercase mb-0">james alexender</h6>
                                    <span class="text-muted">Screaming...</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cursor">
                        <div class="media mb-4">
                            <div class="st-alphabet mr-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                <span class="status bg-info"></span>
                            </div>
                            <div class="media-body">
                                <div class="float-left">
                                    <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                    <span class="text-muted">Start Exploring</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cursor">
                        <div class="media mb-3">
                            <div class="st-alphabet mr-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                <span class="status bg-danger"></span>
                            </div>
                            <div class="media-body">
                                <div class="float-left">
                                    <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                    <span class="text-muted">Busy</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="right-widget">

                <div class="custom-title-wrap bar-success mb-4">
                    <div class="custom-title">Notification</div>
                </div>

                <div >
                    <div class="dropdown-divider mb-0"></div>
                    <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-primary">
                            <span class="weight700 f12">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                        <span class="small float-right text-muted">03:14 AM</span>

                        <div class="text-dark f12">
                            This week project update report generated. All team members are requested to check the updates
                        </div>
                    </a>

                    <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-danger">
                            <span class="weight700 f12">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                        <span class="small float-right text-muted">10:34 AM</span>

                        <div class="text-dark f12">
                            Unexpectedly server response stop. Responsible members are requested to fix it soon
                        </div>
                    </a>

                    <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-success">
                            <span class="weight700 f12">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                        <span class="small float-right text-muted">12:30 AM</span>

                        <div class="text-dark f12">
                            Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                        </div>
                    </a>

                    <div class="text-center mt-3">
                        <a class="nav-link px-0" href="#">View all notification</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--/right sidebar-->

<!--basic scripts-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>

<script src="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--sparkline-->
<script src="assets/vendor/sparkline/jquery.sparkline.js"></script>
<!--sparkline initialization-->
<script src="assets/vendor/js-init/sparkline/init-sparkline.js"></script>

<!--chartjs-->
<script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
<!--chartjs initialization-->
<script src="assets/vendor/js-init/chartjs/init-doughnut-chart.js"></script>
<script src="assets/vendor/js-init/chartjs/init-doughnut-chart2.js"></script>
<script src="assets/vendor/js-init/chartjs/init-dash3-sales.js"></script>

<!--vectormap-->
<script src="assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-us-aea.js"></script>
<!--vectormap initialization-->
<script src="assets/vendor/js-init/vmap/init-vmap-world.js"></script>
<script src="assets/vendor/js-init/vmap/init-vmap-usa.js"></script>

<!--to do list-->
<script src="assets/vendor/icheck/skins/icheck.min.js"></script>
<!--to do list initialization-->
<script src="assets/vendor/js-init/init-todo-list.js"></script>

<!--[if lt IE 9]>
<script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--basic scripts initialization-->
<script src="assets/js/scripts.js"></script>

</body>

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:35:17 GMT -->
</html>

