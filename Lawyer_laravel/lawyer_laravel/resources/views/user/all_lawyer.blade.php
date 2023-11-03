
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body {margin:0;font-family:Arial}

.item{
    margin: 10px 0px 10px 0px;

    border: 1px solid gray;
    padding: 10px;
}

img{
    width: 100%;
    height:200px;
}

.p{
    text-align: justify;
}

.btn{
    margin: 30px 0px 10px 0px;
}

.btn a {
    text-decoration: none;
    border: 1px solid gray;
    padding: 10px 30px 10px 30px;
    background-color: gray;
    color: white;
}

.btn a:hover{
    background-color: transparent;
    color: gray;
}

#image{
    width:50px;
    height:40px;
}

.navbar-nav .nav-item .nav-link{
  color:black;
  font-size:14px;
  font-weight:bold;


  /* float: left !important; */
}
.navbar-nav{
    /* float: left !important; */
    margin-top:30px;
    margin-left:110px !important;
}

.navbar-nav .nav-item {
  margin-left:30px !important;
}



.linkone{
    color:red !important;

}
.nav-link:hover{
    color:red !important;
}
/* body{
  background-image: url('img/all_lawyer.jpg');

} */

.footer_wrapper{
    background-color: black;
    padding-bottom: 0rem;
}

.footer_wrapper .footer-logo img{
    width: 24rem;
    height: auto;
    object-fit: cover;
}

.footer_wrapper p{
  margin-top:35px;
    color: white;
    margin-bottom: 1rem;
    font-weight: 500;
    text-transform: capitalize;
    font-size: 1rem;
}

.footer_wrapper p a{
    color: white;
}

.footer_wrapper ul {
    list-style: none;
    display: flex;
    align-items: center;
}

.footer_wrapper .copyright-section p{
    margin: 0;
    padding: 3rem 0;
    text-align: center;
}


</style>
</head>
<body>


@include('user.header');


<br>

<div style="display:flex;" class="container">
<select class="form-control" name=""  >
    <option value="myInput" id="myInput">Divorce</option>
    <option value="">Properties</option>
    <option value="">Criminal</option>
    <option value="">Affi Davit</option>
</select>&nbsp &nbsp
<button style="text-align:center !important; height:35px;" type="button" class="btn btn-success">Search</button>
</div>


<div class="col-4">



<div class="item">
            <div class="img">
                <img src="" alt="">
            </div>
            <div class="h1">
                <h2>lawyer_name</h2>
            </div>
            <div>
                <h2>lawyer Experties</h1>
            </div>
            <div class="p">
                <p>Lawyer Address</p>
                <p>Details: </p>
            </div>
            <div class="">
            <a href="#." class="readmore btn btn-danger">Read More</a>
               <a href="appointment_process.php" class="readmore btn btn-success">Book Appointment</a>
               
            </div>
        </div>

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

<br>
<br>
<br>


<section class="footer_wrapper wrapper">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0 footer.logo">
            <h1 style="color: rgba(255, 0, 0, 0.904);">Lawyer Website</h1>
          </div>
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <p><a href="#">+92 311 xxxxxx</a></p>
            <p><a href="#">fs9097866@gmail.com</a></p>
            <p>sector 5c/4 North karachi pakistan</p>
          </div>
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <ul>
              <li><a href="https://www.whatsapp.com/"><img style="width: 70px; height: 45px; " src="images/footer images whatssapp.png"></a></li>
              <li></li>
              <li><a href="https://twitter.com/i/flow/login"><img style="width: 60px; height: 35px; " src="images/footer images  twitte.png"></a></li>
              <li><a href="https://www.facebook.com/"><img  style="width: 70px; height: 50px; " src="images/facebook icons.png"></a></li>
              <li><a href="https://www.instagram.com/"><img style="width: 60px; height: 45px; "  src="images/instagram icons.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-5 px-0">
        <div class="row">
          <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.810272993361!2d67.06180211448046!3d25.00656204554595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb34116acf2aefd%3A0x8a4d0427849ef730!2s4K%20Chowrangi%2C%20Sector%205%20A%202%20New%20Karachi%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1657128015432!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright-section">
        <p>@ 2022 PRIDE. All Rights Reserved</p>
      </div>
  </section>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>