<?php

use Dasha\Php\Group;
use Dasha\Php\Student;

function printStudentInfo(Student $student): void
{
    echo "Фамилия студента: $student->lastName" . PHP_EOL;
    echo "Имя студента: $student->firstName" . PHP_EOL;
    echo "Средний балл студента:";
    echo $student->getAverage() . PHP_EOL;
}

function printGroupInfo(Group $group): void
{
    echo "Название группы: $group->groupName" . PHP_EOL;
    echo "Количество студентов:" . count($group->students) . PHP_EOL;
    echo "Общий средний балл:";
    echo $group->getGroupAverage() . PHP_EOL;
}