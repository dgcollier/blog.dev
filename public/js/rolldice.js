$(document).ready( function() {

	if ($('#goBtn').text() == 'You LOSE!') {
		$('#goBtn').addClass("btn-danger");
	} else {
		$('#goBtn').addClass("btn-success");
	}

	$('#goBtn').click(function() {
		location.reload(true);
	});
});