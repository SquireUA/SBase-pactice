<?php
  session_start();
  $check1 = $_SESSION["wrongreg"];
  $check2 = $_SESSION["wronglog"];
  if($check1 == 1){
  	?>
  	<script type = "text/javascript">
  	  alert("Accaunt already exist");
  	</script>
  	<?php
  }else if($check2 == 1) {
  	?>
  	<script type = "text/javascript">
      alert("Wrong email or password");
  	</script>
  	<?php
  }   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LuxShop</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="icon" type="image/png" href="image/Logo.png">
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
	<script type="text/javascript" src="scripts/reglog.js"></script>
</head>
<body>

	<div class="top-block">
        <a class="log-reg" href="reglog.php"> <img src="image/log.png" width="60px" height="60px" /></a>
        <a class="ima" href="index.php"><img src="image/Logo2.png" width ="60px" height="70px"/></a>
        <p>LuxShop</p>
    </div>

	<div class="log-page">
		<div class="form">
			<form class="log-form" action="auth.php" method="post" name="log">
				<input type="text" maxlength="100" placeholder="Email" name="logemail">
				<input type="password"maxlength="100" placeholder="Password" name="logpass">
				<button>Log in</button>
				<p class="ques">Don`t have accaunt? <a href="#">Create</a></p>
			</form>
			
			<form class="reg-form" action="reg.php" method="post" name="reg" onsubmit="return Reg();">
				<input type="text" maxlength="20" placeholder="Name" name="name">
				<input type="text" maxlength="100" placeholder="Email" name="email">
				<input type="password" maxlength="100" placeholder="Password" name="password">
				<input type="password" maxlength="100" placeholder="Password confirm" name="ConPass">
				<button type="submit">Create</button>
				<p class="ques">Already have accaunt? <a href="#">Log in</a></p>
			</form>
			
		</div>
	</div>

	<script>
		$('.ques a').click(function(){
			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
	

</body>
</html>