<?php

	if(isset($_GET['new1']) && isset($_GET['new2']) ){
		$novo1 = $_GET['new1'];
		$novo2 = $_GET['new2'];
		
		include("config.php");
		
		$upit = "INSERT INTO `meni`(`jelo`, `cena`) VALUES ('$novo1','$novo2')";
		$result = mysqli_query($conn, $upit);
		
		if(!$result){
			die("Greska!");
		}
		else{
			echo "<br /> <br /><center> Uneli ste jelo: $novo1 sa cenom $novo2! </center>";
		}
		
		
	}




?>