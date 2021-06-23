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

if(isset($_POST["submit"])){
    $random_number = rand(111,999);
    $category = "thali";

    echo "$random_number";

    $fileName = $_FILES["image"]["name"];
    $destination = "./img/$category/".$random_number.$fileName;
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $destination);

    $sql = "INSERT INTO `img`(`name`, `destination`) VALUES ('$fileName','$destination')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "success";
    }
    else{
        echo "failed";
    }
    mysqli_close($con);
}

// $sql = "SELECT * FROM img WHERE id=1";
// $result = mysqli_query($con, $sql);
// while($row = mysqli_fetch_assoc($result)){
//     $arr = $row;
// }

// echo json_encode($arr);

?>