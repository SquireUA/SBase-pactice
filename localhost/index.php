<?php
  require "show.php";
  session_start();
  $name = $_SESSION["name"];
  $email = $_SESSION["email"];
  $_SESSION["wrongreg"] = 0;
  $_SESSION["wronglog"] = 0;
  if($name == "" || $name == null || $email == "" || $email == null){
    ?>
    <style type="text/css">
      .message{
        display: none;
      }
      .exit{
        display: none;
      }
      .answer{
        display: none;
      }
    </style>
    <?php
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>LuxShop</title>
  <link rel="icon" type="image/png" href="image/Logo.png">
  <link rel="stylesheet" type="text/css" href="style/index.css">
  <script type="text/javascript" src="scripts/reg.js"></script>
</head>
<body class="index">
  <div class="top-block">
    <a  href="reglog.php"> <img class="log-reg" src="image/log.png" width="60px" height="60px" /></a>
    <a class="exit" href="exit.php"><img src="image/exit.png" width="70px" height="70px" /></a>
    <a class="ima" href="index.php"><img src="image/Logo2.png" width ="60px" height="70px"></a>
    <p>LuxShop</p>

  </div>
  <?php
    show(null, null);
  ?>
  <div class="message">
    <form method="post" action="insert.php" class="form_mess" name="comm" onsubmit="return Comment();">
      <input type="text" name="idanswer" class="hide" value="">
      <input type="text" placeholder="Comment" name="mess">
      <button type="submit">Send</button>
    </form>
  </div>
</body>           
</html>