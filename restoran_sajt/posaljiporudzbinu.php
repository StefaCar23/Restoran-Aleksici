<?php

	/*if(isset ($_GET['nar1']) && isset($_GET['nar2']) && isset($_GET['nar3']) && isset($_GET['nar4']) && isset($_GET['nar5']) ){
		$jelo = $_GET['nar1'];
		$ime = $_GET['nar2'];
		$adresa = $_GET['nar3'];
		$brtel = $_GET['nar4'];
		$napomena = $_GET['nar5'];
		
		include ("config.php");
		
		$upit = "INSERT INTO `porudzbine`(`jelo`, `imeprez`, `adresa`, `brtelel`, `napomena`) VALUES ('$jelo', '$ime', '$adresa', '$brtel', '$napomena' )";
		$result = mysqli_query($conn, $upit);
		
		if($result){
			echo "<center> Dragi $ime, vasa porudzbinu $jelo mozete ocekivati da ce vam se dostaviti u roku od 60 minuta na adresu $adresa. Ukoliko bude nekih zabuna, pozvacemo vas na $brtel. Hvala! </center>";
		}
		
	}
	else{
		die("Pokusaj ponovo");
	} */
	
	if(isset ($_GET['jelo']) && isset($_GET['imeprez']) && isset($_GET['adres']) && isset($_GET['brtel']) && isset($_GET['napomena']) ){
		$jelo = $_GET['jelo'];
		$ime = $_GET['imeprez'];
		$adresa = $_GET['adres'];
		$brtel = $_GET['brtel'];
		$napomena = $_GET['napomena'];
		
		include ("config.php");
		
		$upit = "INSERT INTO `porudzbine`(`jelo`, `imeprez`, `adresa`, `brtelel`, `napomena`) VALUES ('$jelo', '$ime', '$adresa', '$brtel', '$napomena' )";
		$result = mysqli_query($conn, $upit);
		
		if($result){
			echo "Dragi $ime, vaša porudžbinu $jelo možete očekivati da će vam se dostaviti u roku od 60 minuta na adresu $adresa.<br /><br />"; 
			echo "Ukoliko bude nekih zabuna, pozvaćemo vas na $brtel. <br /><br />";
			echo "Hvala!";
		}
		
	}
	else{
		die("Pokusaj ponovo");
	}







?>