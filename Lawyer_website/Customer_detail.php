<?php

include 'database.php';

session_start();

require('checksession.php');

$email = $_GET['email'];

$sql = "SELECT * FROM admins where admin_email ='$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<!--  50:48-->
<head>
<meta charset="UTF-8">
<title>Lawyer & Attorney - Responsive Onepage HTML Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Lawyer & Attorney One Page HTML Template">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="sharjeel anjum">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Fontawesome css -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Rev Slider css -->
<link rel="stylesheet" href="js/revolution-slider/css/settings.css">

<!-- Magnific-popup css -->
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- Owl Carousel css -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<div class="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
</div>



<?php

include 'database.php';

$sql = "SELECT * FROM admins";

$query = mysqli_query($conn,$sql);



?>
<!-- Navigation Section -->
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
        <li class="active"><a href="admin_home.php?email=<?php echo $_GET['email'];  ?>">Home<span class=""></span></a> 
          <!-- dropdown start -->
          <!-- <ul class="dropdown-menu">
            <li class="active"><a href="index-2.html">Home Slider</a></li>
            <li><a href="index2.html">Home Static</a></li>
          </ul> -->
        </li>
        <!-- <li><a href="all_lawyerss.php?email=<?php echo $_GET['email'];?>">All Lawyers</a></li> -->

        <li class="dropdown"><a href="#">Appointment<span class="caret"></span></a>
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Name</a></li> -->
            <li><a href="customer_appoint.php?email=<?php echo $_GET['email']; ?>">Customer Appointment</a></li>
            <li><a href="lawyeradmin_appoint.php?email=<?php echo $_GET['email']; ?>">lawyer Appointment</a></li>
          </ul>
        </li> 

        <li class="dropdown"><a href="#">Admin<span class="caret"></span></a>
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Name</a></li> -->
            <li><a href="Admin_detail.php?email=<?php echo $_GET['email']; ?>">Admin Detail</a></li>
            <li><a href="admin_create.php?email=<?php echo $_GET['email']; ?>">Admin Create</a></li>
          </ul>
        </li> 

        <!-- <li><a href="order_detail.php?email=<?php echo $_GET['email'];?>">Order Details</a></li> -->

        <!-- <li><a href="about-us.html">About</a></li> -->
                <li><a href="Customer_detail.php?email=<?php echo $_GET['email']; ?>">Customer Detail</a></li>
                <!-- <li><a href="book_appoint.php">Profile</a></li> -->


        <!-- <li><a href="services.html">Service</a></li> -->

         <li class="dropdown"><a href="#">Profile<span class="caret"></span></a>
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <li><a href="#">Name</a></li>
            <!-- <li><a href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile profile</a></li> -->
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li> 
        <!-- <li class="dropdown"><a href="#">Pages <span class="caret"></span></a> 
          dropdown start
          <ul class="dropdown-menu">
            <li><a href="practice-areas.html">Practice Areas List</a></li>
            <li><a href="practice-area-detail.html">Practice Areas Detail</a></li>
            <li><a href="attorney-list.html">Attorney List</a></li>
            <li><a href="attorney.html">Attorney Detail</a></li>
            <li><a href="gallery.html">Gallery 1</a></li>
            <li><a href="gallery2.html">Gallery 2</a></li>
            <li><a href="gallery3.html">Gallery 3</a></li>
            <li><a href="faq.html">FAQs</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="contact-us.html">Contact</a></li -->
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span></li>
      </ul>
    </div>
  </div>
</div>



<br>


<div class="container-fluid">
<table class="table table-dark table-hover">
<thead>
    <tr>
      <th scope="col">CUSTOMER ID</th>
      <th scope="col">CUSTOMER NAME</th>
      <th scope="col">CUSTOMER EMAIL</th>
      <th scope="col">CUSTOMER PASSWORD</th>
      <th scope="col">CUSTOMER ADDRESS</th>
      <th scope="col">CUSTOMER PHONE NO.</th>
      <th scope="col" colspan="2">ACTION</th>
    </tr>
  </thead>
  <tbody>


<?php

include 'database.php';

$sql = "SELECT * FROM customers";

$query = mysqli_query($conn,$sql);

while($arr = mysqli_fetch_array($query))
{

?>

<tr>
    <td><?php echo $arr['customer_id']; ?></td>
    <td><?php echo $arr['customer_name']; ?></td>
    <td><?php echo $arr['customer_email']; ?></td>
    <td><?php echo $arr['customer_password']; ?></td>
    <td><?php echo $arr['customer_address']; ?></td>
    <td><?php echo $arr['customer_phone']; ?></td>
    <td><a href="update_customer.php?customer_id=<?php echo $arr['customer_id']; ?>&email=<?php echo $_GET['email'] ?>"><i class="fa fa-edit" style="font-size:24px; color:green;"></i></a></td>
    <td><a href="delete_customer.php?customer_id=<?php echo $arr['customer_id']; ?>&email=<?php echo $_GET['email'] ?>"><i class="fa fa-close" style="font-size:24px; color:red;"></i></a></td>
    </tr>
  </tbody>

  <?php

}

?>

</table>
</div>

<!-- Bootstrap --> 
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

<!--  53:50-->
</html>