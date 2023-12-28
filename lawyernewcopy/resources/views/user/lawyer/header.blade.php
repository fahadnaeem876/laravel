<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/home')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('lawyer_about') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('lawyer_service') }}" class="nav-item nav-link">Practice</a>
                            <a href="{{ route('lawyer_team') }}" class="nav-item nav-link">Attorneys</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Menu Item 1</a>
                                    <a href="#" class="dropdown-item">Menu Item 2</a>
                                    <a href="#" class="dropdown-item">Menu Item 3</a>
                                </div>
                            </div>
                            <a href="{{ route('lawyer_details') }}" class="nav-item nav-link">Card Details</a>
                        </div>
                        <!-- <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a> -->
                        <form method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
                            @csrf
                            <div class="login_bt">
                                <ul>
                                    @auth
                                        <!-- User is logged in, show Logout link -->
                                            <form action="">
                                                <input type="submit" class="btn btn-primary mr-3 d-none d-lg-block mt-3" value="Logout"></input>
                                                </form>
                                            @else
                                        <!-- User is not logged in, show Login link -->
                                        <li class="login-link">
                                            <a href="{{ route('login') }}">
                                                <span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </form>
                    </div>
                </nav>