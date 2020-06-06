@extends('users.master') @section('main')
    <div class="col-md-6 mx-auto">
        <div class="card-body text-center">
            <img
                src="https://www.w3schools.com/cssref/pineapple.jpg"
                style="height: 80px; width: 80px;"
                class="rounded-circle float-left"
            />
            <div class="float-left ml-5">
                <p>
                    <a href="#" class="card-link">
                        <h3>{{user()->name}}</h3>
                    </a>
                </p>
                <p><a href="#" class="card-link">Edit your file</a></p>
            </div>
        </div>
    </div>
    <div style="margin-top: 90px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
            <ul class="navbar-nav mx-auto col-md-6">
                <li class="nav-item"><a class="nav-link" href="#">Follow</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Question</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Question</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Post</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post )
                    <div class="card flex-md-row box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">
                                    {{ $loop->iteration }}. {{$post->title}}
                                </a>
                            </h3>
                            <div class="mb-1 text-muted">
                                {{date('d-m-Y', strtotime($post->created_at))}}
                            </div>
                        <!-- <span>{!! substr($post->content,0,170) !!}...</span> -->
                            <p class=""></p>
                            <a
                                href="{{route('post.detail',['slug'=>$post->slug, '_id'=>$post->_id])}}"
                            >
                                Continue reading
                            </a>
                            <p>
                                <i class="fa fa-thumbs-up mx-sm-1">11</i>
                                <i class="fa fa-thumbs-down mx-sm-1">11</i>
                                <i class="fa fa-comments mx-sm-1">22</i>
                            </p>
                        </div>
                    </div>
                    <hr/>
                @endforeach
            </div>

            <div class="col-md-4 pl-5 border">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and
                            make up the bulk of the card's content.
                        </p>
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
