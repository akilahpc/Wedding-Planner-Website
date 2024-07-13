<?php
include_once 'header.php';
?>

<style> 

	body {
			background-image: url("9.jpg");
			background-size: cover;

		}

		.login-form {
			background-color: #fff;
			padding: 20px;
			margin: 100px auto;
			max-width: 320px;
			border-radius: 5px;
			box-shadow: 0px 0px 30px #888888;
		}

		h1 {
			font-size: 32px;
			margin-bottom: 20px;
		}

		p {
			font-size: 16px;
			margin-bottom: 20px;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			font-size: 16px;
			margin-bottom: 5px;
		}

		input {
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}

		button {
			padding: 10px;
			background-color: #AC8E60;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}

		button:hover {
			background-color: #6F5B3E;
		}

		.tex {
			color: #6F5B3E;
			text-decoration: none;
		}

		.error{
			color: red;
			border: 1px solid red;
			padding: 7px;
			font-size: 18px;
			margin-top: 13px;
			text-align: center;
		}

</style>


	<div class="login-form">
		<h1>Login</h1>
		<p>Welcome back! Please login to your account.</p>
		<form action="includes/login.inc.php" method="post">  <!-- press login button we will move l.i.p-->

			<input type="text" id="username" name="uid" placeholder="Username or Email" required>

			<input type="password" id="password" name="pwd" placeholder="Password" required>

			<button name="submit" type="submit">Login</button>
		</form>

<?php
         if (isset($_GET["error"])) {
         	if($_GET["error"] == "emptyinput"){
         		echo '<div class="error">Fill in the all fields !</div>';
         	} elseif ($_GET["error"] == "wronglogin") {
         		echo '<div class="error">Invalid Username or Email !</div>';
         	} elseif ($_GET["error"] == "wrongLogin") {
         		echo '<div class="error">Invalid Password !</div>';
         	}elseif ($_GET["error"] == "stmtfailed") {
         		echo '<div class="error">Something went wrong !</div>';
         	}elseif ($_GET["error"] == "none") {
         		echo '<div class="error">Account created </div>';
         	}
         }
?>


		<br>
		<p>Don't have an account? <a href="signup.php" class="tex">Register here</a></p>
	</div>

	</div>
</body>
</html>