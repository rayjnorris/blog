
<header style="margin-bottom: 60px;">
            <!--Navbar-->
            
            <nav class="navbar navbar-color fixed-top navbar-toggleable-md navbar-dark">

                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/"><strong><h2>theWild</h2></strong></a>
                    <div class="collapse navbar-collapse" id="navbarNav1">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="/" class="nav-link">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About </a>
                            </li>
                            <li class="nav-item">
                                <a href="/blog" class="nav-link">Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Contact </a>
                            </li>
                      
                        </ul>

                        @if (Auth::guest())
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Register</a>
                            </li>
                            
                        </ul>
                        @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown btn-group">
                                <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                    <a href="/listposts" class="dropdown-item">Posts</a>
                                    <a href="#" class="dropdown-item">Pages</a>
                                    <a href="#" class="dropdown-item">Media</a>
                                    <a href="#" class="dropdown-item">Theme</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown btn-group">
                                <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                    
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                                </div>
                            </li>
                            
                        </ul>
                        @endif
                    </div>
                </div>
            </nav>
            <!--/.Navbar-->
        </header>