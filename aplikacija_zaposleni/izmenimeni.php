<?php

	if(isset($_GET['br']) && isset($_GET['jelo']) && isset($_GET['cena']) ){
		$br = $_GET['br'];
		$jelo = $_GET['jelo'];
		$cena = $_GET['cena']; 
		
		include("config.php");
		
		$upit = "UPDATE `meni` SET `jelo`='$jelo',`cena`='$cena' WHERE `br`=$br ";
		$result = mysqli_query($conn, $upit);
		
		if(!$result){
			die("Pogresno!");
		}
		else{
			echo "<br /><br />Izmenili ste jelo u jelovniku pod rednim brojem $br ";
			echo "<br /><br />";
			echo "Novo jelo u jelovniku je $jelo, a cena je $cena ";
		} 
		
	}






?>