@extends('home.master')
<!-- @section('title','home')  -->
@section('main') @foreach($posts as $post)
<div class="card flex-md-row box-shadow h-md-250">
    <img
        src="{{ asset('avatars/'.$post->user->avatar) }}"
        class="rounded-circle float-left avatar img-thumbnail card-img-right flex-auto d-none d-md-block"
    />
    <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">
            <a class="text-dark" href="#"> {{$post->title}} </a>
        </h3>
        <div class="mb-1 text-muted">
            {{date('d-m-Y', strtotime($post->created_at))}}
        </div>
        <p class="card-text mb-auto">
            {!! substr($post->content,0,170) !!} ...
        </p>
        <a href="{{route('post.detail',['slug' => $post->generatorSlug()])}}">
            Continue reading
        </a>
    </div>
</div>
<hr />
@endforeach @stop
<script type="text/javascript" src="ckeditor_path/ckeditor.js"></script>
