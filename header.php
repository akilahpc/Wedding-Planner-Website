<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wedding Planning</title>
	
<style>
body {
      margin:0;
      padding:0;
      background-image: url("4.jpg");
      background-size: cover;
      font-family:sans-serif;
}
nav {
  position: -webkit-sticky;  
  position: sticky;
  top:0;
  margin-top:30px;
  padding: 0.3rem 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:  #FF4A148C ;
}
ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 4rem;
  font-size: 15px;
  font-family:sans-serif; 
}
a {
  text-decoration: none;
  color:#fff;
}

</style>

</head>
<body>

	<nav>
      <img src="logo.png" alt="logo" />
      <ul>
          <li><a href="360new.php"><b>H O M E</a></li></b>
          <li><a href="contacts.php"><b>C O N T A C T</a></li></b>
          <li><a href="about.php"><b>A B O U T</a></li></b>
		  
  	<?php 
	if (isset($_SESSION["username"])){        // user log wela nm inne
		echo '<li style="float: right;"><a href="includes/logout.inc.php"><button style="font-size: 15px; font-family: sans-serif; padding: 5px 20px; border-radius: 8px; border-color:#fff; color: #fff; background-color: #770737;"><b>L O G O U T</button></a></li></b>'; // nav bar eke logout button display

		echo '<li style="float: right; font-size: 20px;"><a href="profile.php"><b>'.$_SESSION["username"].' ! </a></li></b>'; // nav bar eke username display
		
	} else{
		echo '<li style="float: right;"><a href="login.php"><button style="font-size: 15px; font-family: sans-serif; padding: 5px 20px; border-radius: 8px; border-color:#fff; color: #fff; background-color: #770737;"><b>L O G I N</button></a></li></b>';     // user log wela nemei nm inne

	}	

    ?> </li>
</ul>
</nav>

	<div class="container" style="margin:20px;">

