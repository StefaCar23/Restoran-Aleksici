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
			<br /><br />
	<center>

	Izaberite jelo: <select id="po1" name="nar1" class="por" >
	<option value="None"> </option>
	
	<?php
		
		include("config.php");
		
		$upit = "SELECT * FROM `meni` WHERE 1";
		$result = mysqli_query($conn, $upit);
		
		if(!$result){
			die("Greska");
		}
		
		while($red=mysqli_fetch_assoc($result) ){
			$jelo = $red['jelo'];
			
			echo "<option value='$jelo'> $jelo </option> ";
		} 
	
	
	
	
	?>
	
	</select><br /><br />
	
	Ime i prezime: <input type="text" id="po2" name="nar2" placeholder="Unesite ime..." class="por"></input> <br /> <br /> 
	Adresa: <input type="text" id="po3" name="nar3" placeholder="Unesite adresu..." class="por"></input class="por"><br /><br />
	Broj telefona: <input type="text" id="po4" name="nar4" placeholder="Unesite telefon..." class="por"></input><br /><br />
	Napomena: <input type="textarea" id="po5" name="nar5" placeholder="Napišite napomenu..." class="por"></input><br /><br />
	<input type="submit" id="po6" name="nar6" value="Pošalji porudžbinu"> </input>



</center>
			
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