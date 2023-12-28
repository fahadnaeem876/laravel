<?php

session_start(); 


include 'database.php';

if(isset($_POST['email']) && isset($_POST['password'])){


$email = $_POST['email'];
$password = $_POST['password'];

$data = "email=".$email;
    
if(empty($email)){
    $em = "User email is required";
    header("Location: index.php?error=$em&$data");
    exit;
}else if(empty($password)){
    $em = "Password is required";
    header("Location: index.php?error=$em&$data");
    exit;
}else {


        $sql = "SELECT * FROM customers where customer_email='$email' and customer_password='$password'";

        $query = mysqli_query($conn,$sql);

        $sql2 = "SELECT * FROM admins where admin_email='$email' and admin_password='$password'";

        $query2 = mysqli_query($conn,$sql2);

        $sql3 = "SELECT * FROM lawyers where lawyer_email='$email' and lawyer_password='$password'";

        $query3 = mysqli_query($conn,$sql3);

        if(mysqli_num_rows($query) == 1){

            $row = mysqli_fetch_assoc($query);

            if ($row['customer_email'] === $email && $row['customer_password'] === $password) {

                echo "Logged in!";

                $_SESSION['loginID'] = $row['customer_email'];

                $_SESSION['password'] = $row['customer_password'];

                header('Location:customer_home.php?email='.$email);
            
            }

            else{

                echo "<script>alert('invalid email or pw');</script>";        

            }

        }

       else if(mysqli_num_rows($query2) == 1){

            $row = mysqli_fetch_assoc($query2);

            if ($row['admin_email'] === $email && $row['admin_password'] === $password) {

                echo "Logged in!";

                $_SESSION['loginID'] = $row['admin_email'];

                $_SESSION['password'] = $row['admin_password'];

                header('Location:admin_home.php?email='.$email);
            
            }
            else{
            
                echo "<script>alert('invalid email or pw');</script>";
              
            }

        }
        else if(mysqli_num_rows($query3) == 1){

            $row = mysqli_fetch_assoc($query3);

            if ($row['lawyer_email'] === $email && $row['lawyer_password'] === $password) {

                echo "Logged in!";

                $_SESSION['loginID'] = $row['lawyer_email'];

                $_SESSION['password'] = $row['lawyer_password'];

                header('Location:lawyer_home.php?email='.$email);
            
            }
            else{
            
                echo "<script>alert('invalid email or pw');</script>";
              
            }
        }   

        else{
             
            $em = "Password is not Matched";
            header("Location: index.php?error=$em&$data");
          
        }
    }

    
    



}
else{
            
    echo 'Invalid email or pw 3';
  
}


?>