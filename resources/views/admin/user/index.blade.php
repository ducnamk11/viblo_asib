@extends('admin.master')
@section('title','Home')
@section('main')
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-primary btn-sm">Add</button>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="width: 15%" scope="col">Name</th>
                    <th style="width: 20%" scope="col">Email</th>
                    <th style="width: 20%" scope="col">Role</th>
                    <th style="width: 20%" scope="col">Permission</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->getRoleNames()}}</td>
                        <td>{{$user->getPermissionNames()}}</td>
                         <td>
                            <a href="{{route('admin.user.edit',['_id'=>$user->_id])}}" type="button" class="btn btn-primary btn-sm">Edit</a>
                            <a type="button" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
