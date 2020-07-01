@extends('admin.master')
@section('title','Home')
@section('main')
    <div class="row">
        <div class="col-md-3">
            <form method="post">
                @csrf
                <label for="exampleInputEmail1">Add permission</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" name="permission">

                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="col-md-9">
            <table class="table table-hover ">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="width: 20%" scope="col">Permission</th>
                    <th style="width: 50%" scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$permission->name}}</td>
                        <td>
                            @foreach($permission->roles as $role)
                                <span>{{$role->name}},</span>
                            @endforeach
                        </td>
                        <td>
                            <a type="button" class="btn btn-primary btn-sm">Edit</a>
                            <a type="button" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>


@endsection
