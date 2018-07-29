$(document).on("click", "#prikaziporudzbine", function(){
	porudzbineAjax("pokazipor");
});

$(document).on("click", "#obrisiporudzbinu", function(){
	porudzbineAjax("obrisiporudzbinu");
});

$(document).on("click", "#dugmebrisanje", function(){
			var brojporudzbine;
			brojporudzbine = $("#brisibroj").val();
		
			if(brojporudzbine == ""){
				alert("Unesite broj porudžbine da biste mogli da je obrišete!");
				return;
			}
		
			$.ajax({
				url: "obrisipor.php",
				method: "GET",
				data:{
					"porudzbina" : brojporudzbine
				},
				dataType: "text",
				success: function(result){
					$("#div3").html(result);
				}
			});
		});



	
function porudzbineAjax(buttons){
	$.ajax({
		url: "dugmadpor.php",
		method: "GET",
		data:{
			"btns" : buttons
		},
		dataType: "text",
		success: function(result){
			$("#div3").html(result);
		}
	});
}


 
 