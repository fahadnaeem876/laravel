<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$query = "SELECT * from lawyers where lawyer_email = '$email'";

$res = mysqli_query($conn,$query);

$data = mysqli_fetch_array($res);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JUSTICE - Free Lawyer Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/styless.css" rel="stylesheet">

    <style>
    
    
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  background: white;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  border: solid 5px black;
  border-radius:8px;
  max-width: 768px;
  margin: 60px auto;
  position: relative;
}

form {
  padding: 37.5px;
  margin: 50px 0;
  border-radius:;
}

h1 {
  color:brown;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}

.underline {
  border-bottom: solid 2px #474544;
  margin: -0.512em auto;
  width: 80px;
}


.email {
	float: right;
	width: 45%;
    color:brown;
}

input[type='text'], [type='email'], [type='number'], [type='password'],select, textarea {
	background: none;
  border: none;
	border-bottom: solid 2px #474544;
	color: #474544;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus, [type='password']:focus,  [type='number']:focus, textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	float: left;
	width: 45%;
    color:brown;
}

select {
  background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.subject {
  width: 100%;
  color:brown;
}



::-webkit-input-placeholder {
	color: #474544;
}

:-moz-placeholder { 
	color: #474544;
	opacity: 1;
}

::-moz-placeholder {
	color: #474544;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #474544;
}

#form_button {
  background: none;
  border: solid 2px #474544;
  color: #474544;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#form_button:hover {
  background: #474544;
  color: #F2F3EB;
}

@media screen and (max-width: 768px) {
  #container {
    margin: 20px auto;
    width: 95%;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 26px;
  }
  
  .underline {
    width: 68px;
  }
  
  #form_button {
    padding: 15px 25px;
  }
}

@media screen and (max-width: 420px) {
  h1 {
    font-size: 18px;
  }
  
  .icon {
    height: 35px;
    width: 35px;
  }
  
  .underline {
    width: 53px;
  }
  
  input[type='text'], [type='email'], select, textarea {
    font-size: 0.875em;
  }
}


.a1 {
  background-color: #826644;
  color: white;
  padding: 15px 250px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  
}

.a2 {
  background-color:#826644;
  color: white;
  padding: 15px 238px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  
}

    </style>
</head>

<body>
<?php

include 'database.php';

$sql = "SELECT * FROM appointment";

$query = mysqli_query($conn,$sql);
$arr = mysqli_fetch_array($query);

?>
   
    <!-- Header Start -->
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
      <button onclick="func1()">ok</button>
      <button data-dismiss="modal">cancel</button>
        </div>
    
      
    </div>
  </center>
  </div>
  
</div>

    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Y0UR PR0F!LE</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">My profile</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->

    <div id="container">
<br>
  <h1>&bull; My PROFILE &bull;</h1>
  <div class="underline">
  </div>
    <form method="post" id="contact_form">
    <div class="name">
    <b><label for="name">NAME :</label></b>
      <input type="text"  name="lawyer_name" value="<?php echo $data ['lawyer_name']?>" disabled>
    </div>
    <div class="email">
    <b><label for="email">EMAIL :</label></b>
      <input type="email" name="lawyer_email" value="<?php echo $data ['lawyer_email']?>" disabled>
    </div>
    <div class="name">
    <b><label for="email">PASSWORD :</label></b>
      <input type="password"  name="lawyer_password" value="<?php echo $data ['lawyer_password']?>" disabled>
    </div>
    <div class="email">
    <b><label for="email">ADDRESS :</label></b>
      <input type="text"  name="lawyer_address" value="<?php echo $data ['lawyer_address']?>" disabled>
    </div>
    <div class="name">
    <b><label for="email">PHONE :</label></b>
      <input type="number"  name="lawyer_phone" value="<?php echo $data ['lawyer_phone']?>" disabled>
    </div>
    <div class="email">
    <b><label for="email">QUALIFICATION :</label></b>
      <input type="text"  name="lawyer_qualification" value="<?php echo $data ['lawyer_qualification']?>" disabled>
    </div>
    <!-- <div class="subject">
      <b><label>EXPERTIES :</label></b>
      <select name="lawyer_experties" value="<?php echo $data ['lawyer_experties']?>" disabled>
        <option>Affidavite</option>
        <option>Divorse</option>
        <option>Kidnapping<option>
        <option>Criminal<option>
      </select>
    </div> -->
    <div class="name">
    <b><label for="email">SERVICE :</label></b>
      <input type="text"  name="service" value="<?php echo $data ['services']?>" disabled>
    </div>

    <div class="email">
    <b><label for="email">DETAILS :</label></b>
      <input type="text"  name="service" value="<?php echo $data ['detail']?>" disabled>
    </div>


    <div class="subject">
    <b><label for="">EXPERTIES :</label></b>
      <input type="text"  name="" value="<?php echo $data ['lawyer_experties']?>" disabled>
    </div>
    <br>
    <center>
      <div>                             
         <a class = "a1" href="edit_profiless.php?email=<?php echo $_GET['email'];?>">EDIT</a>   
        
         <br><br><br>

        <a class = "a2" href="delete_profile.php?email=<?php echo $_GET['email'];?>">DELETE</a>
    </div>
   </center>   
  </form>
</div>


    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">123 Street, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">Justice</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <center>
           
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary">Page Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="lawyer_home.php?email=<?php echo $_GET['email'];?>"><i class="fa fa-angle-mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="my_profile.php?email=<?php echo $_GET['email'];?>"><i class="fa fa-angle-mr-2"></i>My profile</a>
                    <a class="text-white mb-2" href="view_appointment.php?email=<?php echo $_GET['email'];?>"><i class="fa fa-angle- mr-2"></i>View Appointment</a>
        
                </div>
            </div>
            </center>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
              
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Lawyers Website</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by Asadullah <a class="font-weight-bold" href="https://www.instagram.com/asadullah__siddiqui__98/">Web Developer</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>



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