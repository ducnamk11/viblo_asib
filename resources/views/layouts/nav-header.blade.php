<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="col-md-8 mx-auto">
        <div
            class="collapse navbar-collapse navbar-ex1-collapse auto"
            id="navbarSupportedContent"
        >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}"
                        >Home <span class="sr-only">(current)</span></a
                    >
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form
                class="form-inline my-2 my-lg-0"
                action="{{ asset('/search/') }}"
                method="get"
            >
                <input
                    required
                    class="form-control mr-sm-2"
                    type="text"
                    placeholder="Search"
                    aria-label="Search"
                    name="search"
                />
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
    <ul class="navbar-nav mr-auto float-right">
        @if(Auth::user())
        <li class="nav-item">
            <div class="dropdown">
                <button
                    class="btn btn-outline-dark dropdown-toggle"
                    type="button"
                    id="dropdownMenu2"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    {{user()->name}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">
                        <a href="{{ route('user.account.index') }}">Account</a>
                    </button>
                    <button class="dropdown-item" type="button">
                        <a href="{{ route('user.post.create') }}"
                            >Create Post</a
                        >
                    </button>
                    <button class="dropdown-item" type="button">
                        <a href="{{ route('user.post.create') }}">Some thing</a>
                    </button>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="#">Regiter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @endif
    </ul>
</nav>
