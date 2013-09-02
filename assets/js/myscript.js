$(function(){

$("#home a:contains('Home')").parent().addClass('active');
$("#schedule a:contains('Schedule')").parent().addClass('active');
$("#artists a:contains('Artists')").parent().addClass('active');
$("#venue a:contains('Venue')").parent().addClass('active');
$("#register a:contains('Register')").parent().addClass('active');




//make menu automaticallu dropdown when hover
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});
});