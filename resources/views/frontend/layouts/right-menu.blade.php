@if(!isset($right_menu))
    <div class="col-md-4 ">
        <div class="right-menu">
            <h3>New post</h3>
            <?php $new_post; ?>
            @foreach($new_post as $post)
                <div class="card ">
                    <span class="card-text"><a href="{{route('post',['_id'=>$post->_id])}}">{{$post->title}}</a></span>
                    <p class="smaill text-muted font-italic">{{$post->user->username}}
                        <i class="fa fa-thumbs-up mx-sm-1">11</i>
                        <i class="fa fa-thumbs-down mx-sm-1">11</i>
                        <i class="fa fa-comments mx-sm-1">22</i>
                    </p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endif
