$(document).ready(function() {
	$("header").on('click', '.drop', function() {
		$("nav.sub-menu").toggleClass("sub-menu_show");
	});
});