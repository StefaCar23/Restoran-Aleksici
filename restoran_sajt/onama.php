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
			
				echo "<br /> <br /> <br /> <br /> <br />";
				echo "<p style='font-style: italic; font-size: 30px' > Restoran Aleksić ima tradiciju dugu 70 godina. Osnovan je davne 1947. godine i nalazi se na istoj lokaicji kao od osnivanja. </p>";
				echo "<p style='font-style= italic; font-size: 30px'> Osnivač je deda Rade, koji je sa svojim kulinarskim iskustvom počep da impresionira svoje goste ranovrsnim jelima. Do danas smo održali ideju i viziju našeg dede, te vas čeka veliki izbor domaćih jela. </p>";
				echo "<p  style='fontstyle: italic; font-size: 30px'> Danas naš restoran se nalazi na još 2 lokacije u gradu, a to su Voždovac i Terazije. Više podataka o našim objektima možete naći u nasoj rubrici 'Kontakt'. </p>";
	
			
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