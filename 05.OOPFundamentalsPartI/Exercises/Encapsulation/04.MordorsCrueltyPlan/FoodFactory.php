<?php
class FoodFactory
{
    private $points;

    public function __construct($food)
    {
        $this->setPoints($food);
    }

    public function setPoints($food){
       if ($food == "cram"){
           $this->points = 2;
       }elseif ($food == "lembas"){
           $this->points = 3;
       }elseif ($food == "apple"){
           $this->points = 1;
       }elseif ($food == "melon"){
           $this->points = 1;
       }elseif ($food == "honeycake"){
           $this->points = 5;
       }elseif ($food == "mushrooms"){
           $this->points = -10;
       }else{
           $this->points = -1;
       }
    }

    public function getPoints()
    {
        return $this->points;
    }

}