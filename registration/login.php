<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" action="" method="post" autocomplete="off">
    <h2 class="display-4 text-center fs-1">Login</h2><br>
    <div class="mb-3">
      <label for="email">Email : </label>
      <input type="text" class="form-control" name="email" id = "email" required value=""> <br></div>
    <div class="mb-3">
      <label for="password">Password : </label>
      <input type="password" class="form-control" name="password" id = "password" required value=""> <br></div>
      <button type="submit" class="btn btn-primary" name="submit">Login</button>
      <button class="btn btn-primary" >
      <a href="registration.php" class="button-a">Registration</a></button>
    </form>
    </div>
    
  </body>
</html>
