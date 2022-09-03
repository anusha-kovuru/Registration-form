<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $phone_number = $_POST["phone_number"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
      $query = "INSERT INTO user VALUES('','$name','$phone_number','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    
    <form class="shadow w-450 p-3" action="" method="post" autocomplete="off">
      <h2 class="display-4 text-center fs-1">SIGN IN</h2>
      <div class="mb-3">  
        <label class="form-label" for="name">Name : </label>
        <input type="text" class="form-control" name="name" id = "name" required value=""> <br>
      </div>
      <div class="mb-3">  
        <label class="form-label" for="username">Phone number:  </label>
        <input type="text" class="form-control" name="phone_number" id = "username" required value=""> <br>
      </div>
      <div class="mb-3">
        <label class="form-label" for="email">Email : </label>
        <input type="email" class="form-control" name="email" id = "email" required value=""> <br>
      </div>
      <div class="mb-3">
        <label class="form-label" for="password">Password : </label>
        <input type="password" class="form-control" name="password" id = "password" required value=""> <br>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Register</button>
      <button class="btn btn-primary"><a href="login.php" class="button-a">Login</a></button>
    </form>
    </div>
  </body>
</html>
