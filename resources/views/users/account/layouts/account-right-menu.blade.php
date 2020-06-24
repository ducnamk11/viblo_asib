<div class="col-md-4 pl-5 border">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title">Detail</h3>
            <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h4>Your post: {{ count(user()->posts) }}</h4>
            </li>
            <li class="list-group-item">
                <h4>Your comments: {{ count(user()->comments) }}</h4>
            </li>
            <li class="list-group-item">
                <h4>Your votes: {{ count(user()->votes) }}</h4>
            </li>
        </ul>
        <div class="card-body">
            <a href="{{ route('user.post.create') }}" class="card-link"
                >Add Post</a
            >
            <a href="{{ route('user.account.edit') }}" class="card-link"
                >Edit Info
            </a>
        </div>
    </div>
</div>
