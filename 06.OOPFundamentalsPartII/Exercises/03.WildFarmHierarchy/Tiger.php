<?php
class Tiger extends Felime
{
    public function makeSound()
    {
        echo "ROAAR!!!\n";
    }

    public function eatFood(Food $food)
    {
        if ($food->getFoodType() != "Meat"){
            echo $this->animalType . " are not eating that type of food!\n";
        }elseif ($food->getFoodType() == "Meat"){
            $this->setFoodEaten($food->getQuantity());
        }
    }
}