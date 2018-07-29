<html>

	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="jquery-3.1.1.min.js"></script>
		<script src="skriptazap.js"></script>
		<title> Aplikacija za zaposlene </title>

	</head>
	
	<body>
		
		<div id="wraper">
			
	<?php


	
	/*$name = $_POST['signname'];
	$pass = md5($_POST['signpass']);*/
	
	if(empty($_POST['signname']) || empty($_POST['signpass']) || empty($_POST['repass']) || empty($_POST['verpass']) ){
		echo "<center><p class='up'> Molimo vas da popunite sva polja...</p></center>";
		
	}
	
	elseif(isset($_POST['signname']) && isset($_POST['signpass']) && isset($_POST['repass']) && isset($_POST['verpass']) ){
		$name = $_POST['signname'];
		$pass = md5($_POST['signpass']);
		$repass = md5($_POST['repass']);
		$verpass = $_POST['verpass'];
		
		if($verpass != 1234567 ){
			echo "<p class='up'> Niste uneli ispravan verifikacioni kod... </p>";
		}
		elseif($pass == $repass){
			include("config.php");
			
			$name1 = mysqli_real_escape_string($conn, $name);
			$pass1 = mysqli_real_escape_string($conn, $pass);
		
			$upit = "INSERT INTO `radnici_login` (`korisnicko_ime`, `sifra`) VALUES ('$name1', '$pass1')";
			$result = mysqli_query($conn, $upit);
		
			if(!$result){
				echo "Ova šifra već postoji, molimo vas da unesete drugu.";
			}
			else{
				echo "<center> <p class='up'> Uspešno ste napravili svoj nalog! </p> </center>";
				echo "<center> <p> <a href='index.php'> Vratite se na početnu stranu </a> </p> </center> ";
			}
		}
		else{
			echo "<cener> <p class='up'> Ponovite unošenje šifre...</p></center>";
		}
		

	}



?>
			
		
		</div>
	
	
	</body>
	
	
	
	
	
</html>