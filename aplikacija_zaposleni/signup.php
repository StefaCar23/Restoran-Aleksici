<html>

	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="jquery-3.1.1.min.js"></script>
		<script src="skriptazap.js"></script>
		<title> Aplikacija za zaposlene </title>

	</head>
	
	<body>
		
		<div id="wraper">
			
			<form action="signupform.php" method="POST">
			<label for="signime"> Unesite vaše korisničko ime: </label>
			<input type="text" id="signime" name="signname" class="logy" placeholder="Unesite korisničko ime..." /> <br /> <br />
			<label for="signsifra"> Unesite vašu šifra: </label>
			<input type="password" id="signsifra" name="signpass" class="logy" placeholder="Unesite šifru..." /> <br /><br />
			<label for="resifra"> Ponovo unesite širfu: </label>
			<input type="password" id="resifra" name="repass" class="logy" placeholder="Ponovo unesite šifru..." /><br /><br />
			<label for="versifra"> Verifikaciona šifra: </label>
			<input type="password" id="versifra" name="verpass" class="logy" placeholder="Unesite verifikacionu šifru..." /><br /><br />
			<input type="submit" id="logdugme" name="signbutton" value="PRIJAVI SE" />
			</form>
			<br /> <br />
			
		
		</div>
	
	
	</body>
	
	
	
	
	
</html>