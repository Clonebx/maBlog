<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="#">maBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                @guest
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">
                            <a class="" href="{{ route('register') }}">Sign up</a>
                        </button>
                        <button type="button" class="btn btn-secondary">
                            <a class="" href="{{ route('login') }}">Sign in</a>
                        </button>
                    </div>
                    
                    
                @else
                    <a href="{{ route('post.form') }}">
                        <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                    </a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                    </form>
                @endguest
            </li>
        </ul>
    </div>
</nav>