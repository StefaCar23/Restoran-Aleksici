<?php

	if(isset($_GET['brisni']) ){
		$brisiclana = $_GET['brisni'];
		
		include("config.php");
		
		$upit = "DELETE FROM `clanovi` WHERE id='$brisiclana' ";
		$result = mysqli_query($conn, $upit);
		
		if(!$result){
			die("Da li je moguce");
		}
		else{
			echo "<br /><br /> Obrisan broj $brisiclana! ";
		}
	}
?>