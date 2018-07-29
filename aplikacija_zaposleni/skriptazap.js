$(document).ready(function(){
		
		$("#meni1").click(function(){
			meniAjax("meni");
		}); //ovo je ok
		
		$("#meni2").click(function(){
			meniAjax("izmenimeni");
		}); //ovo je ok
		
		$("#meni3").click(function(){
			meniAjax("ubacijelo");
		}); //ovo je ok
		
		$("#meni4").click(function(){
			meniAjax("obrisijelo");
		}); //ovo je ok
		
		$(document).on("click", "#izmeni4", function(){
			var br, jelo, cena;
			br = $("#izmeni1").val();
			jelo = $("#izmeni2").val();
			cena = $("#izmeni3").val();
			
			if( br == "" || jelo == "" || cena == "" ){
				alert("Unesite sve podatke!");
				return;
			}
			
			$.ajax({
				url: "izmenimeni.php",
				method: "GET",
				data:{
					"br" : br,
					"jelo" : jelo,
					"cena" : cena
				},
				dataType: "text",
				success: function(result){
					$("#div1").html(result);
				}
			});
			
		}); //ovo je ok
	
		$(document).on("click", "#dugunesi", function(){
			var novojelo, novacena;
			novojelo = $("#unesijelo").val();
			novacena = $("#unesicenu").val();
		
				if( novojelo == "" || novacena == ""){
					alert("Morate popuniti sva polja da biste dodali novo jelo!");
					return;
				}
		
				$.ajax({
					url: "unesinovojelo.php",
					method: "GET",
					data:{
						"new1" : novojelo,
						"new2" : novacena
					},
					dataType: "text",
					success: function(result){
						$("#div1").html(result);
					}
				});
		
		});	//ovo je ok
	
	
		$(document).on("click", "#obrisijelo", function(){
			var brojhrane;
			brojhrane = $("#brojjela").val();
		
			if(brojhrane == ""){
				alert("Unesite redni broj jela da biste mogli da ga obrišete!");
				return;
			}
		
			$.ajax({
				url: "obrisijelo.php",
				method: "GET",
				data:{
					"foody" : brojhrane
				},
				dataType: "text",
				success: function(result){
					$("#div1").html(result);
				}
			});
		});
	
	
	$(document).on("click", "#clan1", function(){
		clanoviAjax("pokaziclana");
	});
	
	$(document).on("click", "#clan2", function(){
		clanoviAjax("izmeniclana");
	});
	
	$(document).on("click", "#clan3", function(){
		clanoviAjax("obrisiclana");
	}); 
	
	
	
	
	$(document).on("click", "#dugmezabrisanje", function(){
		var brbrisi;
		brbrisi = $("#brojzabrisanje").val();
		
		if(brbrisi == ""){
		alert("Molimo vas, unesite redni broj člana kako biste mogli da ga obrišete iz baze...");
		return;
		}
		
		$.ajax({
			url: "obrisiclana.php",
			method: "GET",
			data:{
				"brisni" : brbrisi
			},
			dataType: "text",
			success: function(stefa){
				$("#div2").html(stefa);
			}
		});
	});
	
	
	$(document).on("click", "#dugicl", function(){
		var jedan, dva, tri;
		jedan = $("#brcl").val();
		dva = $("#imecl").val();
		tri = $("#adrcl").val();
		
		if(jedan == "" && dva == "" && tri == ""){
			alert("Morate popuniti sva polja...");
			return;
		}
		
		$.ajax({
			url: "izmeniclana.php",
			method: "GET",
			data:{
				"one" : jedan,
				"two" : dva,
				"three" : tri
			},
			dataType: "text",
			success: function(masa){
				$("#div2").html(masa);
			}
		});
	});
	
	
	

});






	
function meniAjax(buttons){
	$.ajax({
		url: "meni.php",
		method: "GET",
		data:{
			"btns" : buttons
		},
		dataType: "text",
		success: function(result){
			$("#div1").html(result);
		}
	});
}

function clanoviAjax(bb){
	$.ajax({
		url: "members.php",
		method: "GET",
		data:{
			"vv" : bb
		},
		dataType: "text",
		success: function(res){
			$("#div2").html(res);
		}
	});
}












