<?php
class Person{
    protected $name;
    protected $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     * @throws Exception
     */
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param mixed $age
     * @throws Exception
     */
    public function setAge($age): void
    {
        if ($age < 1){
            throw new Exception('Age must be positive!');
        }
        $this->age = $age;
    }

    /**
     * @param mixed $name
     * @throws Exception
     */
    public function setName($name): void
    {
        if (strlen($name)){
            throw new Exception('Name’s length should not be less than 3 symbols!');
        }
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}