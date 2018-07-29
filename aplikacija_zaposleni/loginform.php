<?php

	/*if(isset($_POST['logname']) && isset($_POST['logpass']) ){
			
			$name = $_POST['logname'];
			$pass = $_POST['logpass'];
		
	}*/
	
	include("config.php");
	session_start();
	
	$name = $_POST['logname'];
	$pass = md5($_POST['logpass']);
	$name1 = mysqli_real_escape_string($conn, $name);
	$pass1 = mysqli_real_escape_string($conn, $pass);
	
	if( empty($name1) || empty($pass1) ){
		echo "<center><p class='up' > Molimo vas unesite sve vaše podatke, kako biste mogli da pristupite aplikaciji! </p></center>";
	}
	elseif(isset($name1) && isset($pass1) ){
		
		$upit = "SELECT * FROM `radnici_login` WHERE korisnicko_ime='$name1' and sifra='$pass1' ";
		$result = mysqli_query($conn, $upit);
		$count = mysqli_num_rows($result);
		
		if($count == 1){
			$_SESSION['logname'] = $name1;
			$_SESSION['logpass'] = $pass1;
			
			
			header("Location: indexradnici.php");
		}
		else{
			echo "<center> <p class='up'> Greška! </p></center> ";
		}
	}
	


?>