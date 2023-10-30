<?php
// Uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruída, a outra classe também será.

class People
{
    public function getName($name)
    {
        return "O nome da pessoa é " . $name . "<br>";
    }
}

class Display
{
    public $people;
    public $name;

    function __construct($name)
    {
        $this->people = new People();
        $this->name = $name;
    }

    public function displayName()
    {
        echo $this->people->getName($this->name);
    }
}

$display = new Display("Leandro");
$display->displayName();