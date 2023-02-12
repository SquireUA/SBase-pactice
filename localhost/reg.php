<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "LuxShop";
  $con = mysqli_connect($host, $user, $password, $dbname);
  if(mysqli_connect_errno($con))
  { 
    echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
  }
  session_start();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  $sql = "INSERT INTO accaunt(Name, Email, Password) VALUES('$name', '$email', '$pass')";
  if(!mysqli_query($con, $sql))
  {
    $_SESSION["wrongreg"] = 1;
    header('Location:/reglog.php');
    die();
  }else{
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    header('Location:/index.php');
    mysqli_close($con);
    die();
  }
?>