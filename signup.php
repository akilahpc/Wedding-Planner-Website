
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
			padding-top: 1px;
			padding-bottom: 0.5px;
			margin: 15px auto;
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
		<h1>Register</h1>
		<p>Welcome back! Please register to your account.</p>
		<form action="includes/signup.inc.php" method="post">

			<input type="text" id="name" name="name" placeholder="Name" required>

			<input type="text" id="email" name="email" placeholder="Email" required>

			<input type="text" id="username" name="uid" placeholder="Username" required>

			<input type="password" id="password" name="pwd" placeholder="Password" required>

			<input type="password" id="password" name="pwdrepeat" placeholder="Confirm Password" required>

			<button name="submit" type="submit">Register</button>
		</form>


		<?php
         if (isset($_GET["error"])) {
         	if($_GET["error"] == "emptyinput"){
         		echo '<div class="error">Fill in the all fields !</div>';
         	} elseif ($_GET["error"] == "invaliduid") {
         		echo '<div class="error">Invalid Username Format !</div>';
         	}elseif ($_GET["error"] == "invalidEmail") {
         		echo '<div class="error">Invalid Email Format !</div>';
         	}elseif ($_GET["error"] == "passwordDontMatch") {
         		echo '<div class="error">Passwords dont match !</div>';
         	}elseif ($_GET["error"] == "stmtfailed") {
         		echo '<div class="error">Something went wrong !</div>';
         	}elseif ($_GET["error"] == "none") {
         		echo '<div class="error">Account created</div>';
         	}elseif ($_GET["error"] == "usernameTaken") {
         		echo '<div class="error">Username or Email alredy in used !</div>';
         	}
         }

		?>


		<p>
		<p>Already have an account? <a href="login.php" class="tex">Login here</a></p>
	</div>

	</div>
</body>
</html>