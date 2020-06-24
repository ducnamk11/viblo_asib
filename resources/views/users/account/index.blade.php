@extends('users.master') @section('main')
@include('users.account.layouts.account-header')
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-8">
            @if(count($posts)==0)
            <h3>Your Post not valid yet!</h3>
            @else
            <button class="btn btn-facebook">
                <h2>Your post</h2>
            </button>
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
                        href="{{route('post.detail',['slug' => $post->generatorSlug()])}}"
                    >
                        Continue reading
                    </a>
                    <p class="smaill text-muted font-italic">
                        <i
                            class="fa fa-thumbs-up mx-sm-1"
                            >{{ count($post->votes) }}</i
                        >
                        <i class="fa fa-eye mx-sm-1">
                            {{ count($post->postViews) }}
                        </i>
                        <i class="fa fa-comments mx-sm-1">
                            {{ count($post->comments) }}
                        </i>
                    </p>
                </div>
            </div>
            <hr />
            @endforeach @endif
        </div>
        @include('users.account.layouts.account-right-menu')
    </div>
</div>
@stop
