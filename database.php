<?php

//Database named "diary" to be added in mysql database.

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "diary";

$conn = mysqli_connect($servername,$user,$pass,$dbname);

if(!$conn){
    die("connect error");
}else{
    // echo "connect success";
}

$data = $_POST['comment'];
$date = $_POST['date'];

$sql = "INSERT INTO diary_info VALUES('$data','$date')";


if(mysqli_query($conn,$sql)){
    // echo "success";
}

$conn->close();
?>