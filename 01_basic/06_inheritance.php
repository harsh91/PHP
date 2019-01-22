<?php

    class Human {

        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

    }

    class Person extends Human {

        public function getName() {
            return $this->name;
        }

    }


    $person = new Person("Harsh Girdhar");
    echo "Hello " . $person->getName() . "!!<br/>";


// Second example!!


    class Pet {

        protected $type;

        public function __construct($type) {
            $this->type = $type;
        }

    }

    class Dog extends Pet {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

    }


    $dog = new Dog("Tommy");
    echo "Hello " . $dog->getName() . "!!<br/>";
