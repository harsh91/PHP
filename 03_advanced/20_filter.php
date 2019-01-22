<?php

    function printFilterList() {
        $filterList = ["Filter ID" => "Filter Name"];
        foreach (filter_list() as $id =>$filter) {
            $filterList[filter_id($filter)] = $filter;
        }
        echo "<pre>";
        print_r($filterList);
        echo "</pre>";
    }

    function validateSanitizeString() {
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr . "<br/>";
    }

    function validateInteger() {
        $int = 0;
        if (!filter_var($int, FILTER_VALIDATE_INT) === false || filter_var($int, FILTER_VALIDATE_INT) === 0) {
            echo("Integer is valid");
        } else {
            echo("Integer is not valid");
        }
        echo "<br>";
    }

    function validateIPAddress() {
        $ip = "127.257.0.1";

        if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
            echo "$ip is a valid address";
        } else {
            echo "$ip is not a valid ip address";
        }
        echo "<br>";
    }

    function validateEmail() {
        $email = "john.doe@example.com<>";

        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo("$email is a valid email address");
        } else {
            echo("$email is not a valid email address");
        }
        echo "<br>";
    }

    function validateURL() {
        $url = "https://www.w3schools.com";

        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Validate url
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            echo("$url is a valid URL");
        } else {
            echo("$url is not a valid URL");
        }
        echo "<br>";
    }


    printFilterList();
    validateSanitizeString();
    validateInteger();
    validateIPAddress();
    validateEmail();
    validateURL();
?>