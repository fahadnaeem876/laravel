<!DOCTYPE html>
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
  <form action="lawyers_process.php" method="post" enctype="multipart/form-data">>
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
        <label for="lname">Experties</label>
      </div>
      <select name="experties" id="">
      <option value="Robberies">Robbries</option>
      <option value="Criminal">Criminal</option>
      <option value="Property">Property</option>
      <option value="Affi Davit">Affi Davit</option>
      </select>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Gender:</label>
      </div>
      <div class="col-75">

        <input type="radio" id="lname" name="gender" value="Male" required>Male
        <input type="radio" id="lname" name="gender" value="Female" required>Female

      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Qualification</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="qualification" placeholder="Your qualification..." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Service</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="service" placeholder="Your qualification..." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Detail:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="detail" placeholder="Your qualification..." required>
      </div>
    </div>


    <div class="mb-3">
		    <label class="form-label">Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="image">
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
</html>
