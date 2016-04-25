$("#yetki").change(function(){
		var cb = document.getElementById("yetki");
		var rol = cb.options[cb.selectedIndex].value;
		console.log(yetki);
		$.ajax({
		type:"POST", 
		url:"process.php?islem=uyeol",
		data:{rol:rol},
		datatype:"html", 
		beforeSend : function(){ $("#secilenRol").html("Yükleniyor.."); },
		success :function(cevap){ $("#secilenRol").html(cevap);},
		error: function(){ alert("hata oluştu "); }
	});
});