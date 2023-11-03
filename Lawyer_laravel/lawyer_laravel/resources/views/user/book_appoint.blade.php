
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
    margin-left:200px !important;
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
.navbar{
	background-color: rgba(255, 255, 255, 0.849) !important;
}
body{
  background-image: url('img/lawyerlogo2.png');
  background-size: cover;
  background-position: fixed;
}

</style>
</head>
<body>

@include('user.header');



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
      <th scope="col">Message</th>
      <!-- <th scope="col">PRODUCT PRICE</th>
      <th scope="col">PRODUCT IMAGE</th>
      <th scope="col">PAYMENT METHOD</th>
      <th scope="col">DATE</th>
      <th scope="col">PLACE ORDER</th> -->
      <th scope="col">Request</th>

      <!-- <th scope="col">PLACE ORDER</th> -->
      <th scope="col" colspan="2">ACTION</th>



    </tr>
  </thead>
  <tbody>

<tr>
<td>lawyer_id</td>
<td>lawyer_name</td>
<td>lawyer_email</td>
<td>lawyer_address</td>
<td>lawyer_phone</td>
<td>lawyer_</td>

    <td>lawyer</td>
    <td>message</td>
    <td>request</td>

 
   <!-- <td><a href="place_order.php?lawyer_id="><i class="fa fa-check-circle" style="font-size:24px; color:#404bec;"></a></td> -->
    <td><a href="update_lawyer.php"><i class="fa fa-edit" style="font-size:24px; color:green;"></i></a></td>
    <td><a href="delete_lawyer.php"><i class="fa fa-close" style="font-size:24px; color:red;"></i></a></td>


    </tr>
  </tbody>

</table>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<!-- <i class="far fa-check-double"></i> -->