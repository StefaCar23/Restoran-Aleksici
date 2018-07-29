<?php

	include("config.php");
	
	$upit = "SELECT * FROM `porudzbine` ";
	$result = mysqli_query($conn, $upit);
	
	if(!$result){
		die("Greska");
	}
	
	
	while($red=mysqli_fetch_assoc($result) ){
		$broj = $red['brporudzbine'];
		$jelo = $red['jelo'];
		$ime = $red['imeprez'];
		$adresa = $red['adresa'];
		$telefon = $red['brtelel'];
		$napomena = $red['napomena'];
		
		//echo "<br /> <br />" . $broj . "." . " " . $jelo . "....." . $ime . "....." . $adresa . "....." .  $telefon . "....." . $napomena . "<br />";
		echo "<br />";
		echo $broj . ". " . $ime . "....." . $adresa . "....." . $telefon . "<br />";
		echo $jelo . " " . "(" . $napomena . ")";
		echo "<Br />";
	}



?>