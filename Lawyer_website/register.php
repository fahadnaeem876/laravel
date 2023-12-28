<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<h1>REGISTER FORM</h1>
<div class="container" style="margin-top:10%;">
  <form action="customer_process.php" method="post" enctype ="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="fname" name="email" placeholder="Your email.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="password" placeholder="Your password.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="address" placeholder="Your address.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone no.</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="phone" placeholder="Your phone no..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">CUSTOMER IMAGE</label>
      </div>
      <div class="col-75">
        <input type="file" id="fname" name="image" required>
      </div>
    </div>
  <br>
  <center>
    <div class="row">
      <input type="submit" value="Register" name="save">
    </div>
    </center>
  </form>
</div>

</body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
 <!-- <link rel='stylesheet' type='text/css' media='screen' href='style.css'> -->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- </head>
<body>
  <style>
* {
  box-sizing: border-box;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

  </style>






<div class="container" style="background-color: rgba(0, 0, 0, 0.782); color: white; margin-top: 70px; margin-bottom: 40px; border:2px solid black; border-radius: 10px;">
  <center><p style="font-size:60px; color: white;">Registration Form</p></center>
  <form action="customer_process.php" method="post" enctype ="multipart/form-data">
  <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="fname" name="email" placeholder="Your email.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="password" placeholder="Your password.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="address" placeholder="Your address.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone no.</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="phone" placeholder="Your phone no..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">CUSTOMER IMAGE</label>
      </div>
      <div class="col-75">
        <input type="file" id="fname" name="image" required>
      </div>
    </div>
  <br>
  <center>
    <div class="row">
      <input type="submit" value="Register" name="save">
    </div>
    </center>
         
  </form>
</div>

<br>
<br>
<br>
<div class="container-fluid"  style="background-color: black;">
  <div class="container">
  <div class="footer-bottom">
    <br>
    <center>
 <h3 style="color: #f2f2f2; text-align: center;">Connect with us on our social platforms</h3>
<br>
<br>

<a href="" style="text-align: center;"><i class="fa fa-whatsapp" style="font-size:40px; color: green;"></i></a>&nbsp&nbsp&nbsp&nbsp
<a href="" style="text-align: center;"><i class="fa fa-facebook" style="font-size:40px; color:blue;"></i></a>&nbsp&nbsp&nbsp&nbsp
<a href="" style="text-align: center;"><i class="fa fa-instagram" style="font-size:40px; color:palevioletred;"></i></a>&nbsp&nbsp&nbsp&nbsp
<a href="" style="text-align: center;"><i class="fa fa-twitter" style="font-size:40px; color:lightblue;"></i></a>&nbsp&nbsp&nbsp&nbsp

</center>

<br>
<br>

  </div>
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
</html> -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="customer_process.php" 
    	      method="post"
    	      enctype="multipart/form-data">

    		<h4 class="display-4  fs-1">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Full Name</label>
		    <input type="text" 
		           class="form-control"
		           name="name"
		           value="<?php echo (isset($_GET['name']))?$_GET['name']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
		           value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">
		  </div>

      <div class="mb-3">
		    <label class="form-label">Address</label>
		    <input type="text" 
		           class="form-control"
		           name="address"
		           value="<?php echo (isset($_GET['address']))?$_GET['address']:"" ?>">
		  </div>

      <div class="mb-3">
		    <label class="form-label">Phone</label>
		    <input type="number" 
		           class="form-control"
		           name="phone"
		           value="<?php echo (isset($_GET['phone']))?$_GET['phone']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="image">
		  </div>
		  
		  <button type="submit" name="save" class="btn btn-primary">Sign Up</button>
		  <!-- <a href="login.php" class="link-secondary">Login</a> -->
		</form>
    </div>
</body>
</html>
