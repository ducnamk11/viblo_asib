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
                <i class="fa fa-thumbs-up mx-sm-1"></i>
                <i class="fa fa-eye mx-sm-1">{{ count($post->postViews) }}</i>
                <i class="fa fa-comments mx-sm-1">{{ count($post->comments) }}</i>
            </p>
        </div>
        <hr />
        @endforeach
    </div>
</div>
