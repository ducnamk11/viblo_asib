@extends('users.master')
@section('main')
    <div class="col-md-6 mx-auto">
        <div class="card-body text-center">
            <img src="https://www.w3schools.com/cssref/pineapple.jpg" style="height: 80px; width: 80px "
                 class="rounded-circle float-left">
            <div class="float-left ml-5">
                <p><a href="#" class="card-link"><h3>{{$user->name}}</h3></a></p>
                <p><a href="#" class="card-link">Report</a></p>
            </div>
        </div>
    </div>
    <div style="margin-top: 90px">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
            <ul class="navbar-nav mx-auto col-md-6 ">
                <li class="nav-item"><a class="nav-link" href="#">Post</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Follow</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Question</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Question</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Post</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" style="margin-top:30px">
        <div class="row ">

            {{--            LIST POST--}}

            <div class="col-md-8 border">
                <h3>YOUR POST</h3>
                @foreach($posts as $post )
                    <div class="card flex-md-row  box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">{{$post->user->name}}</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">{{$post->title}}</a>
                            </h3>
                            <div class="mb-1 text-muted">{{date('d-m-Y', strtotime($post->created_at))}}</div>
                            <span>{!! substr($post->content,0,170) !!}...</span>
                            <p class=""></p>
                            <a href="{{route('post.detail',['_id'=>$post->_id])}}">Continue reading</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
            {{--            LIST POST--}}

            {{--            account--}}
            <div class="col-md-4 pl-5 border">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
