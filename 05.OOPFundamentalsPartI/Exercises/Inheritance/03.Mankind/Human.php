<?php
class Human
{
    protected $firstName;
    protected $lastName;

    /**
     * Human constructor.
     * @param $firstName
     * @param $lastName
     * @throws Exception
     */
    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @throws Exception
     */
    public function setFirstName($firstName): void
    {
        if (!ctype_upper($firstName[0])){
            throw new Exception("Expected upper case letter!Argument: $firstName");
        }
        if (strlen($firstName) < 4){
            throw new Exception("Expected length at least 4 symbols!Argument: $firstName");
        }
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @throws Exception
     */
    public function setLastName($lastName): void
    {
        if (!ctype_upper($lastName[0])){
            throw new Exception("Expected upper case letter!Argument: $lastName");
        }
        if (strlen($lastName) < 4){
            throw new Exception("Expected length at least 3 symbols!Argument: $lastName");
        }
        $this->lastName = $lastName;
    }


}