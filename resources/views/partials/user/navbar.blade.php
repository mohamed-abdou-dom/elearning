<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <router-link class="navbar-brand" to="/">Cascaded</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                    
                @else
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <router-link class="nav-link" to="/fields">Our Careers</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/courses">Browse Courses</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/blog">Our Blog</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/tests">Tests</router-link>
                        </li>
                    </ul>
                @endguest

                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Join Our Community</a>
                        </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hey {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <router-link class="dropdown-item" to="/profile">profile</router-link>
                            <div class="dropdown-divider"></div>
                            <router-link class="dropdown-item" to="/add-article">Add Article</router-link>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    
                </ul>
            </div>
        </div>
    </nav>
</header>