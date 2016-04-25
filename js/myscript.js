$(function(){

var toplam = $("img").length;
$("img").hide();

var gosboy = $(".gosteri").height();
var gosgenis = $(".gosteri").width();
$("img").css({
	"height":gosboy,
	"width":gosgenis
});
$("img:first").show();
var n=$("img:first");
var a=n.index();
a++;

ileriGos = function(){
if(n.parent().next("#bitti").children().index() == 0)
	{
		n.hide();
		$("img:first").show();
		n=$("img:first");
		a=1;
		$(".secici").empty();
		$(".secici").append(a+"/8");
		
	}
	else{
		n.hide();
		n.parent().next("li").children().show();
		$(".secici").empty();
		a++;
		$(".secici").append(a+"/8");
		n=n.parent().next("li").children();
	}
	
};
cagir = function(){
	setTimeout(cagir,3000);
	ileriGos();
};

$("#ileri").click(ileriGos);
//setInterval(ileriGos, 3000);
cagir();


});







