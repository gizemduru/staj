
/*
$("p").css("color","red");
$("p").css("font-style","italic");

*/

/*
var p=$("p");
p.css("color","blue");
p.css("font-style","italic");
*/

/* $("p").css({"color":"yellow","font-size":"2em"}).text("Burak"); */

/*
$("p").css({"color":"yellow","font-size":"2em"});

var dene = $("#bir").next();
dene.css("border","1px solid #ccc");

var dene = $("#iki").prev();
dene.css("border","1px solid #ccc");
*/


/*
$("p").css({"color":"yellow","font-size":"2em"});

var dene = $("#bir").nextAll();
dene.css("border","1px solid #ccc");

var dene = $("#iki").prevAll();
dene.css("border","1px solid #ccc");
*/


/*
$("p").css({"color":"yellow","font-size":"2em"});

var dene = $("#bir").nextUntil("div");
dene.css("border","1px solid #ccc");

var dene = $("#iki").prevUntil("div");
dene.css("border","1px solid #ccc");
*/

/*
$("p").css({"color":"yellow","font-size":"2em"});

var dene = $("#bir").siblings();
dene.css("border","1px solid #ccc");

*/


/*
$("p").css({"color":"yellow","font-size":"2em"});
$("p").parent();
$("p").parent("div");
$("p").offsetParent("div");
*/

/*
$("p").css({"color":"yellow","font-size":"2em"});
$("p").parents();
$("p").parents("div");
*/


/*
$("p").css({"color":"yellow","font-size":"2em"});
$("p").parentsUntil("div");
$("p").parentsUntil("div","h1");
*/

/*
$("p").css({"color":"yellow","font-size":"2em"});
$("p").closest("div");
*/

/*
$("p").css({"color":"yellow","font-size":"2em"});
$("p").children();
$("p").children("div");

$("p").find();
$("p").find("div");
*/

/*
$("p").css({"color":"yellow","font-size":"2em"});
$("p").add("div");
*/


/*
$("*").css("background-color","red");
*/


/* //////////////\\\\\\\\\\\\\\\\  */

var tikla = $("#tikla");
/*
tikla.fadeTo(3000,0.2);
tikla.fadeOut(3000);
tikla.fadeOut("slow");
tikla.fadeIn(3000);
tikla.fadeIn("fast");
*/

/*
tikla.slideUp();
tikla.slideUp(1000);
tikla.slideUp("fast");
tikla.slideUp(1000).slideDown(1000);
tikla.slideToggle(1000).slideToggle(1000);
tikla.slideToggle(1000);
*/

/*
tikla.animate({ 
		"font-size":"16px",
		"width":"-=60px",
		"left":"50px",
		"top":"+=50px"
},1000);
*/


/*
tikla.animate({ 
		"margin-left":"0px"
}, 1000);

tikla.animate({ 
		"margin-left":"0px"
},{
		duration:3000,
		easing: "linear"
});

tikla.animate({ 
		"margin-left":"0px"
},{
		duration:3000,
		easing: "swing"
});


$.easing["myfunc"] = function(i) {return i*i;};
tikla.animate({ 
		"margin-left":"0px"
},{
		duration:3000,
		easing: "myfunc"
});


$.easing["myfunc"] = Math.sqrt;
tikla.animate({ 
		"margin-left":"0px"
},{
		duration:3000,
		easing: "myfunc"
});

*/


/*
$("p").wrap("<em>");
$("p").wrapInner("<em>");
$("p").wrapAll("<em>");
*/


/*
var p = $("div p").clone();
$("#clone").append(p);
*/

/*
$("#clone").remove();
$("#clone").empty();
$("#clone").unwrap();  ///unwrap() fonksiyonunu anlamadım :D
*/


/*   ////////\\\\\\\\\\\\\\\\  */
/*
$("form").submit(function(e){
	e.preventDefault();
	
	var msg = $("#msg").val();
	var animate = $("#animate").prop("checked");
	$("#myform").remove();

	for(var i = 0; i < 5;i++){
		$("article").append("<div>"+msg+"</div>");
	}
	
	var d = $("article div");
	d.css({
			"color":"red",
			"height":"50px",
			"width":"100px",
			"background-color":"purple",
			"border":"2px solid #ccc",
			"border-radius":"10px",
			"cursor":"pointer",
			"text-align":"center",
			"font-size":"2em"
	});
	
	for(var i=0;i<5;i++){
		d.eq(i).offset({ left: (i+1)*100 });
	}
	
	if(animate){
		d.fadeOut(1000).fadeIn(1000);
	}
	
});
*/
/*   ////////\\\\\\\\\\\\\\\\  */
/*
$(Setup);

// detect when globe image is available
$("#globe").load(function(e) { console.log("Globe image has loaded"); });

// Setup function
function Setup() {
	console.log("The DOM is ready");
}

*/
/*   ////////\\\\\\\\\\\\\\\\  */



/*   ////////\\\\\\\\\\\\\\\\  */
/*
$(function() {

	// change class when mouse moved over/out
	$("#e1").bind("mouseenter mouseleave", function(e) { 
		$(this).toggleClass("over");
	});
	
	// disable a link click
	$("a#google").click(function(e) {
		alert("You're going nowhere!");
		return false;
	});
	
	// check a form on submit
	$("#myform").submit(function(e) {
		var n = $("#yourname").val();
		if (n == "") {
			alert("Please enter your name...");
		}
		else {
			alert("Hello "+n+"!");
		}
		return false;
	});

});
*/
/*   ////////\\\\\\\\\\\\\\\\  */

/*   ////////\\\\\\\\\\\\\\\\  */
/*
$(function() {

	// show event information
	$("#e1").bind("mouseover", function(e) {
		console.clear();
		console.log("event type: ", e.type);
		console.log("target: ", e.target);
		console.log("currentTarget: ", e.currentTarget);
		console.log("mouse at: ", e.pageX, e.pageY);
	});

});
*/
/*   ////////\\\\\\\\\\\\\\\\  */


/*   ////////\\\\\\\\\\\\\\\\  */
/*
$(function() {

	// show event information
	$("#e1").bind("mouseover", function(e) {
		console.log(e);
	});

});

*/
/*   ////////\\\\\\\\\\\\\\\\  */

/*
$(document).ready(function() {
	var ilk = $("#ilk").text();
$("#son").append("<p>"+ilk+"</p>");
});


*/




/*
$('div').click(function() {
	$(this).fadeOut(1000).fadeIn(1000); 
  });

$('div').hover(function() {
	$(this).fadeOut(1000);
  });


$('div').dblclick(function(){
      $('div').fadeOut('slow'); 
   });
 
*/



   


/*
$(document).ready(function() {
	 $("div").css({
	"font-size":"2em",
	"color":"#006",
	"background-color":"#ccc",
	"width":"200px",
	"height":"50px",
	"position":"relative"
});

    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Left arrow key pressed
			case 37:
				$('div').animate({left: "-=10px"}, 'fast');
				break;
			// Up Arrow Pressed
			case 38:
				// Put our code here
				$('div').animate({top: "-=10px"}, 'fast');
				break;
			// Right Arrow Pressed
			case 39:
				// Put our code here
				$('div').animate({left: "+=10px"}, 'fast');
				break;
			// Down Array Pressed
			case 40:
				// Put our code here
				$('div').animate({top: "+=10px"}, 'fast');
				break;
		}
	});
});
*/

/*
$(function(){

$("div").not(":even").css({
	"color":"rgb(0, 102, 204)",
	"background-color":"#ccc"
	});
	

});


*/



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







