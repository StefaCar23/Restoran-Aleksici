<?php

	
		
		switch($_GET['btnfooter']){
			case "O nama" : calloNama(); break;
			case "Jelovnik" : calljelovnik(); break;
			case "Registruj se" : callregSe(); break;
			case "Poruči hranu" : callporuci(); break;
			case "Kontakt" : callkontakt(); break;
		}
	

	function calloNama(){
		include("onama.php");
	}
	function calljelovnik(){
		
		include("jelovnik.php");
	}
	function callregSe(){
		include("regstranica.php");
	}
	function callporuci(){
		
		include("porudzbine.php");
		
		
	}
	function callkontakt(){
		include("kontakt.php");
	}
	



?>