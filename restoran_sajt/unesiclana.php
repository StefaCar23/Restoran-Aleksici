<?php

	if(isset ($_GET['ime']) && isset($_GET['adresa']) ){
		$ime = $_GET['ime'];
		$adresa = $_GET['adresa'];
		
		
		include ("config.php");
		
		$upit = "INSERT INTO `clanovi`(`imeprezime`, `mejladresa`) VALUES ('$ime', '$adresa')";
		$result = mysqli_query($conn, $upit);
		
		if($result){
			echo "<center> Hvala sto ste nam ostavili svoje podatke! </center>";
			
		}
			
			
	}
	else{
		die("Pokusaj ponovo");
	}
	
	






?>