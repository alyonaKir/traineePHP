<?php

class Student
{
    public string $firstName;
    public string $lastName;
    public string $group;
    public float $averageMark;

    public function __construct($firstName, $lastName, $group, $averageMark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }

    public function getScholarship()
    {
        return ($this->averageMark == 5) ? "100 USD" : "80 USD";
    }
}

class Aspirant extends Student
{
    public int $countResWork;

    public function __construct($firstName, $lastName, $group, $averageMark, $countResWork)
    {
        parent::__construct($firstName, $lastName, $group, $averageMark);
        $this->countResWork = $countResWork;
    }

    public function getScholarship()
    {
        return ($this->averageMark == 5) ? "200 USD" : "180 USD";
    }
}

$gr = array(
    new Student("Egot", "Petrov", "123", 5),
    new Student("Ivan", "Egotov", "123", 3),
    new Aspirant("Egor", "Samatov", "123", 5, 2),
    new Aspirant("Andrei", "Evtuch", "123", 3, 6)
);
for ($i = 0; $i < count($gr); $i++) {
    echo $gr[$i]->getScholarship() . "</br>";
}
?>