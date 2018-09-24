<?php
namespace Vehicle;
class Truck extends Vehicle
{
    public function __construct($fuelQuantity, $fuelLitersPerKm)
    {
        parent::__construct($fuelQuantity, $fuelLitersPerKm);
    }

    public function setFuelConsumption($fuelLitersPerKm)
    {
        $this->fuelConsumption = $fuelLitersPerKm + 1.6;
    }

    public function setRefuel($refuel)
    {
        $this->fuelConsumption += $refuel * 0.95;
    }
}