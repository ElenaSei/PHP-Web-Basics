<?php
abstract class Mammal extends Animal
{
    protected $livingRegion;


    public function __construct($animalType, $animalName, $animalWeight, $livingRegion)
    {
        parent::__construct($animalType, $animalName, $animalWeight);
        $this->setLivingRegion($livingRegion);
    }

    public function setLivingRegion($livingRegion): void
    {
        $this->livingRegion = $livingRegion;
    }

    public function __toString()
    {
        return $this->animalType. '['
            . $this->animalName . ', '
            . $this->animalWeight . ', '
            . $this->livingRegion . ', '
            . $this->foodEaten . ']' . PHP_EOL;
    }
}