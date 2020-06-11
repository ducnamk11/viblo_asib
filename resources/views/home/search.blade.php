@extends('home.master') @section('title','home') @section('main')
<h2>Search by: '{{ $keyword }}'</h2>
<hr />
@if(count($results)== 0)
<h1>your result is not valid!</h1>
@endif
<!-- have a result -->
@foreach($results as $post)

<div class="card flex-md-row box-shadow h-md-250">
    <img
        src="{{ asset('avatars/'.$post->user->avatar) }}"
        class="rounded-circle card-img-right flex-auto d-none d-md-block"
        style="width: 90px; height: 90px;"
    />
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary"> </strong>
        <h3 class="mb-0">
            <a class="text-dark" href="#"> {{$post->title}} </a>
        </h3>
        <div class="mb-1 text-muted">
            {{date('d-m-Y', strtotime($post->created_at))}}
        </div>
        <p class="card-text mb-auto">{{substr($post->content,0,170)}} ...</p>
        <a
            href="{{route('post.detail',['slug'=>$post->slug,'_id'=>$post->_id])}}"
        >
            Continue reading
        </a>
    </div>
</div>
<hr />
@endforeach @stop
<script type="text/javascript" src="ckeditor_path/ckeditor.js"></script>
