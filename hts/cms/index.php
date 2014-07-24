<?php 
include("connect.php");
include("class/auth.class.php");
 ?>
<html>
<head>

<title>Login page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
	<body>
		<div id="wrapper">
			<form action="" method="post" class="form">
				<div class="user">
					LOGIN
				</div>
				
				<div class="userpic"><img src="image/userdes.png" /></div>
				<div class="userright"><img src="image/userright.png" /></div>
				<div class="username">
					<input type="text" name="user" class="input_field" placeholder="Username" autofocus required />	
				</div>
				
				<div class="userpic"><img src="image/password.png" /></div>
				<div class="userright"><img src="image/userright.png" /></div>
				<div class="username">
					<input type="password" name="pass" class="input_field" placeholder="Password" required />
				</div>

				<div class="submit"> <input type="submit" name="btnlogin" class="submit" value="Submit"/></div>
				<?php
					if(isset($_POST['btnlogin'])){
					$Auth -> login();
					}
					
			?>
			</form>

		</div>
	</body>
</html>