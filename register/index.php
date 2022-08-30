<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="position-relative position-absolute top-50 start-50 translate-middle">
  <div class="vh-100 w-450 p-4">
    <h1 class="display-4 fs-1">Welcome <?php echo $user["name"]; ?></h1>
    <button class="btn btn-primary">
    <a href="logout.php" class="button-a">Logout</a></button>
    </div>
  </div>
  </body>
</html>
