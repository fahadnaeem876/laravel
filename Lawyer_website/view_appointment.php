
<?php

include 'database.php';

session_start();

require('checksession.php');

$email = $_GET['email'];

$sql = "SELECT * FROM appointment where lawyer_email ='$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC">
    


    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/styless.css" rel="stylesheet">
    <style>

#b1:hover{
  background-color: #555;
  color: black;
  cursor: pointer;

}


#b1 {
  float: left;
  display: block;
  color: red;
  text-align: center;
  outline: none;
  border: none;
  
}
</style>
</head>

<body>

<?php

include 'database.php';
$email=$_GET['email'];

$sql = "SELECT * FROM appointment where lawyer_email='$email'";

$query = mysqli_query($conn,$sql);
$arr = mysqli_fetch_array($query);

?>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="lawyer_home.php?email=<?php echo $_GET['email'];?>" class="navbar-brand w-100 h-100 m- p-40 d-flex align-items-center justify-content-center">
                
                <img class="position-absolute w-90 h-100"  src="img/lawyerlogo1.png">

                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <large>Lawyers@example.com</large>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <large>+92 0313123456</large>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.twitter.com/">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://pk.linkedin.com/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.youtube.com/">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="lawyer_home.php?email=<?php echo $_GET['email'];?>" class="nav-item nav-link active">Home</a>
                            <a href="my_profile.php?email=<?php echo $_GET['email'];?>" class="nav-item nav-link">My profile</a>
                            <!-- <a href="view_appointment.php?email=<?php echo $_GET['email'];?>&lawyer_id=<?php echo $_GET['lawyer_id'];?>" class="nav-item nav-link">View Appointment</a> -->
                            <a href="view_appointment.php?email=<?php echo $_GET['email'] ?>" class="nav-item nav-link">Veiw appointment</a>

                            <a href="my_card.php?email=<?php echo $_GET['email'] ?>" class="nav-item nav-link">My card</a>

                            <!-- <a href="Create_lawyer_profile.php?email=<?php echo $_GET['email'];?>" class="nav-item nav-link">Create Card</a> -->

                            <!-- <a href="my_card.php?lawyer_id=<?php echo $arr['lawyer_id'];?>&email=<?php echo $_GET['email'] ?>" class="nav-item nav-link">My card</a> -->


                        </div>
                     <button  type="button" id="b1"  data-toggle="modal" data-target="#myModal" style=" border:none; font-size:20px; border-radius:20px;">Logout</button>
                     <a href="javascript:void(0);" onclick="myFunction()"></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>



    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <center>
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Are you sure you want to logout?</h4>
        </div>
        
        <div class="modal-body">
      <button onclick="func1()">OK</button>
      <button data-dismiss="modal">CANCEL</button>
        </div>
    
      
    </div>
  </center>
  </div>
  
</div>

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
      <th scope="col">Massage</th>
      <th scope="col">Response</th>

      <!-- <th scope="col">PRODUCT PRICE</th>
      <th scope="col">PRODUCT IMAGE</th>
      <th scope="col">PAYMENT METHOD</th>
      <th scope="col">DATE</th>
      <th scope="col">PLACE ORDER</th> -->
      <!-- <th scope="col">PLACE ORDER</th> -->
      <th scope="col" colspan="3">ACTION</th>



    </tr>
  </thead>
  <tbody>


  <?php

// include 'database.php';
include 'database.php';
$email=$_GET['email'];
$sql = "SELECT * FROM appointment where lawyer_email='$email'";

$query1 = mysqli_query($conn,$sql);
// $arr = mysqli_fetch_array($query);

while($arr = mysqli_fetch_array($query1))
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

    <td><a href="accept_appointment.php?lawyer_id=<?php echo $arr['lawyer_id']; ?>&email=<?php echo $_GET['email'] ?>">
<i class="fa fa-check-circle" style="font-size:24px; color:blue;"></i></a></td>
<td><a href="reject_appointment.php?lawyer_id=<?php echo $arr['lawyer_id']; ?>&email=<?php echo $_GET['email'] ?>">
<i class="fa fa-close" style="font-size:24px; color:red;"></i></a></td>


    </tr>
  </tbody>

  <?php

}

?>

</table>
</div>










    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/mainss.js"></script>



    <script>
function func1(){

location.href = "logout.php";

}

</script>
</body>

</html>