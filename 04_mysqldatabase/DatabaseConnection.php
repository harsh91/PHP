<?php

    class DatabaseConnection {

        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $connection;

        public function __construct() {
            // Create connection
            $this->connection = new mysqli($this->servername, $this->username, $this->password);

            // Check connection
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
            echo "Connected successfully";
        }

        public function connectAnimalDB() {
            // Create connection
            $this->connection = new mysqli($this->servername, $this->username, $this->password, "Animal");

            // Check connection
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
            echo "Animal DB Connected successfully";
        }

        public function getDatabaseConnection() {
            return $this->connection;
        }

        public function createAnimalDatabase() {
            $sql = "CREATE DATABASE animal";
            if($this->getDatabaseConnection()->query($sql) === TRUE) {
                echo "Database Animal Created Successfully!";
            } else {
                echo "Error creating the database Animal: " . $this->getDatabaseConnection()->error;
            }
        }

    }
?>