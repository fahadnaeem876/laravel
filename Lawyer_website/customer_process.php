<?php

// include 'database.php';


// if(isset($_POST['save'])){

//     $customer_name = $_POST['name'];
//     $customer_password = $_POST['password'];
//     $customer_email = $_POST['email'];
//     $customer_address = $_POST['address'];
//     $customer_phone = $_POST['phone'];
// $files_name = $_FILES['image'];


// // $sql = "INSERT INTO tryit(std_name,email,std_Pass,country,comment_box,gender,files) VALUES('$name','$email','$pass' ,'$country','$box','$gender','$files_name')";
// $sql = "INSERT INTO customers(customer_name,customer_password,customer_email,customer_address,customer_phone,customer_img) VALUES('$customer_name','$customer_password','$customer_email','$customer_address','$customer_phone','$files_name') ";

// if(mysqli_query($conn,$sql)){


// echo "Data has been successfully inserted";
// header('Location:index.php');

// }

// else{

//     echo "Error in Data insertion";
    

// }

// }




//
// if(isset($_FILES['image'])){
//     $error= array();
//     $files_size = $_FILES['image']['size'];
//     $files_name = $_FILES['image']['name'];
//     $files_type = $_FILES['image']['type'];
//     $files_tep = $_FILES['image']['tmp_name'];

//     // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
//     // $extention = array("jpeg","jpg","png");
//     // if(in_array($file_ext,$extansion)===false){
//     //     $error[]="this file is error";
//     // }
//     // if($file_size > 2097152){
//     //     $error[]='files size should be 2 mb';
//     // }
//     if(empty($error) == true){
//         move_uploaded_file($files_tep,"upload/".$files_name);
//         echo"file uploaded  sucessfuly";
//     }
//     else{
//         print_r($error);
//     }
    
// }






include 'database.php';

if(isset($_POST['save'])){

    $customer_name = $_POST['name'];
    $customer_password = $_POST['password'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];
    $customer_phone = $_POST['phone'];
$product_image = $_FILES['image'];

$filename = $product_image['name'];
$filepath = $product_image['tmp_name'];
$fileerror = $product_image['error'];

// $fname = $_POST['name'];
// $uname = $_POST['email'];
// $pass = $_POST['password'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];



$data = "name=".$name."&email=".$customer_email;

if (empty($customer_name)) {
    $em = "Full name is required";
    header("Location: register.php?error=$em&$data");
    exit;
}else if(empty($customer_email)){
    $em = "User email is required";
    header("Location:register.php?error=$em&$data");
    exit;
}else if(empty($customer_password)){
    $em = "Password is required";
    header("Location:register.php?error=$em&$data");
    exit;
}else if(empty($customer_phone)){
    $em = "Phone is required";
    header("Location:register.php?error=$em&$data");
    exit;
}else if(empty($customer_address)){
    $em = "Password is required";
    header("Location:register.php?error=$em&$data");
    exit;
}else {



if($fileerror == 0){

    $destfile = 'upload/'.$filename;
    
    move_uploaded_file($filepath,$destfile);
    
    // $sql = "INSERT into products(product_name,product_price,product_image) VALUES('$product_name','$product_price','$destfile')";
$sql = "INSERT INTO customers(customer_name,customer_password,customer_email,customer_address,customer_phone,customer_img) VALUES('$customer_name','$customer_password','$customer_email','$customer_address','$customer_phone','$destfile') ";
    
    mysqli_query($conn,$sql);

    // $email = $_GET['email'];
    
    header('Location:index.php');
    
    }

}
}

?>
