<?php

include 'database.php';

if(isset($_POST['save'])){

$lawyer_name = $_POST['name'];
$lawyer_email = $_POST['email'];
$lawyer_password =  $_POST['password'];
$lawyer_address = $_POST['address']; 
$lawyer_phone = $_POST['phone'];
$lawyer_experties = $_POST['experties'];
$gender = $_POST['gender'];
$lawyer_qualification = $_POST['qualification'];
$lawyer_service = $_POST['service'];
$lawyer_detail = $_POST['detail'];


$product_image = $_FILES['image'];

$filename = $product_image['name'];
$filepath = $product_image['tmp_name'];
$fileerror = $product_image['error'];


if($fileerror == 0){

    $destfile = 'upload/'.$filename;
    
    move_uploaded_file($filepath,$destfile);

$sql = "INSERT INTO lawyers (lawyer_name,lawyer_email,lawyer_password,lawyer_address,lawyer_phone ,lawyer_experties,lawyer_qualification,gender,lawyer_img,services,detail)
 VALUES('$lawyer_name','$lawyer_email','$lawyer_password','$lawyer_address','$lawyer_phone','$lawyer_experties','$lawyer_qualification','$gender','$destfile' ,'$lawyer_service','$lawyer_detail')";

mysqli_query($conn,$sql);


header('Location:index.php');


}

else{

echo "<script>alert('your account has not been created please try again..!!');</script>";

}
}





?>