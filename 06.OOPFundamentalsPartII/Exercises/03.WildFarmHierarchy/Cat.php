<?php
class Cat extends Felime
{
    protected $breed;

    public function __construct($animalType, $animalName, $animalWeight, $livingRegion, $breed)
    {
        parent::__construct($animalType, $animalName, $animalWeight, $livingRegion);
        $this->setBreed($breed);
    }

    public function setBreed($breed): void
    {
        $this->breed = $breed;
    }
    public function makeSound()
    {
        echo "Meowwww\n";
    }

    public function eatFood(Food $food)
    {
        $this->setFoodEaten($food->getQuantity());
    }

    public function __toString()
    {
        return $this->animalType. '['
            . $this->animalName . ', '
            . $this->breed . ', '
            . $this->animalWeight . ', '
            . $this->livingRegion . ', '
            . $this->foodEaten . ']' . PHP_EOL;
    }
}