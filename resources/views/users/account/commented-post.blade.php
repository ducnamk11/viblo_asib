@extends('users.master') @section('main')
@include('users.account.layouts.account-header')
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-8">
            @if(count($comments)==0)
                <h3>Your comment not valid yet!</h3>
            @else
            <button class="btn btn-facebook"><h2>Your comments post</h2></button>
            
            @foreach($comments as $comment )
            <div class="card flex-md-row box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">
                            {{ $loop->iteration }}. {{$comment->post->title}}
                        </a>
                    </h3>
                    <div class="mb-1 text-muted">
                        {{date('d-m-Y', strtotime($comment->created_at))}}
                    </div>
                    <p class=""></p>
                    <a
                        href="{{route('post.detail',['slug' => $comment->generatorSlug($comment->post->title,$comment->post->find_key)])}}"
                    >
                        Continue reading
                    </a>
                    <p class="smaill text-muted font-italic">
                        <i class="fa fa-thumbs-up mx-sm-1">  {{ count($comment->post->votes) }}</i>
                        <i class="fa fa-eye mx-sm-1">
                            {{ count($comment->post->postViews) }}</i
                        >
                        <i class="fa fa-comments mx-sm-1">                       
                            {{ count($comment->post->comments) }} </i
                        </i>
                    </p>
                </div>
            </div>
            <hr />
            @endforeach
            @endif
        </div>
        @include('users.account.layouts.account-right-menu')
    </div>
</div>
@stop
