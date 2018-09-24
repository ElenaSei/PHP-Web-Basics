<?php
class Mouse extends Mammal
{
    public function makeSound()
    {
        echo "SQUEEEAAAK!\n";
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