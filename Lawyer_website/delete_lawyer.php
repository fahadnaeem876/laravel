<?php

include 'database.php';

$lawyer_id = $_GET['lawyer_id'];
$email = $_GET['email'];

$delete = "DELETE FROM appointment where lawyer_id='$lawyer_id'";

mysqli_query($conn,$delete);

header('Location:book_appoint.php?email='.$email);

?>