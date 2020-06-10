<div class="col-md-4">
    <div class="right-menu">
        <h3>New post</h3>
         @foreach($new_post as $post)
        <div class="card">
            <span class="card-text"></span>
                 <a
                    href="{{route('post.detail',['slug' => $post->generatorSlug()])}}">
                    {{$post->title}}
                </a> </span>
            <p class="smaill text-muted font-italic">   
                 {{$post->user->name}}
                <i class="fa fa-thumbs-up mx-sm-1">11</i>
                <i class="fa fa-thumbs-down mx-sm-1">11</i>
                <i class="fa fa-comments mx-sm-1">22</i>
            </p>
        </div>
        <hr />
        @endforeach
    </div>
</div>
