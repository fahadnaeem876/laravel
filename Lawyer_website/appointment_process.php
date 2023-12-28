<?php

include 'database.php';

session_start();
require('checksession.php');

$email = $_GET['email'];
// $product_id = $_GET['product_id'];

$sql1 = "SELECT * from customers where customer_email='$email'";
// $sql2 = "SELECT * from products where product_id='$product_id'";

$result1 = mysqli_query($conn,$sql1);
// $result2 = mysqli_query($conn,$sql2);

$customer = mysqli_fetch_array($result1);
// $product = mysqli_fetch_array($result2);

if(isset($_POST['save'])){

$customer_name = $_POST['customer_name'];
$customer_email = $_POST['customer_email'];
$customer_address = $_POST['customer_address'];
$customer_phone = $_POST['customer_phone'];
$lawyer_name = $_POST['lawyer_name'];
$lawyer_email = $_POST['lawyer_email'];
$massage = $_POST['massage'];
// $product_image = $product['product_image'];

// $filename = $product_image['name'];
// $filepath = $product_image['tmp_name'];
// $fileerror = $product_image['error'];

    
$sql = "INSERT into appointment(customer_name,customer_email,customer_address,customer_phone,lawyer_name,lawyer_email,massage) 
VALUES('$customer_name','$customer_email','$customer_address','$customer_phone','$lawyer_name','$lawyer_email','$massage')";
    
mysqli_query($conn,$sql);

$email = $_GET['email'];
    
 header('Location:book_appoint.php?email='.$email);
    
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

<style>
.card{
  outline:1px black solid;
 
}
</style>
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
        <li class="active"><a href="customer_home.php?email=<?php echo $_GET['email']; ?>">Home<span class=""></span></a> 
          <!-- dropdown start -->
          <!-- <ul class="dropdown-menu">
            <li class="active"><a href="index-2.html">Home Slider</a></li>
            <li><a href="index2.html">Home Static</a></li>
          </ul> -->
        </li>
        <li><a href="all_lawyer.php?email=<?php echo $_GET['email']; ?>">All Lawyers</a></li>

        <!-- <li><a href="about-us.html">About</a></li> -->
                <li><a href="book_appoint.php?email=<?php echo $_GET['email']; ?>">Book Appointment</a></li>
                <!-- <li><a href="book_appoint.php">Profile</a></li> -->


        <!-- <li><a href="services.html">Service</a></li> -->
         <li class="dropdown"><a href="#">Profile<span class="caret"></span></a> 
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <li><a href="#">Name</a></li>
            <li><a href="customer_profile.php?email=<?php echo $_GET['email']; ?>">Edit profile</a></li>
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
<?php
$lawyer_id= $_GET['lawyer_id'];
$sql = "SELECT * FROM lawyers where lawyer_id=$lawyer_id";

$query = mysqli_query($conn,$sql);

$arr = mysqli_fetch_array($query);
?>
<h1>CART PAGE</h1>
<div class="container" style="margin-top:10%;">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Customer name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="customer_name" placeholder="Your customer name.." value="<?php echo $customer['customer_name']; ?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Customer email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="customer_email" placeholder="Your product price.." value="<?php echo $customer['customer_email']; ?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Customer Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="customer_address" placeholder="Your name.." value="<?php echo $customer['customer_address']; ?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Customer Phone no.</label>
      </div>
      <div class="col-75">
        <input type="number" id="lname" name="customer_phone" placeholder="Your name.." value="<?php echo $customer['customer_phone']; ?>" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Lawyer Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lawyer_name" placeholder="Enter lawyer name.." value="<?php echo $arr['lawyer_name']; ?>" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Lawyer email:</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="lawyer_email" placeholder="Enter lawyer name.."  value="<?php echo $arr['lawyer_email']; ?>"  required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Message:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="massage" placeholder="Enter lawyer massage.." required>
      </div>
    </div>
 

  
  <br>
  <center>
    <div class="row">
      <input type="submit" value="Place Order" name="save">
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
</html>