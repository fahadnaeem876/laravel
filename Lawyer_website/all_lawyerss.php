<?php

// include 'database.php';

// session_start();

// require('checksession.php');

// $email = $_GET['email'];

// $sql = "SELECT * FROM admins where admin_email ='$email'";

// $result = mysqli_query($conn,$sql);

// $data = mysqli_fetch_array($result);

?>



<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}


.topnav {
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
  background-color: red;
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
  position: absolute;
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
.video{
  position:fixed;
  right: 0;
  bottom:0;
  left: 0;
  z-index: -1;
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
}
</style>
</head>
<body>
<div style="border-radius:20px;" class ="topnav" id="myTopnav" >
  <a href="admin_home.php?email=<?php echo $_GET['email'];?>" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view_prod.php?email=<?php echo $_GET['email'];?>">View Product</a>
      <a href="insert_prod.php?email=<?php echo $_GET['email'];?>">Insert Product</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Admin<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
    <a href="admin_details.php?email=<?php echo $_GET['email']; ?>">Admin Details</a>
      <a href="create_admin.php?email=<?php echo $_GET['email']; ?>">Create Admin</a>
    </div>
  </div> 
  <a href="customer_details.php?email=<?php echo $_GET['email']; ?>">Customer Details</a>
  <a href="order_details.php?email=<?php echo $_GET['email']; ?>">Order Details</a>
  
  <a href="logout.php">Logut</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div>
<video autoplay muted loop id="myVideo" class="video">
        <source src="images/video1.mp4" type="Video/mp4">     
    </video>
    </div>
<center>
<h1 style="color:red; font-size:50px;"><i><b>HELLO WORLD </b></i></h1>
</center>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html> -->


<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$query = "SELECT * from admins where admin_email = '$email'";

$res = mysqli_query($conn,$query);

$data = mysqli_fetch_array($res);

// echo "WELCOME ".$data['admin_name'];


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body {margin:0;font-family:Arial}

.topnav {
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
}

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

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="admin_home.php?email=<?php echo $_GET['email']; ?>" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="view_prod.php?email=<?php echo $_GET['email']; ?>">View Product</a>
      <a href="insert_prod.php?email=<?php echo $_GET['email']; ?>">Insert Product</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Admin 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="admin_details.php?email=<?php echo $_GET['email']; ?>">Admin Details</a>
      <a href="create_admin.php?email=<?php echo $_GET['email']; ?>">Create Admin</a>
    </div>
  </div>
  <a href="customer_details.php?email=<?php echo $_GET['email']; ?>">Customer Details</a>
  <a href="order_details.php?email=<?php echo $_GET['email']; ?>">Order Details</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="container">

<div class="row">

<?php

include 'database.php';

$sql = "SELECT * FROM lawyer_data";

$query = mysqli_query($conn,$sql);

while($arr = mysqli_fetch_array($query))
{

?>

<div class="col-12">



<div class="item">
    
            <div class="img">
                <img src="<?php echo $arr['lawyer_email']; ?>"height="200px"  alt="">
            </div>
            <div class="h1">
                <h1><?php echo $arr['Campany_name']; ?></h1>
            </div>
            <div class="p">
                <p>Product ID:    &nbsp<?php echo $arr['lawyer_id']; ?></p>
                <p>Service:<?php echo $arr['locations']; ?></p>
                <p>Details:<?php echo $arr['paragarph']; ?></p>
            </div>
            <div class="btn">
                <a href="#">Product Details</a>
            </div>
            </div>
        

        </div>

<?php } ?>

        </div>

        </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>


