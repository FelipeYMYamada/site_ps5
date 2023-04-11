$("#close-menu").click(function(event) {
	$("#side-navbar").addClass("side-menu-closed");
});

$("#open-menu").click(function(event) {
	$("#side-navbar").removeClass("side-menu-closed");
});