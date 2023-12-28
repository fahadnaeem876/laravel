<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
  background-color: yellowgreen;
}

.container {
  border-radius: 5px;

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

img{
  position:absolute;
width:100%;
height:100%;
  right: 0;
  bottom:0;
  left: 0;
  z-index: -1;
  background-repeat: no-repeat;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
 @media screen and (max-width: 600px) {
  .col-15, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background:;
  overflow: hidden;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 500px;
  padding:  70px;
  margin: 70px auto;
  border-radius:30px;
  /* border:8px solid bisque ; */
}
.wrapper{
  width: 100%;
  background: black;
  border-radius: 10px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 100px;
  background:black;
  border-radius: 5px 5px 0 0;
  color:bisque;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 5px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width:  50px;
  height: 100%;
  color: purple;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 30px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: red;
  text-decoration: underline;
}
form .signup-link a:hover{
  text-decoration: underline;
}
span{
  color:rgba(255, 0, 0, 0.836);
}

@media screen and (max-width: 984px) {
  .container{
    margin-top: 4px !important;
    font-size:5px;
  }
  
}
@media screen and (max-width: 413px) {
  .container{
    width:100%;
    font-size:1px;
    /* line-height:18px; */


  }
  .signup-link{
    font-size:13px !important;

  }
  
}

@media screen and (max-width: 388px) {

  span{
    font-size:25px;
    

  }
  form{
    margin-top:-20px;
  }
  .row input{
    font-size:-20px !important;

  }

}
</style>
</head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title">
          <i><b>
          <span> Login Form</span>
</b>  
        </i>
        </div>
        <form action="login.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <br>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Your Password" required>
          </div>
          <br>
          <div class="row button">
            <input class="buuton" type="submit"  value="LOGIN" name="login">
          </div>         
          <div class="signup-link">
          <a href="customer_register.php">Create Customer Account</a>
          <br>
          <br>
          <a href="lawyer_register.php">Create Lawyer Account</a>
          </div>
        </form>
      </div>
    </div>

    <img src="img/feature.jpg">

  </body>
</html>
