<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "saad";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
} else {
    echo "Connection was successfull<br>";
}

// Update the data of the table


$sql = ("UPDATE `employee` SET`username` = 'salman' WHERE `employee`.`sno` = 2");
$result = mysqli_query($conn, $sql);

if($result){
    echo "<br> We updated the record successfully <br> ";
}
else{
    echo "We could not update the record. There is an error ";
}

// To print number of rows affected 

$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows : ". $aff;
echo "<br>";
echo "<br>";



// To print the data in the table 


$sql = ("SELECT * FROM  `employee`  ");
$result = mysqli_query($conn, $sql);

$no = 1;

while ($row = mysqli_fetch_assoc($result)) {
    echo $no . ". Hello " . $row['username'] . " password is  " . $row['password'];
    echo "<br>";
    $no += 1;
}




?>