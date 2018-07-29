<?php

	include("config.php");
	
	$upit = "SELECT `korisnicko_ime` FROM `radnici_login`";
	$result = mysqli_query($conn, $upit);
	$red = mysqli_fetch_assoc($result);
	
	print_r($red);
	/*if(!$result){
		die("Probaj opet");
	}
	else{
		echo "uspesna konekcija";
	}*/
	/*while($red=mysqli_fetch_assoc($result) ){
		$ime = $red['korisnicko_ime'];
		
		echo $ime;
	}*/

?>