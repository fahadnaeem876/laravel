<?php

include 'database.php';

$lawyer_id = $_GET['lawyer_id'];

$email = $_GET['email'];

$update = "UPDATE appointment SET request='REJECT' where lawyer_id='$lawyer_id'";

mysqli_query($conn,$update);

header('Location:view_appointment.php?email='.$email);



?>