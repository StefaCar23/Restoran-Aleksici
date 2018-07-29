<?php
	
	if(isset($_GET['foody']) ){
	$nmb = $_GET['foody'];
	
	include("config.php");
	
	$upit = "DELETE FROM `meni` WHERE br='$nmb'";
	$result = mysqli_query($conn, $upit);
	
	if(!$result){
		die("GRESKA!!!");
	}
	else{
		echo "<br /><br />Obrisali ste jelo pod rednim brojem $nmb.";
	}
	
	}
	
	


?>