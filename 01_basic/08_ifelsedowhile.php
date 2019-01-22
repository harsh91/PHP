<?php

    $number = 10;
    if($number == 0) {
        echo "Number is zero, let's not divide by zero.<br/>";
    } elseif($number < 0 || $number > 100) {
        echo "Let's not do any arithmetic on out of range.<br/>";
    } else {
        echo "Yaay! we have our number.<br/>";
    }

    while($number > 9) {
        echo "Number in while loop: " . $number-- . "<br/>";
    }

    do {
        echo "Number in do while loop: " . $number++ . "<br/>";
    } while($number < 10);


    $arrayEx = [16,24,43,34,25];
    for($i=0 ; $i<count($arrayEx) ; $i++) {
        echo "Array loop for element: $arrayEx[$i] <br/>";
    }

    foreach ($arrayEx as $value) {
        echo "Foreach element just value: $value <br/>";
    }

    $associativeArrayEx = [
        "name" => "Harsh Girdhar",
        "age" => 27,
        "sex" => "M",
        "email" => "girdharharsh01@gmail.com",
        "phone" => 5162256229
    ];
    foreach ($associativeArrayEx as $key => $value) {
        echo "Foreach element key=> $key and value=> $value" . var_dump($value) . "<br/>";
    }

    switch ($number) {
        case 12:
            echo "Value in switch is 12";
            break;
        case 10:
            echo "Value in switch is 10";
            break;
        default:
            echo "Value in switch is default";
    }