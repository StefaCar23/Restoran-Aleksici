<?php

	if(isset($_GET['vv']) ){
		switch($_GET['vv']){
		case "pokaziclana" : callpokazi(); break;
		case "izmeniclana" : callizmeni(); break;
		case "obrisiclana" : callobrisi(); break;
		
	}
	}

function callpokazi(){
	echo "<br />";
	include("pokaziclana.php");
}

function callizmeni(){
	echo "
		<br /><br />
		Broj člana: <input type='text' id='brcl' name='nummember' placeholder='...'></input> <br /><br />
		Ime: <input type='text' id='imecl' name='namemember' placeholder='...'></input><br /><br />
		Adresa: <input type='text' id='adrcl' name='adrmember' placeholder='...'></input><br /><br />
		<input type='submit' id='dugicl' name='btnmember' value='Izmeni' class='menidugmad'></input>
		
	";
}

function callobrisi(){
	echo "
		<br /><br />
		Redni broj: <input type='text' id='brojzabrisanje' name='nmbfordelete' placeholder='...'></input><br /> <br />
		<input type='button' id='dugmezabrisanje' name='btnfordelete' value='Obriši' class='menidugmad'></input>
	";
}
	
?>