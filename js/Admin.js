function abrir() {
	$(".sidemenu").css("left", "0");
	$(".contenedor").css("margin-left", "200%px");
}
function cerrar() {
	$(".sidemenu").css("left", "-100%");
	$(".contenedor").css("margin-left", "0");
}


$(document).ready(function () {
	$(".toggle").click(function (e) {
		e.preventDefault();
		var p = $(".sidemenu").offset().left;
		if (p < 0) abrir();
		else cerrar();
	});
});

$(document).ready(function () {

	var height = $(window).height();

	ajustesIniciales();


	function ajustesIniciales() {
		$("section#body").css({ "margin-top": height -400 + "px" });
		$("section#scrolldown").css({ "display": "block !important" });
		$("section#seccion").css({"display":"none"});

	}


	$(document).scroll(function () {
		var scrollTop = $(this).scrollTop();
		var pixels = scrollTop / 70;

		if (scrollTop < height) {
			$("section#scrolldown").css({ "display": "none" });
			$("section#seccion").css({"display":"block"});
			$("section#contenedor_general").css({
				"-webkit-filter": "blur(" + pixels + "px)",
				"background-position": "center -" + pixels * 1 + "px"
			});
			
		}


	});

});