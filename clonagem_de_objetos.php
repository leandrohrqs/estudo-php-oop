<?php

class People
{
    public $age;

    public function __clone()
    {
        echo "Clonando objeto";
    }
}

$people = new People();
$people->age = 25;

$people2 = clone $people;
$people2->age = 35;

echo $people->age;
echo "<br>";
echo $people2->age;
