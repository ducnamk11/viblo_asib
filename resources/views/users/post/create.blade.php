@extends('users.master')
@section('main')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div>
                        <form method="post" style="width: 1200px">
                            @csrf
                            <h2>Create a blog !</h2>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title">
                                <small id="emailHelp" class="form-text text-muted">thi is title</small>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <textarea id="editor" name="content" >  <p> </p> </textarea>
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button class="btn btn-danger"><a href="{{route('index')}}">Cancel</a></button>
                        </form>
                    </div>
                </div>
                <br>
                <script>
                    CKEDITOR.replace('editor');
                </script>
            </div>
        </div>
    </div>

@stop
