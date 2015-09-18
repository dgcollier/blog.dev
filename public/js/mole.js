"use strict";

$(document).ready(function () {
    // $(".thumb").hide();
    startButtonOn();
});

$("#wrapper").mousedown(helmetDown);
$("#wrapper").mouseup(helmetUp);

function startButtonOn () {
    $("#start").on("click", start);
};

function startButtonOff () {
    $("#start").off("click", start);
};

function helmetDown () {
    $(this).removeClass("mouseUp");
    $(this).addClass("mouseDown"); 
};

function helmetUp () {
    $(this).removeClass("mouseDown");
    $(this).addClass("mouseUp"); 
};

function selectNewBox () {

    randomizer = setInterval(function () {
        
        $(".thumb").fadeOut(100);

        var randomDiv = Math.floor(Math.random() * boxes.length);
        var randomPic = Math.floor(Math.random() * pics.length);

        var box = $(boxes[randomDiv]);
        var pic = $(pics[randomDiv]);

        pic.attr("src", "/img/mole/mole" + randomPic + ".png");

        box.children().fadeIn(400);
        
    }, 750);
};

function start () {
    $(".thumb").hide();
    startButtonOff();
    score = 0;

    $("#score").text("Score: " + score);
    $("#high-score").text("High Score: " + highScore);
    selectNewBox();

    var counter = 20;

    var countdown = setInterval(function () {
        
        $("#timer").text("Timer: " + counter);
        
        counter--;

        if (counter == -1) {
            clearInterval(countdown);
            clearInterval(randomizer);
            endGame(); 
        }
    }, 1000);
};

function endGame () {
    $(".thumb").hide();
    alert("You scored " + score + ". Your high score is: " + highScore + "!");
    $("#start").text("Start New Game");
    startButtonOn();
};

function quit () {
    var quit = confirm("Are you sure you want to quit?");
    if (quit) {
        location.reload(true);
    }
};

function displayHighScore () {
    $("#high-score").text("High Score: " + highScore);
};

var score = 0;
var highScore = 0;
var boxes = $(".box");
var pics = $(".thumb");
var randomizer;

$(".thumb").click(function(){
    ++score;
    $("#score").text("Score: " + score);
    
    $(this).hide();   

    if(score > highScore) {
        highScore++;
        displayHighScore();
    } 
});

$("#quit").click(function () {
    quit();
});