<?php

	include("config.php");
	
	$upit = "SELECT `id`, `imeprezime`, `mejladresa` FROM `clanovi` ";
	$result = mysqli_query($conn, $upit);
	
	if(!$result){
		die("Greska!");
	}
	
	while($red=mysqli_fetch_assoc($result) ){
		$id = $red['id'];
		$ime = $red['imeprezime'];
		$adresa = $red['mejladresa'];
		
		echo "$id. $ime   $adresa <br /> " ;
	}


?>