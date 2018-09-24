<?php
    class Bicycle extends Vehicle
    {
        public $forSkirt;
        private $mode;

        public function __construct($numberDoors = 0, $color, $brand, $model, $year, $forSkirt)
        {
            parent::__construct($numberDoors, $color, $brand, $model, $year);
            $this->forSkirt = $forSkirt;
            $this->setDoors($numberDoors);

        }

        public function __toString()
        {
            // TODO html table
            return $this->brand . ' '. $this->model . ' '. $this->year . ' ' . $this->color . ' ' . $this->mode;

        }

        public function Ride(){
            return $this->mode = "Riding mode on\n";
        }

        public function Stop(){
            return $this->mode = "Riding mode off\n";
        }

        public function setDoors($numberDoors)
        {
            if ($numberDoors != 0){
                parent::setDoors(0);
            }
        }
    }