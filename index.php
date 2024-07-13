<?php
include_once 'header.php';
?>


	<h1>Hello          <!-- 5-15 not important -->
	<?php 
	if (isset($_SESSION["username"])){
		echo $_SESSION["username"].'!';
	} else{
		echo 'user !';
	}

    ?> </h1>

	<p>Welcome to Wedding Planning Website</p>

	</div>
</body>
</html>