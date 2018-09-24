<?php
namespace Shopping;
class Person
{
    protected $personName;
    protected $money;
    protected $bagOfProducts;

    public function __construct($personName, $money)
    {
        $this->personName = $personName;
        $this->money = $money;
    }

    public function addProduct($productName){
            $this->bagOfProducts[] = $productName;
    }

    public function setName($personName){
        if (!empty($this->name)){
            $this->personName = $personName;
        }
    }

    public function setMoney($money)
    {
        if ($money >= 0){
            $this->money = $money;
        }
    }

    public function getMoney()
    {
        return $this->money;
    }


    public function getPersonName()
    {
        return $this->personName;
    }


    public function getBagOfProducts()
    {
        return $this->bagOfProducts;
    }
}