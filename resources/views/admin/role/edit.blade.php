@extends('admin.master')
@section('title','Home')
@section('main')
    <div class="row">
        <div class="col-5">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1"><h3>Edit role</h3></label>
                    <input required type="text" value="{{$role->name}}" placeholder="Add role" class="form-control"
                           name="role">
                </div>
                <div class="form-group form-check">
                    @foreach($permissions as $permission)
                        <input
                            @foreach($role->permissions as $permissions)
                            @if($permissions->name == $permission->name)
                            checked
                            @endif
                            @endforeach
                            type="checkbox" name="permission[]" value="{{$permission->name}}"/> {{$permission->name}}
                        <br>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>

@endsection
