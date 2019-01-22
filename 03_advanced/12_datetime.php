<?php

    //Basic styles for date time
    echo "Today is: " . date('Y/m/d') . "<br/>";
    echo "Today is: " . date('Y-m-d') . "<br/>";
    echo "Today is: " . date('Y.m.d') . "<br/>";
    echo "Today is: " . date('l') . "<br/>";
    echo "Today is: " . date('d') . "<br/>";
    echo "Today is: " . date('m/d') . "<br/>";
    echo "Time is: " . date('h:i:sa') . "<br/>";


    //Change default timezone
    echo "Timezone is: " . date_default_timezone_set('America/Phoenix') . "<br/>";
    echo "Newyork date and time: " . date('Y/m/d - h:i:sa') . "<br/>";


    //Create a date with php mktime()
    $d = mktime(13, 39, 21, 1, 8, 2019);
    echo "MK Date and time: " . date("Y-m-d h:i:sa", $d) . "<br/>";


    //Create a date from string
    $date = strtotime("April 15 2019 10:10pm");
    echo "Strtotime: " . date("Y-m-d h:i:sa", $date) . "<br/>";

    $date = strtotime("Saturday");
    echo "Coming Saturday: " . date("y-m-d", $date) . "<br/>";

    $date = strtotime("+3 months");
    echo "3 months from now: " . date("y-m-d", $date) . "<br/>";

    $date = strtotime("next Saturday +7 days");
    echo "Next Saturday: " . date("y-m-d", $date) . "<br/>";

    $date = strtotime("tomorrow");
    echo "Tomorrow: " . date("y-m-d", $date) . "<br/>";

    $date = strtotime("Saturday");
    $date = strtotime("+3 months", $date);
    echo "3 months from coming Saturday: " . date("y-m-d", $date) . "<br/>";

    $date = strtotime("July 4");
    $date = ceil(($date - time())/60/60/24);//minutes(60)->hours(60)->day(24)
    echo "Days remaining to July 4th: " . $date . "<br/>";
?>