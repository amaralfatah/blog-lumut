
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/posts') }}">Post</a>
                    </li>
                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/accounts') }}">Akun</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
