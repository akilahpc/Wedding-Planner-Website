<?php

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once 'dbh.inc.php';   // connect database
	require_once 'functions.inc.php';   // connect functions

	$emptyInput = emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat);
	$invalidUid = invalidUid($username);
	$invalidEmail = invalidEmail($email);
	$pwdMatch = pwdMatch($pwd, $pwdRepeat);
	$uidExists = uidExists($conn, $username, $email);  // befor this username or email used

	if ($emptyInput !==false){
		header("location:../signup.php?error=emptyinput");
		exit();
	}
	if ($invalidUid !==false){
		header("location:../signup.php?error=invaliduid");
		exit();
	}
	if ($invalidEmail !==false){
		header("location:../signup.php?error=invalidEmail");
		exit();
	}
	if ($pwdMatch !==false){
		header("location:../signup.php?error=passwordDontMatch");
		exit();
	}
	if ($uidExists !==false){
		header("location:../signup.php?error=usernameTaken");
		exit();
	}
   
   createUser($conn, $name, $email, $username, $pwd);

}
else{
	header('Location:../login.php');
	exit();
}

