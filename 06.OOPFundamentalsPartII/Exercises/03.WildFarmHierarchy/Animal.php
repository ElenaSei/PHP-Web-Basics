<?php
abstract class Animal
{
    protected $animalName;
    protected $animalType;
    protected $animalWeight;
    protected $foodEaten = 0;

    public function __construct($animalType, $animalName, $animalWeight)
    {
        $this->animalType = $animalType;
        $this->animalName = $animalName;
        $this->animalWeight = $animalWeight;
    }

    protected function setFoodEaten($foodEaten): void
    {
        $this->foodEaten = $foodEaten;
    }

    abstract function makeSound();

    abstract function eatFood(Food $food);
}