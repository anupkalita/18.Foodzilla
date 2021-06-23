<?php

// Connect Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "good_food";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}else{
    // echo "success";
}

?>