<?php
namespace BorderControl;

class Rebel implements iBuyer
{
    protected $name;
    protected $age;
    protected $group;
    protected $food = 0;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function buyFood()
    {
        $this->food += 5;
    }

    public function getFood(): int
    {
        return $this->food;
    }
}