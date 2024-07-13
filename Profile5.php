<!DOCTYPE html>
<html>
<head>

	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title> Profile5 </title>

<style>
*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}

.hero{
	
	position:relative;
	padding-top:40px;
	
}

nav {
  position: -webkit-sticky;  
  position: sticky;
  top:0;
  padding: 0.3rem 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:  #9a606c  ;
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
.login {
  font-size: 15px;
  font-family:sans-serif;
  padding: 5px 20px;
  border-radius: 8px;
  border-color:#fff;
  color: #fff;
  background-color: #9a606c ;
}
#prof{
	margin:0;
	padding:0;
	height:130vh;
	justify-content:center;
	align-items:center;
	display:flex;
	background:#eee;
}

.card{
	font-family:"Candara", sans-serif;
	width:340px;
	overflow:hidden;
	background:#fff;
	border-radius:10px;
	box-shadow: 0 0 20px rgba(0,0,0,0.5);
	display:flex;
	flex-direction:column;
}

.card-image{
	width:100%;
	height:16px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	
}

.profile-image img{
	z-index:1;
	width:120px;
	height:120px;
	position:relative;
	margin-top:-75px;
	display:block;
	margin-left: auto;
	margin-right:auto;
	border-radius:100px;
	border:10px solid #fff;
	transition-duration:0.4s;
	transition-property:transform;
}

.profile-image img:hover{
	transform:scale(1.1);
}

.card-content h3{
	font-size:25px;
	text-align:center;
	margin:0;
}

.card-content p{
	font-size:16px;
	text-align:center;
	font-family:serif;
	padding: 0 20px 5px 20px;
}

.icons{
	text-align:center;
	padding-top:5px;
	padding-bottom:30px;
}

.icons a{
	text-decoration:none;
	font-size:20px;
	color:#323031;
	padding:0 14px;
	transition-duration:0.4s;
	transition-property:transform;
}

.icons a:hover{
	color:#000;
	transform:scale(1.5);
}

.photo{
	display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:wrap;
}

.photo img{
	width:220px;
	height:300px;
	border:2px solid #ff3d0036;
	border-radius:13px;
	box-shadow:4px 7px 7px 0px #00000042;
	cursor:pointer;
	margin:10px;
	transition:400ms;
}

.photo img:hover{
	filter:grayscale(1);
	transform:scale(1.03);
}



.btn{
	color:#fff;
	border:none;
	outline:none;
	font-size:15px;
	margin-top:10px;
	padding:8px 15px;
	background:#333;
	border-radius:5px;
	display:inline-block;
	text-decoration:none;
}

.btn:hover{
	letter-spacing: 1px;
}

.btn:hover{
	transform: scale(1.03);
	box-shadow: 0 10px 15px rgba(0,0,0,0.3);
}

.wrap{
	margin:0px auto;
	padding:0 11%;
	padding-bottom:10px;
	text-transform:capitalize;
}

 section {
   height: 20vh;
   width: 100vh;
   display: grid;
   place-items: center;
   display: flex;
   align-items: center;
   justify-content: center;


 }


	</style>
</head>
<body>
	<div class ="hero">
	<nav>
      <img src="logo5.png" alt="logo" />
      <ul>
          <li><a href="360new.php"><b>H O M E</a></li></b>
          <li><a href="contacts.php"><b>C O N T A C T</a></li></b>
          <li><a href="About.php"><b>A B O U T</a></li></b>
		  <a href="login.php"><button class="login"><b>L O G I N</button></a></b>
      </ul>
    </nav>
		</div>



<table cellpadding=40px>
<tr>
<td>

<div id="prof"
	<div class="card">
	<div class="card-image">
	<img src="pro3.jpg">
	</div>

	<div class="profile-image">
	<img src="pic-6.png">
	</div>

<br>
	<div class="card-content">
	<h3> Blossoms </h3>
<br><br>
	<p>" Love is the flower you've got to let grow " </p>
	</div>
<br><br><br><br>
	<div class="icons">
	    <a href="#"><ion-icon name="logo-whatsapp"></ion-icon> <a href="#">  </a></li>
	    <a href="#"><ion-icon name="logo-twitter"></ion-icon> <a href="#">  </a></li>
	    <a href="#"><ion-icon name="logo-instagram"></ion-icon> <a href="#">  </a></li>
	    <a href="#"><ion-icon name="logo-facebook"></ion-icon> <a href="#">   </a></li>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</div>

</div>
</td>
<td>

<div class="photo">
	<img src="dp1.jpg" alt="">
	<img src="dP2.jpg" alt="">
	<img src="dP3.jpg" alt="">
	<img src="dP4.jpg" alt="">
	<img src="dP5.jpg" alt="">
	<img src="dP6.jpg" alt="">
	<img src="dP7.jpg" alt="">
	<img src="dP8.jpg" alt="">
	<img src="dP9.jpg" alt="">
	<img src="dP10.jpg" alt="">
	<img src="dP11.jpg" alt="">
	<img src="dP12.jpg" alt="">
</div>	
</td>
	
</tr>
</table>