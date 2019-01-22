<?php

    $myfile = fopen("writingfile.txt", "w");
    $name = "Harsh Girdhar\n";
    fwrite($myfile, $name);
    $age = 26;
    fwrite($myfile, $age);
    $email = "\ngirdharharsh01@gmail.com\n";
    fwrite($myfile, $email);
    $phone = 5162256229;
    fwrite($myfile, $phone);
    fclose($myfile);