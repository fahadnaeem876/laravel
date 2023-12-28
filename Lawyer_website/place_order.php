<?php

include 'database.php';


// $lawyer_id = $_GET['lawyer_id'];
$lawyer_id = $_GET['lawyer_id'];


$select1 = "SELECT * from lawyers where lawyer_id=$lawyer_id ";
// $select = "SELECT * from appointment where lawyer_email=$email";

$sql = "SELECT * FROM appointment";


$result1 = mysqli_query($conn,$sql);

$arr1 = mysqli_fetch_array($result1);

// $arr1 =['cart_id'];
$customer_name = $arr1['customer_name'];
// $datee =$arr1['datee'];
$customer_email= $arr1['customer_email'];
$customer_address = $arr1['customer_address'];
$customer_phone = $arr1['customer_phone'];
 $lawyer_name =$arr1['lawyer_name'];
 $lawyer_email= $arr1['lawyer_email'];
 $massage = $arr1['massage'];
//  $product_price = $arr1['product_price'];
//  $product_image = $arr1['product_image'];
//  $payment_method = $arr1['payment_method'];

// echo ($customer_name);


$insert = "INSERT into appointment(customer_name,customer_email,customer_address,customer_phone,lawyer_name,lawyer_email,massage) 
VALUES('$customer_name','$customer_email','$customer_address','$customer_phone','$lawyer_name','$lawyer_email','$massage')";

mysqli_query($conn,$insert);
// $delete = "DELETE from appointment where cart_id='$cart_id'";

// mysqli_query($conn,$delete);

header('customer_order.php?email='.$email);
?>
