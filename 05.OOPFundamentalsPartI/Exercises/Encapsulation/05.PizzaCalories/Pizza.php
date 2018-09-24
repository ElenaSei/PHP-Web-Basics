<?php
class Pizza
{
    protected $type;
    protected $doughCal;
    protected $allToppingsCal;
    protected $totalCalories;

    /**
     * Pizza constructor.
     * @param $type
     * @param $doughCal
     * @param $allToppingCal
     * @throws Exception
     */
    public function __construct($type, $doughCal, array $allToppingCal)
    {
        $this->setType($type);
        $this->setDoughCal($doughCal);
        $this->setAllToppingCal($allToppingCal);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @throws Exception
     */
    public function setType($type): void
    {
        if (strlen($type) < 1 || strlen($type) > 15){
            throw new Exception('Pizza name should be between 1 and 15 symbols.');
        }else{
            $this->type = $type;
        }
    }

    /**
     * @return mixed
     */
    public function getDoughCal()
    {
        return $this->doughCal;
    }

    /**
     * @param mixed $doughCal
     */
    public function setDoughCal($doughCal): void
    {
        $this->doughCal = $doughCal;
    }

    /**
     * @return mixed
     */
    public function getAllToppingsCal()
    {
        return $this->allToppingsCal;
    }

    /**
     * @param mixed $allToppingCal
     */
    public function setAllToppingCal($allToppingCal): void
    {
        for ($i = 0; $i < count($allToppingCal); $i++){
            $this->allToppingsCal += $allToppingCal[$i];
        }
    }

    /**
     * @return mixed
     */
    public function getTotalCalories()
    {
        return number_format($this->totalCalories = $this->doughCal + $this->allToppingsCal, 2, '.', '');
    }

}