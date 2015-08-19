<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rolldice</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <style type="text/css">
    	body {
    		text-align: center;
    	}

    	h1 {
    		margin-top: 8%;
    		text-decoration: underline;
    	}

    	#guess,
    	#die {
    		width: 360px;
    		margin-top: 2%;
    		margin-left: auto;
    		margin-right: auto;
    		background-color: #337ab7;
    		color: #fff;
    	}

    	#goBtn {
    		width: 360px;
    	}

    </style>
</head>
<body>
	<h1>Roll Dice Game:</h1>
	<div class= "well" id="guess">
	    <h2>The computer rolled: <?= $compGuess; ?></h2>
	    <h2>You rolled: <?= $userGuess ?></h2>
	</div>

    <button class="btn btn-lg" id="goBtn"><?= $message ?></button>

    <div class="well" id="die">
	    <button class="btn btn-md btn-info dieNum" id="one">1</button>
	    <button class="btn btn-md btn-info dieNum" id="two">2</button>
	    <button class="btn btn-md btn-info dieNum" id="three">3</button>
	    <button class="btn btn-md btn-info dieNum" id="four">4</button>
	    <button class="btn btn-md btn-info dieNum" id="five">5</button>
	    <button class="btn btn-md btn-info dieNum" id="six">6</button>
    </div>


    <script type="text/javascript">
	    $(document).ready( function() {

	    	$('#goBtn').click(function () {
	    		location.reload(true);
	    	})

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

	    });
    </script>
</body>
</html>