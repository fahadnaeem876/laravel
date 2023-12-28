<style>
    .login_bt ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center; /* Align items vertically in the center */
    }

    .login_bt li {
        margin-right: 10px; /* Adjust as needed for spacing between elements */
    }

    .login-link,
    .logout-link {
        display: flex;
        align-items: center; /* Align items vertically in the center */
    }

    .login-link a,
    .logout-link button {
        background: none;
        border: none;
        cursor: pointer;
        text-decoration: none;
        color: #333; /* Adjust color as needed */
        display: flex;
        align-items: center; /* Align items vertically in the center */
    }

    .login-link .user_icon,
    .logout-link .user_icon {
        margin-right: 5px; /* Adjust as needed for spacing between icon and text */
    }

    .search-icon {
        margin-left: auto; /* Push the search icon to the right */
    }
</style>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('about')}}">About</a>
                     </li>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact')}}">Contact Us</a>
                     </li>
                  
                  </ul>
  
                  <form method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
    @csrf
    <div class="login_bt">
        <ul>
            @auth
                <!-- User is logged in, show Logout link -->
                <li class="logout-link">
                    <button type="submit">
                        <span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Logout
                    </button>
                </li>
            @else
                <!-- User is not logged in, show Login link -->
                <li class="login-link">
                    <a href="{{ route('login') }}">
                        <span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login
                    </a>
                </li>
            @endauth
            <li class="search-icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</form>


               </div>
            </nav>