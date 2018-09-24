<?php
namespace Vehicle;

abstract class Vehicle{
    protected $fuelQuantity;
    protected $fuelConsumption;
    protected $drivingDistance;

    public function __construct($fuelQuantity, $fuelLitersPerKm)
    {
        $this->fuelQuantity = $fuelQuantity;
        $this->setFuelConsumption($fuelLitersPerKm);
    }

    abstract public function setFuelConsumption($fuelConsumption);

    public function setDrivingDistance($drivingDistance, $vehicle){
        if ($drivingDistance * $this->fuelConsumption < $this->fuelQuantity) {
            echo "$vehicle travelled " . $drivingDistance . 'km' . PHP_EOL;
            $this->fuelQuantity -= $drivingDistance * $this->fuelConsumption;
            $this->drivingDistance += $drivingDistance;
        } else {
            echo "$vehicle needs refueling" . PHP_EOL;
        }
    }

    abstract public function setRefuel($refuel);

    public function getFuelQuantity(){
        return number_format($this->fuelQuantity, 2);
    }
}