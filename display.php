<?php
include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>display</title>
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Users</a></button>
    <h1 class="text-center">Record</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">password</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
        <th scope='row'>" . $row['id'] . "</th>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['mobile'] . "</td>
        <td>" . $row['password'] . "</td>
        <td><button class='btn btn-primary'><a href='update.php?updateid=" . $row['id'] . "' class='text-light'>Update </a></button>
        <button class='btn btn-danger'><a href='delete.php?deleteid=" . $row['id'] . "' class='text-light'>Delete</a></button></td>
      </tr>";
        }
        ?>

      </tbody>
    </table>
  </div>




</body>

</html>