<?php
    function createCookie() {
        setcookie("name", "Harsh G.", time()+(86400) * 30, '/');
        echo "Cookie 'user' is created!";
    }

    function checkIfCookieExistsOrNot() {
        if(!isset($_COOKIE["name"])) {
            echo "Cookie named: 'name' doesn't exists!";
        } else {
            echo "Cookie exists with value " . $_COOKIE["name"];
        }
    }

    function deleteCookie() {
        setcookie("name", "", time() - 3600, "/");
        echo "Cookie 'name' is deleted!";
    }

    function checkIfCookieEnabled() {
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled";
        } else {
            echo "Cookies are disabled";
        }
    }

//    createCookie();
//    checkIfCookieEnabled();
//    checkIfCookieExistsOrNot();
//    deleteCookie();
?>