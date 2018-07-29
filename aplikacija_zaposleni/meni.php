<?php

	if(isset($_GET['btns']) ){
		switch($_GET['btns']){
			case "meni" : ajdemeni(); break;
			case "izmenimeni" : ajdeizmeni(); break;
			case "ubacijelo" : ajdeubaci(); break;
			case "obrisijelo" : ajdeobrisi(); break;
		}
	}
	
	function ajdemeni(){
		echo "<br /> <br />";
		include("meniradnici.php");
	}
	
	function ajdeizmeni(){
		echo "
			<br /> <br />
			Broj jela: <input type='text' id='izmeni1' name='izm1' placeholder='...' ></input> <br /> <br />
			Jelo: <input type='text' id='izmeni2' name='izm2' placeholder='...'></input> <br /> <br />
			Cena: <input type='text' id='izmeni3' name='izm3' placeholder='...'></input> <br /><br />
			<input type='button' id='izmeni4' name='izm4' value='Izmeni' class='menidugmad'></input>
			</center>
		";
	}
	
	function ajdeubaci(){
		echo "
		<br /><br />
		Unesi novo jelo: <input type='text' id='unesijelo' name='enterfood' placeholder='...'></input> <br /><br />
		Unesi novu cenu: <input type='text' id='unesicenu' name='enterprice' placeholder='...'></input> <br /><br />
		<input type='button' id='dugunesi' name='btnenter' value='Unesi jelo' class='menidugmad'></input>
		";
	}
	
	function ajdeobrisi(){
		echo "
			<br />
			Broj jela: <input type='text' id='brojjela' name='fnum' placeholder='...'></input> <Br /><br />
			<input type='submit' id='obrisijelo' value='Obriši jelo' class='menidugmad'></input>
			 
		";
	}



?>