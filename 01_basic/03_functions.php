<?php

    function displayMessage($message) {
        echo $message;
    }



    function askQuestion($question, $who) {
        echo "Hello $who, $question?<br>";
    }

    $globalX = 9.99;
    $globalY = 10;

    function add($first, $second) {
        return $first + $second;
    }


    askQuestion("When are you coming to India", "Neha Girdhar");

    displayMessage("What is going on!!<br>");

    askQuestion("How are you", "Harsh Girdhar");

    displayMessage("Adding globals X and Y: " . add($GLOBALS['globalX'], $GLOBALS['globalY']) . "<br>");