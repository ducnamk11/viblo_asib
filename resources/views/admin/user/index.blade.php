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
                        <td>
                            @foreach($user->getRoleNames() as $name) <p>{{$name}}</p> @endforeach
                        </td>
                        <td>
                            @foreach($user->getPermissionNames() as $name) <p>{{$name}}</p> @endforeach
                        </td>
                        <td>
                            @can('edit-user')
                                <a href="{{route('admin.user.edit',['_id'=>$user->_id])}}" type="button"
                                   class="btn btn-primary btn-sm">Edit
                                </a>
                                @can('delete-user')
                                    <a href="{{route('admin.user.delete',['_id'=>$user->_id])}}" type="button"
                                       onclick="return confirm('bạn có chắc chắn muốn xóa ?')"
                                       id="delete-user" user-id="{{$user->_id}}" class="btn btn-danger btn-sm">Delete
                                    </a>
                                @endcan
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
