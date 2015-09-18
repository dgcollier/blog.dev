<html>
<head>
    <title>Simple Simon Game</title>

    <link rel="stylesheet" type="text/css" href="/css/simon.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <script type="text/javascript" src="/js/jquery.js"></script>
    
</head>
<body>
           
    <h1 id="title">Simple Simon</h1>
    <h2 id="instructions">He does. You do. Repeat.</h2>

    <div id="borderBox" class="well">
        <div id="0" class="box green"></div>
        <div id="1" class="box red"></div>
        <div id="2" class="box yellow"></div>
        <div id="3" class="box blue"></div>
    </div>

    <button type="button" id="start" class="btn-lg">New Game</button>
    <button type="button" id="quit" class="btn-lg">Reset Game</button>
    <button type="button" id="round" class="btn-lg">Round: 0</button>
    <button type="button" id="high-score" class="btn-lg">High Score: 0</button>

    <script type="text/javascript" src="/js/simon.js"></script>

</body>
</html>