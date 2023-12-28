<?php

include 'database.php';

if(isset($_POST['login'])){

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password =  $_POST['admin_password'];



$sql = "INSERT INTO admins(admin_name,admin_email,admin_password) VALUES('$admin_name','$admin_email','$admin_password')";

if(mysqli_query($conn,$sql)){

$email = $_GET['email'];
                    
header('Location:admin_detail.php?email='.$email);

}

else{

echo "<script>alert('your account has not been created please try again..!!');</script>";


  }
 }





?>