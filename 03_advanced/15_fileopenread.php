<?php

    echo "Straight out reading file in one big junk!!<br/>";
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("text.txt")) . "<br/><br/><br/>";
    fclose($myfile);



    echo "Reading file line by line!!<br>";
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");

    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);


    echo "<br><br>Reading file character by character!!<br>";
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");

    while(!feof($myfile)) {
        echo fgetc($myfile) . "<br>";
    }
    fclose($myfile);