@extends('admin.master') @section('main')

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div>
                        <form method="post" style="width: 1200px;">
                            @csrf
                            <h2>Admin edit post</h2>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input
                                    value="{{$post->title}}"
                                    name="title"
                                    type="text"
                                    class="form-control"
                                    id="title"
                                />
                                <small id="emailHelp" class="form-text text-muted"
                                >this is title</small
                                >

                            </div>
                            <textarea id="editor" name="content"> {{$post->content}} </textarea>
                            <br/>
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                            <button class="btn btn-danger">
                                <a href="{{ route('admin.post') }}">Cancel</a>
                            </button>
                        </form>
                    </div>
                </div>
                <br/>
                <script>
                    CKEDITOR.replace("editor");
                </script>
            </div>
        </div>
    </div>

@stop
