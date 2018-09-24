<?php
    class Car{
        public $brand;
        public $model;
        private $year;

        function __construct($brand, $model, $year)
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->setYear($year);
        }

        function setYear($year){
            if (is_numeric($year)){
                $this->year = $year;
            }
        }

        function getModel(){
            return $this->model;
        }

        function getBrand(){
            return $this->brand;
        }

        function getYear(){
            return $this->year;
        }
    }

    for ($i = 0; $i < 4; $i++){
        $input = explode(' ', readline());

        $cars[] = new Car($input[0], $input[1], $input[2]);
    }

    asort($cars);

    //Cannot print correctly :/