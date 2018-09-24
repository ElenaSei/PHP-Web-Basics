<?php
    class Car extends Vehicle
    {
        public function __construct($numberDoors, $color, $brand, $model, $year)
        {
            parent::__construct($numberDoors, $color, $brand, $model, $year);
        }

        public function paint($paint_color){
            $this->color = $paint_color;
        }
    }