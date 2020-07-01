<div class="col-md-6 mx-auto">
    <div class="card-body text-center">
        <img
            {{--            src="{{ user()->avatar }}"--}}
            src="{{ url('avatars/'.user()->avatar) }}"
            class="rounded-circle float-left avatar img-thumbnail"
        />
        <div class="float-left ml-5">
            <p>
                <a href="#" class="card-link">
                    <h3 style="text-transform: uppercase;">
                        {{user()->name}}
                    </h3>
                </a>
            </p>
            <a href="{{ route('user.account.edit') }}" class="btn btn-primary">
                Edit info
            </a>
            <a href="{{ route('user.post.create') }}" class="btn btn-info">
                Add post
            </a>
        </div>
    </div>
</div>
<div style="margin-top: 90px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
        <ul class="navbar-nav mx-auto col-md-6">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.account.index') }}">
                    Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.account.voted') }}">
                    Voted
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="{{ route('user.account.commented') }}"
                >
                    Commented
                </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">Question</a></li>
        </ul>
    </nav>
</div>
