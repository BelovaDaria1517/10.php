<?php

namespace Dasha\Php;

class Group
{
    public string $groupName;
    public array $students;
    
    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
        $this->students = [];
    }
    
    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getGroupAverage(): float
    {
        if (count($this->students) === 0) {
            return 0.0;
        }
        
        $total = 0.0;
        $count = 0;
        
        foreach ($this->students as $student) {
            $average = $student->getAverage();
            if ($average > 0) {
                $total += $average;
                $count++;
            }
        }
        
        return $count > 0 ? round($total / $count, 2) : 0.0;
    }
    
    public function getBestStudent(): Student
    {
  
        $bestStudent = null;
        $bestAverage = -1.0;
        
        foreach ($this->students as $student) {
            $currentAverage = $student->getAverage();
            if ($currentAverage > $bestAverage) {
                $bestAverage = $currentAverage;
                $bestStudent = $student;
            }
        }
        
        return $bestStudent;
    }
}