<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>@yield('title')</title>

    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">
    <link href="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">
    <link href="assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/vendor/icheck/skins/all.css" rel="stylesheet">
    <link href="assets/vendor/vector-map/jquery-jvectormap-1.1.1.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
</head>

@include('admin.layouts.header')

@include('admin.layouts.nav-top')
@include('admin.layouts.nav-collapse')

@yield('main')

@include('admin.layouts.sidebar')

@include('admin.layouts.footer')

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

 <script src="assets/js/scripts.js"></script>

</body>

 </html>


