@extends('admin.master') @section('main')
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <a href="{{route('admin.post.edit',['_id'=>$post->_id])}}" class=" btn btn-primary btn-sm">Edit</a>
            <a href="{{route('admin.post')}}" class=" btn btn-danger  btn-sm">Cancel</a>
            <div class="col-sm-12 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    <p class="blog-post-meta">
                        {{ $post->created_at}} by
                        <a href="{{route('author.index',['_id'=>$post->user->_id])}}">
                            {{ $post->user->name}}
                        </a>
                    </p>
                    <div class="content-post">{!! $post->content !!}</div>
                </div>
                <hr/>
            </div>
        </div>
    </div>

@stop
