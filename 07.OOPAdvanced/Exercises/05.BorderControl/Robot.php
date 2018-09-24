<?php
namespace BorderControl;
class Robot implements iControl
{
    protected $id;

    public function __construct($id)
    {
        $this->setId($id);
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
        // TODO: Implement checkBday() method.
    }
}