<?php
    function sessionStart() {
        session_start();
        echo "Session started!";
    }

    function sessionDestroy() {
        session_unset();
        session_destroy();
        echo "Session destroyed!";
    }

    function checkSessionVariablesSet() {
        if(array_key_exists("color", $_SESSION) && array_key_exists("animal", $_SESSION)) {
            echo "Session variables are set!";
            getSessionVariables();
        } else {
            echo "Session variables are not set!";
        }
    }

    function setSessionVariables() {
        $_SESSION["color"] = "red";
        $_SESSION["animal"] = "dog";
        echo "Session variables set!";
    }

    function getSessionVariables() {
        echo "Color: " . $_SESSION['color'] . ", Animal.php: " . $_SESSION['animal'];
    }

    sessionStart();
//    setSessionVariables();
//    checkSessionVariablesSet();
//    sessionDestroy();
?>