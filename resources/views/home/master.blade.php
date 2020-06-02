<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
</head>
<body>

@include('layouts.nav-header')
@include('home.layouts.nav-bottom')
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-8">
            @yield('main')
        </div>
        @include('home.layouts.right-menu')

    </div>
</div>
@include('layouts.footer')
</body>
</html>
