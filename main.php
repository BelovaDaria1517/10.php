<?php

use Dasha\Php\Group;
use Dasha\Php\Student;

require 'vendor/autoload.php';
require_once 'src/function.php';

$student1 = new Student("Даша", "Иванова");
$student2 = new Student("Аня", "Петухова");
$student3 = new Student("Денис", "Погодин");

$student1->addGrade(3);
$student1->addGrade(2);
$student1->addGrade(5);

$student2->addGrade(5);
$student2->addGrade(5);
$student2->addGrade(5);

$student3->addGrade(4);
$student3->addGrade(4);
$student3->addGrade(3);

$group = new Group("п-31");

$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);

echo "инф. о студентах:\n";
printStudentInfo($student1);
printStudentInfo($student2);
printStudentInfo($student3);

echo "инф. о группе:\n";
printGroupInfo($group);

$bestStudent = $group->getBestStudent();
if ($bestStudent) {
    $average = number_format($bestStudent->getAverage(), 2);
    echo "лучший студент:\n";
    echo "{$bestStudent->firstName} {$bestStudent->lastName} ";
    echo "(ср. балл: {$average})\n";
}

$testStudent = new Student("тест", "студент");
$testStudent->addGrade(6); 
$testStudent->addGrade(0);   
$testStudent->addGrade(5);   
$testStudent->addGrade(4);   

echo "оценки после добавления неподходящих: ";
echo implode(', ', $testStudent->grades) . "\n";
echo "ср. балл: " . number_format($testStudent->getAverage(), 2) . "\n";