<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary mb-0">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip"
                title="Make more human socialize" data-placement="bottom" target="_blank">
                <span style="font-size: 1.7em;">Karibe</span>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation"
            data-nav-image="assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                        <span style="font-size: 1.4em;">Login</span>
                    </a>
                </li>
                
                @if (Route::has('register'))

                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">
                        <span style="font-size: 1.4em;">Register</span>
                    </a>
                </li>
                @endif

                @else

                @if (Auth::user()->role == 'Member')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fe.post.create') }}">
                            <span style="font-size: 1.4em;">Write a Post</span>
                        </a>
                    </li>

                @elseif (Auth::user()->role == 'Admin')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fe.post.create') }}">
                            <span style="font-size: 1.4em;">Write a Post</span>
                        </a>
                    </li>
                    
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span style="font-size: 1.4em;">Logout</span>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                @endguest


            </ul>
        </div>
    </div>
</nav>