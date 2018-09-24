<?php
include "Human.php";
include "Student.php";
include "Worker.php";

$input = explode(' ', readline());
$sfirstName = $input[0];
$slastName = $input[1];
$facultyNumber = $input[2];

$input2 = explode(' ', readline());
$wfirstName = $input2[0];
$wlastName = $input2[1];
$salary = $input2[2];
$workHours = $input2[3];

try{
    $student = new Student($sfirstName, $slastName, $facultyNumber);
    $worker = new Worker($wfirstName, $wlastName, $salary, $workHours);

    echo "First Name: " . $student->getFirstName() . "\n";
    echo "Last Name: " . $student->getLastName() . "\n";
    echo "Faculty Number: " . $student->getFacultyNumber() . "\n";
    echo "\n";
    echo "First Name: " . $worker->getFirstName() . "\n";
    echo "Last Name: " . $worker->getLastName() . "\n";
    echo "Week Salary: " . $worker->getSalary() . "\n";
    echo "Hours per day: " . $worker->getWorkHours() . "\n";
    echo "Salary per hour: " . $worker->getSalaryPerHour() . "\n";
}
catch (Exception $e){
    echo $e->getMessage();
}