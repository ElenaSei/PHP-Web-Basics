<?php
use Shopping\Product;
use Shopping\Person;
include "Product.php";
include "Person.php";

    $input = preg_split('/[=;]/', readline());
    $people = [];

    for($i = 0; $i < count($input) - 1; $i+=2){
        if (empty($input[$i])){
           echo 'Name cannot be empty';
           die();
        }
        if ($input[$i + 1] < 0){
            echo "Money cannot be negative\n";
            die();
        }
        $people[$input[$i]] = new Person($input[$i], $input[$i + 1]);
    }

    $input2 = preg_split('/=|;/', readline());

    $products = [];
    for($i = 0; $i < count($input2) - 1; $i+=2){
        $products[$input2[$i]] = new Product($input2[$i], $input2[$i + 1]);
    }

    while ($input3 = explode(' ', trim(readline()))){
        if ($input3[0] == "END"){
            break;
        }
        $name = $input3[0];
        $product = $input3[1];

        if (isset($people[$name]) && isset($products[$product])){
            $price = $products[$product]->getPrice();
            $money = $people[$name]->getMoney();

            if ($money - $price < 0){
                echo "$name can't afford $product\n";
            }else{
                $people[$name]->setMoney($money - $price);
                $people[$name]->addProduct($product);
                echo "$name bought $product\n";
            }
        }
    }

    foreach ($people as $person){
        if (empty($person->getBagOfProducts())){
            echo $person->getPersonName() . " - Nothing bought\n";
        }else {
            echo $person->getPersonName() . " - " . implode(', ', $person->getBagOfProducts()) . "\n";
        }
    }



