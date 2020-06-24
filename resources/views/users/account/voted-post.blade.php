@extends('users.master') @section('main')
@include('users.account.layouts.account-header')
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-8">
            <button class="btn btn-facebook"><h2>Your voted post</h2></button>
            
            @foreach($votes as $vote )
            <div class="card flex-md-row box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">
                            {{ $loop->iteration }}. {{$vote->post->title}}
                        </a>
                    </h3>
                    <div class="mb-1 text-muted">
                        {{date('d-m-Y', strtotime($vote->created_at))}}
                    </div>
                    <p class=""></p>
                    <a
                        href="{{route('post.detail',['slug' => $vote->generatorSlug($vote->post->title,$vote->post->find_key)])}}"
                    >
                        Continue reading
                    </a>
                    <p class="smaill text-muted font-italic">
                        <i class="fa fa-thumbs-up mx-sm-1">  {{ count($vote->post->votes) }}</i>
                        <i class="fa fa-eye mx-sm-1">
                            {{ count($vote->post->postViews) }}</i
                        >
                        <i class="fa fa-comments mx-sm-1">                       
                            {{ count($vote->post->comments) }} </i
                        </i>
                    </p>
                </div>
            </div>
            <hr />
            @endforeach
        </div>
        @include('users.account.layouts.account-right-menu')
    </div>
</div>
@stop
