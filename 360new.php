<!DOCTYPE html>
<html>
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title> 360 </title>
<style>
*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}

.hero{
	width:100%;
	height:100vh;
	background-image:url(home.jpg);
	background-size:cover;
	background-position:center;
	position:relative;
	padding-top:30px;
	box-sizing:border-box;
}

nav {
  position: -webkit-sticky;  
  position: sticky;
  top:0;
  padding: 0.3rem 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:  #C38888 ;
}
ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 4rem;
  font-size: 15px;
  font-family:verdana; 
}
a {
  text-decoration: none;
  color:#fff;
}
.login {
  font-size: 15px;
  font-family:sans-serif;
  padding: 5px 20px;
  border-radius: 6px;
  border-color:#fff;
  color: #FFFFFF;
  background-color: #C38888 ;
}

.info{
	width:550px;
	color:#fff;
	position:absolute;
	right:0;
	top:55%;
	transform:translateY(-50%)
}

.font{
	font-size:11px;
}

::placeholder{
	color:#cac7ff;
}

 .search-bar button img{
	width:20px;
}

.search-bar button{
	border:0;
	border-radius:50%
	width:20px;
	height:20px;
	background:transparent;
 	cursor:pointer;
}

.cata{
	width:80%;
	margin:auto;
	text-align:center;
	
}

.pd{
	padding:50px;
	color:#48494B;
}


p{
	font-size:12px;
}

.catag{
	display:grid;
	grid-template-columns:280px 280px 280px 280px;
	grid-auto-rows:minmax(150px,auto);
	grid-gap:20px;
}


.box{
	
	height:130px;
	border-radius:5px;
	background-image:url(20.jpeg);
	box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
	padding:20px;
	text-align:center;
}	
	

.box h4{
	color:#444;
	padding:0px 0;
	font-size:12px;
}

.box p{
	color:#777;
	font-size:16px;
	line-height:1;
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

 .button {
   height: 50px;
   width: 50px;
   margin: 20px;
   float: left;
   cursor: pointer;
   background: #fff;
   overflow: hidden;
   border-radius: 100px;
   transition: all 0.3s ease-in-out;
   box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
 }


 .button .icon {
   height: 45px;
   width: 45px;
   display: inline-block;
   transition: all 0.3s ease-in-out;
   text-align: center;
   border-radius: 50%;
 }

 .button .icon i {
   font-size: 25px;
   transition: all 0.3s ease-in-out;
   line-height: 60px;
   border-radius: 100px;
   text-align: center;
 }

 .button span {
   font-size: 20px;
   font-weight: 500;
   line-height: 60px;
   margin-left: 10px;
   position: relative;
   top: -10%;
   left: 0%;
 }



 .button:nth-child(1) span {
   color: #C38888;
 }

 .button:nth-child(2) span {
   color: #C38888;
 }

 .button:nth-child(3) span {
   color: #C38888;
 }

 .button:nth-child(4) span {
   color: #C38888;

 }

 .button:hover i {
   color: #fff;
 }

 .button:hover {
   width: 200px;
 }

 #al {
   height: 40px;
   width: 40px;
   display: inline-block;
   transition: all 0.3s ease-in-out;
   text-align: center;
   border-radius: 50%;
   position: relative;
   top: 20%;
   left: 0%;
 }

 a {
   text-decoration: none;
 }

.testmo{
	background:#fff3f3;
	flex-basis:44%;
	border-radius:10px;
	margin-bottom:5%;
	text-align:left;
	padding:25px;
	cursor:pointer;
	display:flex;
}

.testmo img{
	height:40px;
	margin-left:5px;
	margin-right:30px;
	border-radius:50%;
}
	
</style>

</head>
<body>
<div class="hero">
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


<selection class="cata">
	<h4 class="pd"><pre>C  A  T  A  G  O  R  I  E  S </h4></pre>
</selection>

<div class="wrap">
	<div class="catag">
	<div class="box">
	<br>
		<h4><pre>B  R  I  D  E</h4></pre>
		<p>01</p><br>
		<a href="Bride.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>G  R  O  O  M</h4></pre>
		<p>02</p><br>
		<a href="Groom.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>S  A  L  O  N  S</h4></pre>
		<p>03</p><br>
		<a href="Salons.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>J  E  W  E  L  L  A  R  Y</h4></pre>
		<p>04</p><br>
		<a href="Jewellary.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>D  E  C  O  R  A  T  I  O  N  S</h4></pre>
		<p>05</p><br>
		<a href="Decoration.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>C  A  K  E</h4></pre>
		<p>06</p><br>
		<a href="Cake.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>C  A  R  D  S</h4></pre>
		<p>07</p><br>
		<a href="Cards.php" class="btn"> Read More </a>
	</div>

	<div class="box">
	<br>
		<h4><pre>P  H  O  T  O  G  R  A  P  H  Y</h4></pre>
		<p>08</p><br>
		<a href="Photography.php" class="btn"> Read More </a>
	</div>
	</div>
	</div>

 <br><br><br><br><br>

                 <hr color="dfcdc0">
                 <br><br>
                 <h4 ><pre><center>A  B  O  U  T    U  S</h4></pre></center>

                <center> <section>
                    <div class="wrapper">
                        <div class="button">
                            
                        <div class="icon">
                            
                            <img src="F.jpg" id="al">
                        </div>
                        <span>Facebook</span>
                    </div>
                    </div>

                    <div class="button">
                            
                        <div class="icon">
                            <img src="IN.jpg" id="al">
                        </div>
                        <span>Instagram</span>
                    </div>

                    <div class="button">
                            
                        <div class="icon">
                            <img src="T.jpg" id="al">
                        </div>
                        <span>Twitter</span>
                    </div>

                

                    <div class="button">
                            
                        <div class="icon">
                            <img src="WH.jpg" id="al">
                        </div>
                        <span>Whatsapp</span>
                    </div>
                    
                 </section></center>
                
                
                </div>
	 
</body>
</html>