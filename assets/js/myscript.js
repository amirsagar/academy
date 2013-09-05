$(function(){

//show current nav
$("#home a:contains('Home')").parent().addClass('active');
$("#others a:contains('Others')").parent().addClass('active');
$("#characters a:contains('Characters')").parent().addClass('active');
$("#categories a:contains('Categories')").parent().addClass('active');
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

//activate others tabs

var hash = window.location.hash;
hash && $('ul.nav a[href="'+ hash + '"]').tab('show');

//bootstrap class img
$('.photogrid img').addClass('img-circle');


});