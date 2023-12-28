<?php

include 'database.php';

session_start();

require('checksession.php');

$email = $_GET['email'];

$sql = "SELECT * FROM customers where customer_email ='$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body {margin:0;font-family:Arial}

/* .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
} */

.item{
    margin: 10px 0px 10px 0px;

    border: 1px solid gray;
    padding: 10px;
}

img{
    width: 100%;
    height:200px;
}

.p{
    text-align: justify;
}

.btn{
    margin: 30px 0px 10px 0px;
}

.btn a {
    text-decoration: none;
    border: 1px solid gray;
    padding: 10px 30px 10px 30px;
    background-color: gray;
    color: white;
}

.btn a:hover{
    background-color: transparent;
    color: gray;
}

#image{
    width:50px;
    height:40px;
}

.navbar-nav .nav-item .nav-link{
  color:black;
  font-size:14px;
  font-weight:bold;


  /* float: left !important; */
}
.navbar-nav{
    /* float: left !important; */
    margin-top:30px;
    margin-left:200px !important;
}

.navbar-nav .nav-item {
  margin-left:30px !important;
}



.linkone{
    color:red !important;

}
.nav-link:hover{
    color:red !important;
}
.navbar{
	background-color: rgba(255, 255, 255, 0.849) !important;
}
body{
  background-image: url('img/lawyerlogo2.png');
  background-size: cover;
  background-position: fixed;
}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="img-fluid imgh" src="images/logo-color.png" alt="" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link " href="customer_home.php?email=<?php echo $_GET['email']; ?>">Home<span class=""></span></a> 
        </li>
        <li class="nav-item">
        <a class="nav-link" href="all_lawyer.php?email=<?php echo $_GET['email']; ?>">All Lawyers</a>
        </li>
        <li class="nav-item">
        <a class="nav-link linkone" href="book_appoint.php?email=<?php echo $_GET['email']; ?>">Book Appointment</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img id="image" style="border-radius:50%;" src="<?php echo $data['customer_img']; ?>" name="image_product_image" height="40px" width="50px">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#"><?php echo $data['customer_name']; ?></a>
        <a class="dropdown-item" href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile</a>
         <!-- <div class="dropdown-divider"></div> -->
         <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp123 456 7890</a>
        <!-- <span class=""><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span> -->
        </li>

      </ul>
    </div>
  </div>
</nav>


<br><br>

<div class="container-fluid">
<table class="table table-dark table-hover">
<thead>
    <tr>
      <th scope="col">Lawyer ID</th>
      <th scope="col">CUSTOMER NAME</th>
      <th scope="col">CUSTOMER EMAIL</th>
      <th scope="col">CUSTOMER ADDRESS</th>
      <th scope="col">CUSTOMER PHONE NO</th>
      <th scope="col">Lawyer_name</th>
      <th scope="col">Lawyer_email</th>
      <th scope="col">Message</th>
      <!-- <th scope="col">PRODUCT PRICE</th>
      <th scope="col">PRODUCT IMAGE</th>
      <th scope="col">PAYMENT METHOD</th>
      <th scope="col">DATE</th>
      <th scope="col">PLACE ORDER</th> -->
      <th scope="col">Request</th>

      <!-- <th scope="col">PLACE ORDER</th> -->
      <th scope="col" colspan="2">ACTION</th>



    </tr>
  </thead>
  <tbody>


  <?php

include 'database.php';
$email=$_GET['email'];
$sql = "SELECT * FROM appointment where customer_email='$email'";

$query = mysqli_query($conn,$sql);

while($arr = mysqli_fetch_array($query))
{

?>

<tr>
<td><?php echo $arr['lawyer_id']; ?></td>
<td><?php echo $arr['customer_name']; ?></td>
<td><?php echo $arr['customer_email']; ?></td>
<td><?php echo $arr['customer_address']; ?></td>
<td><?php echo $arr['customer_phone']; ?></td>
<td><?php echo $arr['lawyer_name']; ?></td>

    <td><?php echo $arr['lawyer_email']; ?></td>
    <td><?php echo $arr['massage']; ?></td>
    <td><?php echo $arr['request']; ?></td>

 
   <!-- <td><a href="place_order.php?lawyer_id=<?php echo $arr['lawyer_id']; ?>"><i class="fa fa-check-circle" style="font-size:24px; color:#404bec;"></a></td> -->
    <td><a href="update_lawyer.php?lawyer_id=<?php echo $arr['lawyer_id']; ?>&email=<?php echo $_GET['email'] ?>"><i class="fa fa-edit" style="font-size:24px; color:green;"></i></a></td>
    <td><a href="delete_lawyer.php?lawyer_id=<?php echo $arr['lawyer_id']; ?>&email=<?php echo $_GET['email'] ?>"><i class="fa fa-close" style="font-size:24px; color:red;"></i></a></td>


    </tr>
  </tbody>

  <?php

}

?>

</table>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<i class="far fa-check-double"></i>