<?php

include 'database.php';

session_start();

require('checksession.php');

$email = $_GET['email'];

$sql = "SELECT * FROM lawyer_data where lawyer_email='$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LAWYERS WEBSITE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


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

$sql = "SELECT * FROM lawyer_data";

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
                            <a href="view_appointment.php?lawyer_id=<?php echo $arr['lawyer_id']; ?>&email=<?php echo $_GET['email'] ?>" class="nav-item nav-link">Veiw appointment</a>
                            <!-- <a href="Create_lawyer_profile.php?email=<?php echo $_GET['email'];?>" class="nav-item nav-link">Create Card</a> -->
                            <!-- <a href="my_card.php?email=<?php echo $_GET['email'];?>" class="nav-item nav-link">My Card</a> -->

                            <a href="my_card.php?email=<?php echo $_GET['email'] ?>" class="nav-item nav-link">My card</a>


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

<br>
<br>
<div class="container">

<div class="row">

<?php

include 'database.php';


$lawyer_email = $_GET['email'];

$sql1 = "SELECT * FROM lawyers where lawyer_email='$lawyer_email'";

$query = mysqli_query($conn,$sql1);

while($arr = mysqli_fetch_array($query))
{

?>

<div class="col-12">



<div class="item">
    <div class="card">
            <div style="text-align:center;" class="img col-2">
                <img src="<?php echo $arr['lawyer_img']; ?>"height="200px"  alt="">
            </div>
            <div class="h1">
                <h1><?php echo $arr['lawyer_name']; ?></h1>
            </div>
            <div class="p">
                <p>Product ID:    &nbsp<?php echo $arr['lawyer_id']; ?></p>
                <p>Email&nbsp<?php echo $arr['lawyer_email']; ?></p>

                <p>Service:<?php echo $arr['services']; ?></p>
                <p>Details:<?php echo $arr['detail']; ?></p>
            </div>
            <div class="btn">
                <!-- <a href="edit_card.php?email=<?php echo $_GET['email'];?>">Edit Card</a> -->
            </div>
            </div>
        </div>

        </div>

<?php } ?>

        </div>

        </div>

    <!-- Header End -->




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