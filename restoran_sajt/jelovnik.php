<html>

<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-3.1.1.min.js"></script>
		<script src="skripta.js"></script>
		<title> Restoran Aleksic </title>
	</head>
	
	<body>
		<div id="wraper">
			<div id="header">
			<br /> <br /> 
			
			<form action="btnsfooter.php" method="GET">
			<input type="submit" id="btn1" name="btnfooter" value="O nama" class="gordug"></input>
			<input type="submit" id="btn2" name="btnfooter" value="Jelovnik" class="gordug"></input>
			<input type="submit" id="btn3" name="btnfooter" value="Registruj se" class="gordug"> </input>
			<input type="submit" id="btn4" name="btnfooter" value="Poruči hranu" class="gordug"></input>
			<input type="submit" id="btn5" name="btnfooter" value="Kontakt" class="gordug"></input>
			</form>
			
			</div>
			<div id="content">
			<?php

	

	include("config.php");
			
			$upit = "SELECT * FROM `meni` WHERE 1";
			$result = mysqli_query($conn, $upit);
			
			if(!$result){
				die("Greska Stefane!");
			}
			
			while($red=mysqli_fetch_assoc($result) ){
				$jelo = $red['jelo'];
				$cena = $red['cena'];
				
				echo " <center> <ul> $jelo..................$cena  </ul> </center>";
			}




?>
			
			</div>
			
			<div id="footer">
			<br />
			<center>
			Posetite nas i na našim profilima na društvenim mrežama: 
			<a href="https://www.facebook.com/"> <img src="fb.png" style="width:40px;height:40px" /> </a>
			<a href="https://twitter.com/"> <img src="tw.png" style="width:40px; height: 40px" /> </a>
			<a href="https://www.instagram.com/"> <img src="insta.jpg" style="width: 40px; height: 40px" /> </a>
			<a href="https://www.linkedin.com/"> <img src="linkedin.png" style="width: 40px; height: 40px" /> </a>
			</center>
			
			</div>
		
		
	
		</div>
	
	</body>












</html>