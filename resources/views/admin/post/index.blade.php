@extends('admin.master')
@section('title','Home')
@section('main')
    <button type="button" class="btn btn-primary btn-sm">Add</button>

    <table class="table table-hover">
        <thead>
        <tr>
            <th    scope="col">#</th>
            <th  style="width: 30%" scope="col">title</th>
            <th  style="width: 10%" scope="col">status</th>
            <th style="width: 40%"  scope="col">content</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$post->title}}</td>
                <td>
                    @if($post->status==0) Unpublish @else Publish @endif
                </td>
                <td >{{substr($post->content,0,100)}}</td>
                <td>
                    <a type="button" class="btn btn-primary btn-sm">view</a>
                    <a type="button" class="btn btn-primary btn-sm">Edit</a>
                    <a type="button" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
