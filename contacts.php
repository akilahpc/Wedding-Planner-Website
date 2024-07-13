<!DOCTYPE html>
<html>
<head>

	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title> Contacts </title>
	<link rel="stylesheet" href="contact.css">
<style>
*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}

body {
 	 background-color:#B59F84;
	 padding-top:30px;
}

nav {
  position: -webkit-sticky;  
  position: sticky;
  top:0;
  padding: 0.3rem 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:  #99866E ;
}
ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 4rem;
  font-size: 15px;
  font-family: sans-serif;
}
a {
  text-decoration: none;
  color:#fff;
}
.login {
  font-size: 15px;
  font-family: sans-serif;
  padding: 5px 20px;
  border-radius: 8px;
  border-color:#fff;
  color: #fff;
  background-color: #99866E;
}

table{
  padding: 25px;
  border:20px;
  margin-left: auto; 
  margin-right: auto;
}


.image {
  width: 410px;
  height: 560px;
}


.sci {
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}


.sci li {
  list-style: none;
  margin-bottom: 0px;
}


.sci li a {
  color: #fff;
  font-size: 1.7em;
  text-decoration: none;
  color: #402220;
}


.sci li a:hover {
  color:#D3D3D3;
}


	</style>
</head>
<body>
	<nav>
     <img src="logo.png" alt="logo" />
      <ul>
          <li><a href="360new.php"><b>H O M E</a></li></b>
          <li><a href="contects.php"><b>C O N T A C T</a></li></b>
          <li><a href="About.php"><b>A B O U T</a></li></b>
          <a href="login.php"><button class="login"><b>L O G I N</button></a></b>
      </ul>
</nav>


<table cellspacing=20>

<tr>
<td>
<img class="image" src="7.jpg">
</td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>


<td>
<ul class="sci">
  <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon> <a href="#"> + 94 71 345 09 21  </a></li>

  <li><a href="#"><ion-icon name="logo-twitter"></ion-icon> <a href="#"> @360weddingplanner </a></li>

  <li><a href="#"><ion-icon name="logo-instagram"></ion-icon> <a href="#"> @360weddingplanner </a></li>

  <li><a href="#"><ion-icon name="logo-facebook"></ion-icon> <a href="#">  360WeddingPlanner </a></li>
</ul>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</td>
</tr>

</table>
</body>
</html>