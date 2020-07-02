@extends('admin.master') @section('title','Home') @section('main')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th style="width: 40%;" scope="col">title</th>
            <th style="width: 10%;" scope="col">status</th>
            <th style="width: 10%;" scope="col">created at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$post->title}}</td>
                <td>
                    <a href="{{ route('admin.post.publish',['_id'=>$post->id]) }}" class="btn btn-primary btn-sm">
                        @if($post->status==0) Unpublish @else Publish @endif
                    </a>
                </td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{ route('admin.post.view',['_id'=>$post->id]) }}" class="btn btn-primary btn-sm"> view</a>
                    <a href="{{route('admin.post.edit',['_id'=>$post->_id])}}" class=" btn btn-success btn-sm">Edit</a>
                    <a href="{{route('admin.post.delete',['_id'=>$post->_id])}}"
                       class=" btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
