<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lawyer Website</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Lawyer & Attorney One Page HTML Template">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="sharjeel anjum">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap css -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<!-- Fontawesome css -->
<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

<!-- Rev Slider css -->
<!-- <link rel="stylesheet" href="js/revolution-slider/css/settings.css"> -->
<link rel="stylesheet" href="{{ asset('js/revolution-slider/css/settings.css') }}">


<!-- Magnific-popup css -->
<!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">


<!-- Owl Carousel css -->
<!-- <link rel="stylesheet" href="css/owl.theme.css"> -->
<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">


<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">


<!-- Main css -->
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

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
        <li class="active"><a href="{{ url('/') }}">Home<span class=""></span></a> 
          <!-- dropdown start -->
          <!-- <ul class="dropdown-menu">
            <li class="active"><a href="index-2.html">Home Slider</a></li>
            <li><a href="index2.html">Home Static</a></li>
          </ul> -->
        </li>
        <li><a href="{{ url('/all_lawyer') }}">All Lawyers</a></li>

        <!-- <li><a href="about-us.html">About</a></li> -->
                <li><a href="{{ url('/book_appoint') }}">Book Appointment</a></li>
                <!-- <li><a href="book_appoint.php">Profile</a></li> -->


        <!-- <li><a href="services.html">Service</a></li> -->

         <li class="dropdown"><a href="#"><img style="border-radius:50%;" src="" name="image_product_image" height="40px" width="50px"><span class="caret"></span></a>
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <li><a href="#">seeting</a></li>
            <li><a href="{{ url('/my_profile') }}">My Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li> 
    
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span></li>
      </ul>
    </div>
  </div>
</div>

    

<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Popup --> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/magnific-popup-options.js"></script> 

<!-- Carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Sticky Header --> 
<script src="js/jquery.sticky.js"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 

<!-- Parallax --> 
<script src="js/jquery.parallax.js"></script> 

<!-- Counter --> 
<script src="js/counter.js"></script> 
<script src="js/smoothscroll.js"></script> 

<!-- Custom --> 
<script src="js/custom.js"></script>
</body>
</html>