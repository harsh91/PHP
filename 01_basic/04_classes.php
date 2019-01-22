<?php

    /**
     * @Class
     * Defining the class
     *
     * @author Harsh Girdhar
     * @created 1/3/2019
     */

    class Animal {

        private $age;
        public $name;
        protected $gender;


        function setAge($age) {
            $this->age = $age;
        }

        function getAge() {
            return $this->age;
        }

        function setName($name) {
            $this->name = $name;
        }

        function getName() {
            return $this->name;
        }

        function setGender($gender) {
            $this->gender = $gender;
        }

        function getGender() {
            return $this->gender;
        }

        function displayPropertiesOfAnimal() {
            echo "<pre>";
            print_r($this);
            echo "</pre>";
        }
    }

    $animal = new Animal();
    $animal->setAge(10);
    $animal->setName("Tommy");
    $animal->setGender("M");

    $animal->displayPropertiesOfAnimal();