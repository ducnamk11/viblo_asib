@extends('users.master')
@section('main')
    <div class="container" style="padding: 130px">

        <form  method="post" enctype="multipart/form-data">
            @csrf
            <img  
             class="rounded-circle float-left  avatar-edit img-thumbnail"
            src="{{ url('avatars/'.user()->avatar) }}" alt="avatar"  >
            <div class="input-group mb-3">
              
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" name="avatar" id="exampleFormControlFile1">
                  </div>
            </div>
      
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{user()->name}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{user()->email}}">
            </div>
            <div class="form-group"  ">
                <label>Password</label>
                <input type="password"  name="password" value="{{user()->password}} " class="form-control">
            </div>
            
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
