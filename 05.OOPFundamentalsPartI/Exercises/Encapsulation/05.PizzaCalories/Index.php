<?php
include "Pizza.php";
include "Topping.php";
include "Dough.php";

$input = explode(' ', readline());

$pizzaName = $input[0];
$pizzaType = $input[1];
$numOfToppings = intval($input[2]);

if ($numOfToppings < 0 || $numOfToppings > 10){
    echo "Number of toppings should be in range [0..10].";
    return;
}

$input = explode(' ', readline());

try{
    $dough = new Dough($input[1], $input[2], $input[3]);
}
catch (Exception $exception){
    echo $exception->getMessage() . "\n";
    return;
}
$allToppings = [];
for ($i = 0; $i < $numOfToppings; $i++){
    $input = explode(' ', readline());

    try{
        $topping = new Topping($input[1], $input[2]);
        $allToppings[] = $topping->getToppingCalories();
    }
    catch (Exception $exception){
        echo $exception->getMessage() . "\n";
        return;
    }
}

try{
    $pizza = new Pizza($pizzaType, $dough->getCalories(), $allToppings);
    echo $pizza->getType() . ' - ' . $pizza->getTotalCalories() . ' Calories.';
}
catch (Exception $exception){
    echo $exception->getMessage();
    return;
}


