<?php

	if(isset($_GET['porudzbina']) ){
		$broj = $_GET['porudzbina'];
		
		include("config.php");
		
		$upit = "DELETE FROM `porudzbine` WHERE brporudzbine = $broj ";
		$result = mysqli_query($conn, $upit);
		
		if(!$result){
			die("Nisi dobro obrisao");
		}
		else{
			echo "<br /> <br />Obrisali ste porudžbinu pod rednim brojem $broj!";
			//header("Location: indexradnici.php");
		}
	}


?>