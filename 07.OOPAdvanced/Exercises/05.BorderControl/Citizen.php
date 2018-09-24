<?php
namespace BorderControl;
class Citizen implements iControl, iBuyer
{
    protected $id;
    protected $birthday;
    protected $name;
    protected $food = 0;

    public function __construct($id, $birthday, $name)
    {
        $this->setId($id);
        $this->setBirthday($birthday);
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

    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function checkId($num)
    {
        if (substr($this->id, -3) == $num) {
            echo $this->id . PHP_EOL;
        }
    }

    public function checkBday($date)
    {
        $bdate = explode('/', $this->birthday);
        if ($bdate[2] == $date){
            echo $this->birthday;
        }
    }

    public function buyFood()
    {
        $this->food += 10;
    }

    public function getFood(): int
    {
        return $this->food;
    }
}