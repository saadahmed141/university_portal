<?php
include 'connection.php';

$id = $_GET['updateid'];

$sql = "SELECT * FROM `crud` WHERE `crud`.`id` = $id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `password` = '$password' WHERE `crud`.`id` = $id;";
    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "inserted successfully";
        header('location:display.php');
    }else{
        die("error".mysqli_connect_error());
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method = "post">
        <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name = "name"aria-describedby="emailHelp" autocomplete="off" value = '<?php echo $name?>'   >
                
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" value = '<?php echo $email?>' name= "email" aria-describedby="emailHelp" autocomplete="off" >
                <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control"  id="mobile" name = "mobile" value = '<?php echo $mobile ?>' aria-describedby="emailHelp" autocomplete="off"  >
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name = "password" autocomplete="off" 
                value = '<?php echo $password?>' >
            </div>
            
            <button type="submit" class="btn btn-primary" name = "submit">Update</button>
            <button class="btn btn-primary" ><a href="display.php" class="text-light text-decoration-none">Display Records</a></button>
            
        </form>
    </div>




</body>

</html>