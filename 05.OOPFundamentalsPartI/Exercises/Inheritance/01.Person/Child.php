<?php
class Child extends Person
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }

    public function setAge($age): void
    {
        if ($age > 15){
            throw new Exception('Child’s age must be less than 16!');
        }
        $this->age = $age;
    }
}