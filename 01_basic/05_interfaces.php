<?php

    /**
     * @interface
     * Shape Interface
     *
     * @author Harsh Girdhar
     * @created 1/3/2019
     */

    interface Shape {
        public function area();
    }


    /**
     * Class Circle
     */
    class Circle implements Shape {

        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function area() {
            return $this->radius * $this->radius * pi();
        }

    }

    /**
     * Class Rectangle
     */
    class Rectangle implements Shape {

        private $width, $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function area() {
            return $this->width * $this->height;
        }

    }

    $circle = new Circle(5);
    $rectangle = new Rectangle(5,5);

    echo "Circle area: " . $circle->area() . "<br>";
    echo "Rectangle area: " . $rectangle->area() . "<br>";