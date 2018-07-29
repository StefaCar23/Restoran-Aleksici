<?php

	include("config.php");
	
	$upit = "SELECT * FROM `meni` WHERE 1";
	$result = mysqli_query($conn, $upit);
	
	if(!$result){
		die("Greska");
	}
	
	while($red=mysqli_fetch_assoc($result) ){
		$br = $red['br'];
		$jelo = $red['jelo'];
		$cena = $red['cena'];
		echo "<ul> $br. $jelo...............$cena  </ul> ";
		
		
		
	}

?>