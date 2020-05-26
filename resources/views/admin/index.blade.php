@extends('admin.master')
@section('title','Home')
@section('main')
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
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0"
                                       data-toggle="dropdown">
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
                                <span class="text-muted mb-5 d-inline-block"><i
                                        class="fa fa-bolt"></i> Page Views</span>
                                <h1 class="mb-0">135,870</h1>
                                <small class="text-muted">Page views in last month december 2018</small>
                                <ul class="list-unstyled mt-5">
                                    <li class="text-muted">
                                        <i class="fa fa-clock-o pr-2"></i> Data from January
                                    </li>
                                    <li class="text-muted">
                                        <i class="fa fa-clock-o pr-2"></i> Last active in 12.01.2018
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
                                <ul class="nav nav-pills nav-pill-primary nav-pill-custom nav-pills-sm float-right "
                                    id="pills-tab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-today-tab2" data-toggle="pill"
                                           href="#pills-weekly2" role="tab" aria-selected="true">Weekly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-month-tab2" data-toggle="pill"
                                           href="#pills-month2" role="tab" aria-selected="false">Month</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="custom-post-title">Graphical view of this week issue solving status</div>
                        </div>
                    </div>
                    <div class="card-body pt-5 pb-4">
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel"
                                 aria-labelledby="pills-today-tab">
                                <div class="row">
                                    <div class="col-12 col-xl-7 col-md-6 text-center">
                                        <canvas id="doughnut_chart" class="mb-4"></canvas>
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
                            <div class="tab-pane fade" id="pills-month2" role="tabpanel"
                                 aria-labelledby="pills-month-tab">
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
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="progress-title mb-0">
                                <span>California </span>
                                <span class="float-right">55%</span>
                            </div>
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar bg-purple-light" role="progressbar" style="width: 55%;"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="progress-title mb-0">
                                <span>Texas</span>
                                <span class="float-right">35%</span>
                            </div>
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 35%;"
                                     aria-valuemax="100"></div>
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
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0"
                                       data-toggle="dropdown">
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
                                        <div class="progress-bar bg-turquoise" role="progressbar" style="width: 35%;"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Latin America </span>
                                        <span class="float-right">55%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Australia</span>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="map-wrapper" id="world-map"></div>
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
                                    <a href="#" class="text-info">Charlie Johnson </a> joined DashLab last week.
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
                                    <a href="#" class="text-info">Charlie Johnson </a> joined DashLab last week.
                                    Congrats to him
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
                                    <input type="checkbox" value="0"/>
                                </div>
                                <p class="todo-title">
                                    Scheduled Meeting with Anthony
                                </p>
                            </li>
                            <li class="todo-bg-danger">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0"/>
                                </div>
                                <p class="todo-title">
                                    Submit monthly report to John Doe
                                </p>
                            </li>
                            <li class="todo-bg-purple">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0"/>
                                </div>
                                <p class="todo-title">
                                    Follow up the team work
                                </p>
                            </li>
                            <li class="todo-bg-info">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0"/>
                                </div>
                                <p class="todo-title">
                                    Submit monthly report to John Doe
                                </p>
                            </li>
                            <li class="todo-bg-warning">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0"/>
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

@endsection
