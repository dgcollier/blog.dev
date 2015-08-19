<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rolldice</title>
    <script src="/js/jquery.js"></script>
</head>
<body>
	<h1>Roll Dice Game:</h1>
	<div class= "well" id="guess">
	    <h2>The computer rolled: <?= $compGuess; ?></h2>
	    <h2>You rolled: <?= $userGuess ?></h2>
	</div>

    <button class="btn btn-lg" id="goBtn"><?= $message ?></button>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/rolldice.css">

    <p>Select next guess below:</p>

    <div class="well" id="die">
	    <button class="btn btn-md btn-info dieNum" id="one">1</button>
	    <button class="btn btn-md btn-info dieNum" id="two">2</button>
	    <button class="btn btn-md btn-info dieNum" id="three">3</button>
	    <button class="btn btn-md btn-info dieNum" id="four">4</button>
	    <button class="btn btn-md btn-info dieNum" id="five">5</button>
	    <button class="btn btn-md btn-info dieNum" id="six">6</button>
    </div>

    <script src="/js/rolldice.js"></script>
</body>
</html>