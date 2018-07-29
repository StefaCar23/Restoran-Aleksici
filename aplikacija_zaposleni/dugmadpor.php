<?php

	switch($_GET['btns']){
		case "pokazipor" : pokazi(); break;
		case "obrisiporudzbinu" : obrisi(); break;
	}
	
	function pokazi(){
		include("porudzbine.php");
	}
	
	function obrisi(){
		echo "
		<br /> <Br />
			Broj porudžbine: <input type='text' id='brisibroj' name='deletenmb' placeholder='...' /> <Br /> <br />
			<input type='submit' id='dugmebrisanje' name='btndelete' value='Obriši' class='menu' />
		";
	}





?>