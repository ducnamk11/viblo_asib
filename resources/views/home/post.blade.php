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
        <hr />
        <div>
            <i
                voteId="{{ $post->_id }}"
                id="voteUp"
                class="vote fa fa-thumbs-up mr-3"
            >
                {{ $post->votes->sum('up') }}
            </i>
            <i
                voteId="{{ $post->_id }}"
                id="voteDown"
                class="vote fa fa-thumbs-down mr-3"
            >
                {{ $post->votes->sum('down') }}
            </i>

            <i class="vote fa fa-eye mx-sm-1"> {{ count($post->postViews) }}</i>
            <i class="vote fa fa-comments mx-sm-1">
                {{ count($post->comments) }}
            </i>
        </div>
    </div>
</div>
@include('home.layouts.comment') @stop
