<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "reglog");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $name = $_POST["name"];
  $phone_number = $_POST["phone_number"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  if(empty($name) || empty($phone_number) || empty($email) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
  if(mysqli_num_rows($user) > 0){
    echo "email Has Already Taken";
    exit;
  }

  $query = "INSERT INTO tb_user VALUES('', '$name','$phone_number', '$email', '$password')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

// LOGIN
function login(){
  global $conn;

  $email = $_POST["email"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>
