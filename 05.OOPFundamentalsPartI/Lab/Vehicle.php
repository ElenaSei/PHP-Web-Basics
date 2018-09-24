<?php
    class Vehicle{
        private $numberDoors;
        protected $color;
        public $brand;
        public $model;
        public $year;

        public function __construct($numberDoors, $color, $brand, $model, $year){
            $this->setDoors($numberDoors);
            $this->setColor($color);
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        protected function setDoors($numberDoors){
            if (is_numeric($numberDoors)){
                $this->numberDoors = $numberDoors;
            }
        }

        public function setColor($color){
            if (!is_numeric($color)){
                $this->color = $color;
            }
        }

        public function getDoors(){
            return $this->numberDoors;
        }

        public function getColor(){
            return $this->color;
        }
    }