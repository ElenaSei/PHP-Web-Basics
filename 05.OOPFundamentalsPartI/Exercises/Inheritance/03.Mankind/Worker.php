<?php
class Worker extends Human
{
    protected $salary;
    protected $workHours;

    /**
     * Worker constructor.
     * @param $salary
     * @param $workHours
     * @param $firstName
     * @param $lastName
     * @throws Exception
     */
    public function __construct($firstName, $lastName, $salary, $workHours)
    {
        parent::__construct($firstName, $lastName);
        $this->salary = $salary;
        $this->workHours = $workHours;
    }

    public function setLastName($lastName): void
    {
        if (strlen($lastName) < 3){
            throw new Exception("Expected length more than 3 symbols!Argument: $lastName");
        }
        parent::setLastName($lastName);
    }

    /**
     * @param mixed $salary
     * @throws Exception
     */
    public function setSalary($salary): void
    {
        if ($salary < 9){
            throw new Exception("Expected value mismatch!Argument: $salary");
        }
        $this->salary = $salary;
    }

    /**
     * @param mixed $workHours
     * @throws Exception
     */
    public function setWorkHours($workHours): void
    {
        if ($workHours < 1 || $workHours > 12){
            throw new Exception("Expected value mismatch!Argument: $workHours");
        }
        $this->workHours = $workHours;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return number_format($this->salary, 2, '.', '');
    }

    /**
     * @return mixed
     */
    public function getWorkHours()
    {
        return number_format($this->workHours, 2);
    }

    public function getSalaryPerHour(){
        $salaryPerHour = $this->salary / 7 / $this->workHours;

        return number_format($salaryPerHour, 2);
    }
}