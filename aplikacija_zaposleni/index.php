<html>

	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="jquery-3.1.1.min.js"></script>
		<script src="skriptazap.js"></script>
		<title> Aplikacija za zaposlene </title>

	</head>
	
	<body>
		
		<div id="wraper">
		
		<h1> Dobrodošli na aplikaciju za zaposlene u resoranu "Aleksić"!  </h1>
		<h2> Prijavite se kako bise pristupili podacima. </h2>
		<br /> <br />
			<form action="loginform.php" method="POST">
			<label for="logime"> Korisničko ime: </label>
			<input type="text" id="logime" name="logname" class="logy" placeholder="-----" /> <br /> <br />
			<label for="logsifra"> Šifra: </label>
			<input type="password" id="logsifra" name="logpass" class="logy" placeholder="-----" /> <br /><br />
			<input type="submit" id="logdugme" name="logbutton" value="ULOGUJ SE" />
			</form>
			<br /> <br />
			
			<p> Ukoliko nemate svoj nalog, molimo vas da ga napravite! </p>
			<input type="button" id="signup" value="Napravi nalog" onclick="window.location.href='signup.php'" />
		
		</div>
	
	
	</body>
	
	
	
	
	
</html>