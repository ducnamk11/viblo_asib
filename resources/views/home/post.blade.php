@extends('home.master') @section('title','post detail') @section('main')
<div class="row">
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
    </div>
</div>
@include('home.layouts.comment') @stop
