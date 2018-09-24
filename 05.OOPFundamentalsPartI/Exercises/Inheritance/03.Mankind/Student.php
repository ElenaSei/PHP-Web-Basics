<?php
class Student extends Human
{
    protected $facultyNumber;

    public function __construct($firstName, $lastName, $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    /**
     * @param mixed $facultyNumber
     * @throws Exception
     */
    public function setFacultyNumber($facultyNumber): void
    {
        if (strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10){
            throw new Exception('Invalid faculty number!');
        }
        $this->facultyNumber = $facultyNumber;
    }

    /**
     * @return mixed
     */
    public function getFacultyNumber()
    {
        return $this->facultyNumber;
    }
}