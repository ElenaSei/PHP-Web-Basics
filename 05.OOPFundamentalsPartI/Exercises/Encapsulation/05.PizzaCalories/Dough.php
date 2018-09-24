<?php
class Dough
{

    protected $calories = 2;

    /**
     * Dough constructor.
     * @param $flourType
     * @param $bakingTechnique
     * @param $doughWeight
     * @throws Exception
     */

    public function __construct($flourType, $bakingTechnique, $doughWeight)
    {
        $this->setCalories($flourType, $bakingTechnique, $doughWeight);
    }

    /**
     * @param $flourType
     * @param $bakingTechnique
     * @param $doughWeight
     * @throws Exception
     */

    public function setCalories($flourType, $bakingTechnique, $doughWeight)
    {
        if (strtolower($flourType) == "white"){
            $this->calories *= 1.5;
        }elseif (strtolower($flourType) == "wholegrain"){
            $this->calories *= 1;
        }else{
            throw new \Exception("Invalid type of dough.");
        }
        if (strtolower($bakingTechnique) == "crispy"){
            $this->calories *= 0.9;
        }elseif (strtolower($bakingTechnique) == "chewy"){
            $this->calories *= 1.1;
        }elseif (strtolower($bakingTechnique) == "homemade"){
            $this->calories *= 1;
        }
        if ($doughWeight < 1 || $doughWeight > 200){
            throw new \Exception("Dough weight should be in the range [1..200].");
        }
        $this->calories *= $doughWeight;
    }

    public function getCalories(){
        return number_format($this->calories, 2);
    }

}