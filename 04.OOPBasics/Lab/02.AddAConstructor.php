<?php
    class Car{
        public $brand;
        public $model;
        public $year;

        function __construct($brand, $model)
        {
            $this->brand = $brand;
            $this->model = $model;
        }
    }