<?php
class Topping{
    protected $type;
    protected $weight;
    protected $toppingCalories = 2;

    /**
     * Topping constructor.
     * @param $type
     * @param $weight
     * @throws Exception
     */
    public function __construct($type, $weight)
    {
        $this->setType($type);
        $this->setWeight($weight, $type);
        $this->setToppingCalories();
    }

    /**
     * @param mixed $type
     * @throws Exception
     */
    public function setType($type)
    {
        if (strtolower($type) == "meat"){
            $this->type = 1.2;
        }elseif (strtolower($type) == "veggies"){
            $this->type = 0.8;
        }elseif (strtolower($type) == "cheese"){
            $this->type = 1.1;
        }elseif (strtolower($type) == "sauce"){
            $this->type = 0.9;
        }else {
            throw new \Exception("Cannot place {$type} on top of your pizza.");
        }
    }

    /**
     * @param mixed $weight
     * @param $type
     * @throws Exception
     */
    public function setWeight($weight, $type)
    {
        if ($weight > 1 && $weight <= 50) {
            $this->weight = $weight;
        } else {
            throw  new \Exception("{$type} weight should be in the range [1..50].");
        }
    }

    public function setToppingCalories()
    {
        $this->toppingCalories *= $this->type;
        $this->toppingCalories *= $this->weight;
    }

    /**
     * @return int
     */
    public function getToppingCalories()
    {
        return number_format($this->toppingCalories, 2);
    }

}