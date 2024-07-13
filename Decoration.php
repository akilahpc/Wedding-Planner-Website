<!DOCTYPE html>
<html>
<head>

	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title> Decoration </title>

<style>
*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}

.hero{
	width:100%;
	height:100vh;
	background-image:url(D15.jpg);
	background-size:cover;
	background-position:center;
	position:relative;
	padding-top:40px;
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
  background-color:  #A46F69 ;
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
  background-color: #A46F69 ;
}

.photo{
	display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:wrap;
}

.photo img{
	width:250px;
	height:200px;
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

<br><br><br><br><br>
<div class="photo">
	<a href="Profile5.php"><img src="D1.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D2.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D3.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D4.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D5.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D6.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D7.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D8.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D9.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D10.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D11.jpg" alt=""></a>
	<a href="Profile5.php"><img src="D12.jpg" alt=""></a>
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