<?php
abstract class Father
{
    protected $yearBirth;
    protected $yearDead;
    protected $name;

    public function __construct($yearBirth, $yearDead, $name)
    {
        $this->setYearBirth($yearBirth);
        $this->setYearDead($yearDead);
        $this->setName($name);
    }

    /**
     * @return mixed
     */
    public function getYearBirth()
    {
        return $this->yearBirth;
    }

    /**
     * @param mixed $yearBirth
     */
    public function setYearBirth($yearBirth): void
    {
        $this->yearBirth = $yearBirth;
    }

    /**
     * @return mixed
     */
    public function getYearDead()
    {
        return $this->yearDead;
    }

    /**
     * @param mixed $yearDead
     */
    public function setYearDead($yearDead): void
    {
        $this->yearDead = $yearDead;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        if (strlen($name) >= 3) {
            $this->name = $name;
        }
    }


    public function getTimeLived($num){
        $result = $this->getGenerationNum() . '. '
            . $this->getName() . 'lived from '
            . $this->getYearBirth() . ' to ';
        if ($this->getGenerationNum() == 1){
            $result .= $this->getYearDead() . ". He had {$num} sons:\n";
        }else{
            $result .= $this->getYearDead() . ".\n";
        }

        return $result;
    }

    public function getGenerationNum(){
        return 1;
    }
}