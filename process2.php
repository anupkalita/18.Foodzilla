<?php

// Connect Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$con = mysqli_connect($servername,$username,$password,$database);

if(!$con){
  die("Connection Failed: ". mysqli_connect_error());
}else{
    // echo "success";
}

$sql = "SELECT * FROM img WHERE id=3";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    $arr = $row;
}

echo json_encode($arr);