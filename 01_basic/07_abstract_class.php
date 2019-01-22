<?php

    abstract class Products {

        protected $name;
        protected $type;

        public function __construct($name, $type) {
            $this->name = $name;
            $this->type = $type;
        }

        public function getName() {
            return $this->name;
        }

        public function getType() {
            return $this->type;
        }

        abstract public function getNameType();

    }


    class Product extends Products {

        public function getNameType() {
            return "Product Name: " . $this->getName() . ", Product Type: " . $this->getType() . "<br>";
        }

    }


    $product = new Product("Taj Mahal", "Glass");
    echo $product->getNameType();