<html>

<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
		<script src="jquery-3.1.1.min.js"></script>
		<script src="skriptazap.js"></script>
		<script src="novaskripta.js"></script>
		<title> Za zaposlene </title>

</head>

<body>
<div id="wraper">
	<div id="gornji">
		<div id="g1">
		<br /> <br /><br />
		<input type="button" onclick="window.location.href='indexradnici.php'" id="vratise1" name="goback1" class="back" value="Osveži stranicu" />
		</div>
		<div id="g2">
		<br /> <br /><br />
		<h1 id="poruka" > Dobrodošli! </h1>
		</div>
		<div id="g3">
		<br /> <br /><br />
			<input type="button" id="logoutdugme" onclick="window.location.href='index.php'"	value = "Izloguj se"	/><br />
		</div>
		
		
	</div>
	<div id="omotac">
	
		<div id=div1>
		<h2> JELOVNIK </h2>
		<br /> <br /> <br />
		<input type="button" id="meni1" name="dugme1" value="Jelovnik" class="menu"> </input> <br /> <br />
		<input type="button" id="meni2" name="dugme2" value="Izmeni" class="menu"></input> <br /> <br />
		<input type="button" id="meni3" name="dugme3" value="Unesi jelo" class="menu"></input> <Br /> <br />
		<input type="button" id="meni4" name="dugme4" value="Obriši jelo" class="menu"></input><br /> <br />
		
		</div>
		
		<div id="div2">
		
		<h2> ČLANOVI </h2>
			<br /> <br /> <br />
			
			<input type="submit" id="clan1" name="member" value="Prikaži" class="menu"></input> <br /> <br />
			<input type="submit" id="clan3" name="member" value="Obriši" class="menu"></input>
			
			
		
		</div>
		
		<div id="div3">
		<h2> PORUDŽbine </h2>
			<br /><br /><br />
			<input type="button" id="prikaziporudzbine" name="showporudzbine" value="Prikaži" placeholder=" ..." class="menu" /> <br /> <br />
			<input type="button" id="obrisiporudzbinu" name="deleteporudzbinu" value="Obriši" placeholder="..." class="menu" />
			
		
		</div>
	
	</div>
	</div>

</body>



</html>