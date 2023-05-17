<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "saad";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
    echo"Connection was successfull<br>";
}

$sql = ("INSERT INTO `employee` ( `username`, `password`) VALUES ( 'jahangir', '4463')");

$result = mysqli_query($conn, $sql);

if($result){
    echo "your data is inserted";
}
else{
    echo"your data is not inserted";
}

?>