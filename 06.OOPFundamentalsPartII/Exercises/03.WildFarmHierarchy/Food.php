<?php
abstract class Food
{
    protected $quantity;
    protected $foodType;

    public function __construct($quantity)
    {
        $this->setQuantity($quantity);
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getFoodType(){
        return $this->foodType;
    }
}