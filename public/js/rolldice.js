$(document).ready( function() {

	var nextGuess = $(".btn-warning").text();

	$('#goBtn').click(function () {
		location.reload(true);
		// if (nextGuess) {
		// 	var url = "rolldice/" + nextGuess;
		// 	window.location.reload(url);
		// 	console.log(nextGuess);
		// } 
	});

	var btnText = $('#goBtn').text();

	if (btnText == 'You LOSE!') {
		$('#goBtn').addClass("btn-danger");
	} else {
		$('#goBtn').addClass("btn-success");
	}

	$('.dieNum').click(function() {
		$('.dieNum').removeClass("btn-warning");
		$('.dieNum').addClass("btn-info");
		$(this).removeClass("btn-info");
		$(this).addClass("btn-warning");
	});

	/* 

	var temp = $("#txt").val();
	url = "http:abc.com/" + temp;
	window.location.replace(url);
	or
	window.location(url); 

	*/

});