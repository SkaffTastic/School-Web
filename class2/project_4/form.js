function testname() {
	if($('#name').val()=='') {
		$('#namestar').show();
		$('#errormessage').show();
		return false;
	}

	$('#namestar').hide();
	$('#errormessage').hide();
	return true;
}

function testemail() {
	if($('#email').val()=='') {
		$('#emailstar').show();
		$('#errormessage').show();
		return false;
	}

	$('#emailstar').hide();
	$('#errormessage').hide();
	return true;
}

function testphone() {
	if($('#phone').val()=='') {
		$('#phonestar').show();
		$('#errormessage').show();
		return false;
	}

	$('#phonestar').hide();
	$('#errormessage').hide();
	return true;
}

function testcomment() {
	if($('#comment').val()=='') {
		$('#commentstar').show();
		$('#errormessage').show();
		return false;
	}

	$('#commentstar').hide();
	$('#errormessage').hide();
	return true;
}


$(document).ready();

// this is all code from the examples in class that i chopped and screwed with it make it work on my site.