<?php

session_start();

require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$query = "SELECT * from admins where admin_email = '$email'";

$res = mysqli_query($conn,$query);

$data = mysqli_fetch_array($res);

// echo "WELCOME ".$data['admin_name'];

$customer_id = $_GET['customer_id'];

$sql = "SELECT * from customers where customer_id='$customer_id'";

$res1 = mysqli_query($conn,$sql);

$data1 = mysqli_fetch_array($res1);

if(isset($_POST['login'])){

    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];
    $customer_address = $_POST['customer_address'];
    $customer_phone = $_POST['customer_phone'];
    
 if($fileerror == 0){
        
 $sql = "UPDATE customers SET customer_name='$customer_name', customer_email='$customer_email', customer_password='$customer_password', customer_address='$customer_address', customer_phone='$customer_phone' where customer_id='$customer_id'";
        
 mysqli_query($conn,$sql);
    
  $email = $_GET['email'];
        
 header('Location:customer_detail.php?email='.$email);
        
        }
    
    }

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
        <li><a href="all_lawyerss.php?email=<?php echo $_GET['email'];?>">All Lawyers</a></li>

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
            <li><a href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile profile</a></li>
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
<br>

<center style="padding:50px;">
<i style="color:blue; font-size:30px;"><h2>UPDATE CUSTOMER DETAILS</h2></i>
</center>

<div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <i><b><label for="fname" style="color:red; font-size: 30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCUSTOMER NAME :</label></i></b>
      </div>
      <div class="col-75">
        <input style="border-radius:20px;" type="text" id="fname" name="customer_name" placeholder="YOUR CUSTOMER NAME.." value="<?php echo $data1 ['customer_name']?>"required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <i><b><label for="lname"style="color:red; font-size: 30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCUSTOMER EMAIL :</label></i></b>
      </div>
      <div class="col-75">
      <input style="border-radius:20px;" type="email" id="lname" name="customer_email" placeholder="YOUR CUSTOMER EMAIL.." value="<?php echo $data1 ['customer_email']?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <i><b><label for="fname"style="color:red; font-size: 30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCUSTOMER PASSWORD:</label></i></b>
      </div>
      <div class="col-75">
      <input style="border-radius:20px;" type="password" id="fname" name="customer_password" placeholder="YOUR CUSTOMER PASSWORD.." value="<?php echo $data1 ['customer_password']?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <i><b><label for="fname"style="color:red; font-size: 30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCUSTOMER ADDRESS :</label></i></b>
      </div>
      <div class="col-75">
      <input style="border-radius:20px;" type="text" id="fname" name="customer_address" placeholder="YOUR CUSTOMER ADRESS.." value="<?php echo $data1 ['customer_address']?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <i><b><label for="fname"style="color:red; font-size: 30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCUSTOMER PHONE :</label></i></b>
      </div>
      <div class="col-75">
      <input style="border-radius:20px;" type="number" id="fname" name="customer_phone" placeholder="YOUR CUSTOMER PHONE.." value="<?php echo $data1 ['customer_phone']?>" required>
      </div>
    </div>
    <br>
    <center>
    <div class="row">
      <input style="border-radius:20px;" type="submit" value="UPDATE" name="login">
    </div>
    </center>
  </form>
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