@extends('frontend.master')
@section('title','post detail')
@section('main')
    <div class="row">
        <div>
            <form method="post" action="{{route('post_create')}}" style="width: 1200px">
                <h2>Create a blog !</h2>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title"  >
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                 <textarea id="editor" name="editor"  >  <p> </p>
            </textarea>
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
                <button class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
    <br>
    <script>
        CKEDITOR.replace('editor');
    </script>
@stop


