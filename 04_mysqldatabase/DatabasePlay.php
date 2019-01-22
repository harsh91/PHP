<?php

    require "DatabaseConnection.php";
    require "Animal.php";

    $dbCon = new DatabaseConnection();
    $dbCon->connectAnimalDB();
    $connection = $dbCon->getDatabaseConnection();
    printArr($connection);

    $animal = new Animal('Tommy', 6, 'Phoenix');
//    $animal->createTable($connection);
//    $animal->createRecord($connection);
//    $animal = new Animal('Hily', 10, "Florence", 1);
//    $animal->updateRecord($connection);

//    $animal->deleteRecord($connection);












    function printArr($arr) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
?>