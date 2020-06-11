@foreach( $comments as $comment)
    <p class="blog-post-meta">
        <img width="50px"
             src="{{ asset('avatars/'.$comment->user->avatar) }}"
             class="rounded-circle float-left img-thumbnail card-img-right flex-auto d-none d-md-block"
        />
        <strong>
            <a href="{{route('author.index',['_id'=>$post->user->_id])}}">
                {{ $comment->user->name}}
            </a>
        </strong>
        @if((strtotime(Now()) - strtotime($comment->created_at)> 120))
            <span class="text-secondary">( {{ $comment->created_at}})</span>
        @else
            <span class="text-secondary">( Answered less than a minute ago)</span>
        @endif
    </p>
    <p>{{ $comment->content }}</p>

    {{--    LIST CHILD COMMENT--}}
    <ul style="list-style: none">
        @foreach($comment->replies as $reply)
            <li class="blog-post-meta">
                <img width="50px" src="{{ asset('avatars/'.$reply->user->avatar) }}"
                     class="rounded-circle float-left img-thumbnail card-img-right flex-auto d-none d-md-block"
                />
                <strong>
                    <a href="{{route('author.index',['_id'=>$post->user->_id])}}"> {{ $reply->user->name}} </a>
                </strong>
                @if((strtotime(Now()) - strtotime($reply->created_at)> 120))
                    <span class="text-secondary">( {{ $reply->created_at}})</span>
                @else
                    <span class="text-secondary">( Answered less than a minute ago)</span>
                @endif
                <p>{{ $reply->content }}</p>
            </li>
        @endforeach
    </ul>
    {{--  FINISH  LIST CHILD COMMENT--}}

    <form method="post">
        @csrf
        <button type="button" class="reply-comment btn btn-primary btn-sm"> reply</button>
        <div class="reply-input col-lg-10 col-10">
        <textarea type="text" class="form-control" placeholder="write comments ..." rows="2" name="content">
        </textarea>
            <input type="hidden" name="parent_id" value="{{ $comment->_id }}"/>
            <div class="col-lg-2 col-2 send-icon">
                <button type="submit" class="btn btn-success">Reply</button>
            </div>
        </div>
    </form>
    <hr/>
@endforeach
