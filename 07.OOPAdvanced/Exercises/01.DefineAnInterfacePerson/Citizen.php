<?php
class Citizen implements Person, Identifiable, Birthable
{
    protected $name;
    protected $age;
    protected $id;
    protected $birthDate;

    public function __construct($name, $age, $id, $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthDate($birthDate);
    }

    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->name . ', '
            . $this->age . ', Id = '
            . $this->id . ', '
            . $this->birthDate;
    }
}