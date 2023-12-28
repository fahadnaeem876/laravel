<div class="navbar custom-navbar" role="navigation">
  <div class="container"> 
    
    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE --> 
      <a href="index-2.html" class="navbar-brand"><img src="images/logo-color.png" alt="" /></a> </div>
    
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{ route('user_home') }}">Home</a></li>
        <li><a href="{{ route('user_about') }}">About</a></li>
        <li><a href="{{ route('user_service') }}">Service</a></li>
        <li class="dropdown"><a href="#">Lawyers <span class="caret"></span></a> 
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <!-- <li><a href="{{ route('user_bloglist') }}">Blog Right Sidebar</a></li> -->
            <li><a href="{{ route('user_attorneylist') }}">Attorney List</a></li>
            <!-- <li><a href="{{ route('user_bloglist2') }}">Blog Left Sidebar</a></li> -->
            <li><a href="{{ route('user_blogdetail') }}">Lawyer Detail</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#">Pages <span class="caret"></span></a> 
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <li><a href="{{ route('user_practiceareas') }}">Practice Areas List</a></li>
            <li><a href="{{ route('user_practiceareadetail') }}">Practice Areas Detail</a></li>
            <li><a href="{{ route('user_gallery') }}">Gallery 1</a></li>
            <li><a href="{{ route('user_gallery2') }}">Gallery 2</a></li>
            <li><a href="{{ route('user_gallery3') }}">Gallery 3</a></li>
            <li><a href="{{ route('user_faq') }}">FAQs</a></li>
            <li><a href="{{ route('user_testimonials') }}">Testimonials</a></li>
            <li><a href="{{ route('user_404') }}">404</a></li>
          </ul>
        </li>
        <li><a href="{{ route('user_contactus') }}">Contact</a></li>
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span></li>
        <li>
        <form method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
                            @csrf
                            <div class="login_bt">
                                <ul>
                                    @auth
                                        <!-- User is logged in, show Logout link -->
                                            <form action="" >
                                                <input type="submit" class="btn btn-primary mr-3 d-none d-lg-block logoutbtn" value="Logout"></input>
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
                        </form>        </li>
      </ul>
    </div>
  </div>
</div>