@extends('admin.master')
@section('title','Home')
@section('main')
    <div class="container">
        <div class="row">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Add permission</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="permission">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
