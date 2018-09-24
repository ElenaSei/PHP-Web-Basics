<?php
class Zebra extends Mammal
{
    public function makeSound()
    {
        echo "Zs\n";
    }

    public function eatFood(Food $food)
    {
        if ($food->getFoodType() != "Vegetable"){
            echo $this->animalType . " are not eating that type of food!\n";
        }else{
            $this->setFoodEaten($food->getQuantity());
        }
    }
}