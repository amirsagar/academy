$(function(){

//show current nav
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

//show tooltip
	$("[data-toggle='tooltip']").tooltip({animation: true});

//show modal
	$('.modalphotos img').on('click', function(){
		$('#modal').modal({
			show: true, 
		})
		var mysrc = this.src.substr(0, this.src.length-10) + '.jpg';
		$('#modal-image').attr('src',mysrc);
		$('#modal-image').on('click', function(){
			$('#modal').modal('hide');
		})
	});

//activate schedule tabs

var hash = window.location.hash;
hash && $('ul.nav a[href="'+ hash + '"]').tab('show');

});