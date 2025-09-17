<?php

namespace Dasha\Php;

class Student
{
    public string $firstName;
    public string $lastName;
    public array $grades;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->grades = [];
    }
 
    public function addGrade(int $grade): bool
    {
        if ($grade >= 1 && $grade <= 5) {
            $this->grades[] = $grade;
            return true;
        }
        return false;
    }

    public function getAverage(): float
    {
        if (count($this->grades) === 0) {
            return 0.0;
        }
        return round(array_sum($this->grades) / count($this->grades), 1);
    }
}