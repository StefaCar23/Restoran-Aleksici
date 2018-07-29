<?php

	if(isset($_GET['one']) && isset($_GET['two']) && isset($_GET['three']) ){
		$uno = $_GET['one'];
		$duo = $_GET['two'];
		$tres = $_GET['three'];
		
		include("config.php");
		
		$upit = "UPDATE `clanovi` SET `imeprezime`='$duo',`mejladresa`='$tres' WHERE 'id'='$uno' ";
		$result = mysqli_query($conn, $upit);
		
		if(!$result){
			die("Gresis negde stalno");
		}
		else{
			echo "<br /> <br /> Uspešno je promenjen član pod rednim brojem $uno $duo $tres";
		}
	}



?>