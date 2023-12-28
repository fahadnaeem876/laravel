<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "lawyers_website";

$conn = mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){

echo "Database Error";

}


?>