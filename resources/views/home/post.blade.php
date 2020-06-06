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

<form method="post" class="row comment my-5">
    @csrf @if(user())
    <h4>Write comment</h4>
    <div class="col-lg-10 col-10">
        <textarea
            type="text"
            class="form-control"
            placeholder="Write comments ..."
            rows="5"
            name="content"
        ></textarea>
    </div>
    @else
    <h4><a href="{{ route('login') }}">Login to comment</a></h4>
    <div class="col-lg-10 col-10">
        <textarea
            type="text"
            disabled
            class="form-control"
            placeholder="write comments ..."
            rows="5"
            name="content"
        >
        </textarea>
    </div>
    @endif

    <div class="col-lg-2 col-2 send-icon">
        <a
            href=""
            onclick="this.parentNode.parentNode.submit();"
            target="_blank"
        >
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </a>
    </div>
</form>
<hr />
@foreach( $comments as $comment)
<p class="blog-post-meta">
    <strong
        ><a href="{{route('author.index',['_id'=>$post->user->_id])}}">
            {{ $comment->user->name}}
        </a>
    </strong>
    : {{ $comment->created_at}}
</p>
<p>{{ $comment->content }}</p>
<hr />
@endforeach @stop
