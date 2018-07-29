
	
	
	
	$(document).on("click", "#po6", function(){
		var jelo, imeprez, adres, brtel, napomena;
		jelo = $("#po1").val();
		imeprez = $("#po2").val();
		adres = $("#po3").val();
		brtel = $("#po4").val();
		napomena = $("#po5").val();
		
		if( jelo =="" || imeprez == "" || adres == "" || brtel == "" || napomena == "" ){
			alert("Sva polja su obavezna, tako da vas molimo da ih sve popunite! Hvala, vas restoran Aleksici");
			return;
		}
		
		$.ajax({
		url: "posaljiporudzbinu.php",
		method: "GET",
		data:{
			"jelo" : jelo,
			"imeprez" : imeprez,
			"adres" : adres, 
			"brtel" : brtel,
			"napomena" : napomena
		},
		dataType: "text",
		success: function(result){
			$("#content").html(result);
		}
	});
		
	});
	
	$(document).on("click", "#dugme", function(){
		var ime, adresa;
		ime = $("#imeprezime").val();
		adresa = $("#mejladresa").val();
		
		
		if( ime == "" || adresa == ""){
			alert ("Molimo vas da popunite sva polja!");
			return;
		}
		
		$.ajax({
		url: "unesiclana.php",
		method: "GET",
		data:{
			"ime" : ime,
			"adresa" : adresa
		},
		dataType: "text",
		success: function(result){
			$("#content").html(result);
		}
	});
		
		
	});
	
	
	
	
	
	
	
	
	
	


/*function pozoviAjax(buttons){
	$.ajax({
		url: "btnsfooter.php",
		method: "GET",
		data:{
			"btns" : buttons
		},
		dataType: "text",
		success: function(result){
			$("#content").html(result);
		}
	});
}*/





