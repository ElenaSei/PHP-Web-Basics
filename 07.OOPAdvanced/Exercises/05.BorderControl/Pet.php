<?php
namespace BorderControl;

class Pet implements iControl
{
    protected $birthday;

    public function __construct($birthday)
    {
        $this->setBirthday($birthday);
    }

    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function checkBday($date)
    {
        $bdate = explode('/', $this->birthday);
        if ($bdate[2] == $date){
            echo $this->birthday;
        }
    }

    public function checkId($num)
    {
        // TODO: Implement checkId() method.
    }
}