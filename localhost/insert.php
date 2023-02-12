<?php
  $host="localhost"; //Add your SQL Server host here
  $user="root"; //SQL Username
  $pass=""; //SQL Password
  $dbname="LuxShop"; //SQL Database Name
  $con=mysqli_connect($host,$user,$pass,$dbname);
  if (mysqli_connect_errno($con))
  {
    echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
  }
  session_start();
  $message = $_POST['mess'];
  $name = $_SESSION["name"];
  $email = $_SESSION["email"];
  $answer = $_POST["idanswer"];
  $sql="INSERT INTO GuestBook(Name,Email,Massege,Answer) VALUES('$name','$email','$message','$answer')";
  if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
  header('Location:/index.php');
  mysqli_close($con);
  die();
?>