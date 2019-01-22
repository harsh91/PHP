<?php

    class Animal {

        private $petname, $age, $city, $id;

        public function __construct($petname, $age, $city, $id = 0) {
            $this->petname = $petname;
            $this->age = $age;
            $this->city = $city;
            $this->id = $id;
        }

        public function getPetName() {
            return $this->petname;
        }

        public function getAge() {
            return $this->age;
        }

        public function getCity() {
            return $this->city;
        }

        public function getId() {
            return $this->id;
        }

        public function createTable($dbCon) {
            $sql = "
                CREATE TABLE Pet (
                  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  petname VARCHAR(30) NOT NULL,
                  age INT(2) UNSIGNED NOT NULL,
                  city VARCHAR(20) NOT NULL
                )
            ";
            if($dbCon->query($sql) === TRUE) {
                echo "Table Pet created Successfully!";
            } else {
                echo "Error while creating table Pet!" . $dbCon->error;
            }
        }

        public function updateTable($dbCon) {
            $sql = "
                ALTER TABLE Pet (
                  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  petname VARCHAR(30) NOT NULL,
                  age INT(2) UNSIGNED NOT NULL,
                  city VARCHAR(20) NOT NULL
                )
            ";
            if($dbCon->query($sql) === TRUE) {
                echo "Table Pet updated Successfully!";
            } else {
                echo "Error while altering table Pet!";
            }
        }

        public function deleteTable($dbCon) {
            $sql = "
                DELETE TABLE Pet
            ";
            if($dbCon->query($sql) === TRUE) {
                echo "Table Pet deleted Successfully!";
            } else {
                echo "Error while deleting table Pet!";
            }
        }

        public function readTableSchema() {

        }

        public function createRecord($dbCon) {
            $stmt = $dbCon->prepare("INSERT INTO Pet(petname, age, city) VALUES(?, ?, ?)");
            $stmt->bind_param("sis", $this->petname, $this->age, $this->city);
            $stmt->execute();
            $stmt->close();
        }

        public function readAllRecords($dbCon) {
            $stmt = $dbCon->prepare("SELECT * FROM Pet");
            $stmt->execute();
            $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            if(!results) exit("No Records");
            var_export($results);
            $stmt->close();
        }

        public function readRecord($dbCon) {
            $stmt = $dbCon->prepare("SELECT * FROM Pet WHERE id = ?");
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            if(!$result) exit("No Data");
            var_export($result);
            $stmt->close();
        }

        public function updateRecord($dbCon) {
            $stmt = $dbCon->prepare("UPDATE Pet SET petname = ?, age = ?, city = ? WHERE id = ?");
            $stmt->bind_param("sisi", $this->petname, $this->age, $this->city, $this->id);
            $stmt->execute();
            $stmt->close();
        }

        public function deleteRecord($dbCon) {
            $stmt = $dbCon->prepare("DELETE FROM Pet WHERE id = ?");
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $stmt->close();
        }
    }
?>