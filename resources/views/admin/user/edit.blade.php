@extends('admin.master')
@section('title','Home')
@section('main')

    <form method="post" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-4">
                <img
                    class="rounded-circle float-left  avatar-edit img-thumbnail"
                    src="{{ url('avatars/'.user()->avatar) }}" alt="avatar">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{user()->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{user()->email}}">
                </div>
                <div class="form-group"
                ">
                <label>Password</label>
                <input type="password" name="password" value="{{user()->password}} " class="form-control">
            </div>
        </div>
        {{--        ROLE--}}
        <div class="col-3">
            <h3>ROLE</h3>
            <div class="form-group form-check">
                @foreach($roles as $role)
                    <input type="checkbox" @if(in_array($role->name, user()->roles->pluck('name')->toArray()) )  checked
                           @endif name="role[]" value="{{$role->name}}"/> {{$role->name}}
                    <br>
                @endforeach
            </div>
        </div>
        {{--        PERMISSION--}}
        <div class="col-3">
            <h3>PERMISSION</h3>
            <div class="form-group form-check">
                @foreach($permissions as $permission)
                    <input type="checkbox"
                           @if(in_array($permission->name, user()->getPermissionNames()->toArray()) )  checked @endif
                           name="permission[]" value="{{$permission->name}}"/> {{$permission->name}}
                    <br>
                @endforeach
            </div>
        </div>

        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>


@stop
