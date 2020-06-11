<form method="post" class="row comment my-5">
    @csrf @if(user())
        <h4>Write comment</h4>
        <div class="col-lg-10 col-10">
            <textarea type="text" class="form-control" placeholder="Write comments ..." rows="5"
                      name="content"> </textarea>
        </div>
    @else
        <h4><a href="{{ route('login') }}">Login to comment</a></h4>
        <div class="col-lg-10 col-10">
        <textarea type="text" disabled class="form-control" placeholder="write comments ..." rows="5"
                  name="content">
        </textarea>
            <input type="hidden" name="parent_id" value="0"/>
        </div>
    @endif

    <div class="col-lg-2 col-2 send-icon">
        <a href="" onclick="this.parentNode.parentNode.submit();">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </a>
    </div>
</form>
<div class="clear"></div>
@error('content')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<hr/>
@include('home.layouts.list-comment',['comments'=>$comments])
