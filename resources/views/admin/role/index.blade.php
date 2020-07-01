@extends('admin.master')
@section('title','Home')
@section('main')
    <div class="row">
        <div class="col-3">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1"><h3>Add role</h3></label>
                    <input required type="text" placeholder="Add role" class="form-control" id="exampleInputEmail1" name="role">
                </div>
                <div class="form-group form-check">
                    @foreach($permissions as $permission)
                        <input type="checkbox" name="permission[]" value="{{$permission->name}}"/> {{$permission->name}}
                        <br>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="col-9">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="width: 20%" scope="col">Role</th>
                    <th style="width: 50%" scope="col">Permission</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$role->name}}</td>
                        <td>
                            @foreach($role->permissions as $permission)
                                <span>{{$permission->name}},</span>
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
