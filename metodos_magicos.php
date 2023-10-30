<?php
// clone
// construct
// invoke
// tostring
// get
// set

class People
{
    private $dados = array();

    public function __set($name, $value)
    {
        $this->dados[$name] = $value;
    }

    public function __get($name)
    {
        return $this->dados[$name];
    }

    public function __tostring()
    {
        return "Tentei imprimir o objeto <br>";
    }

    public function __invoke()
    {
        return "Objeto como função <br>";
    }
}

$people = new People();
$people->name = 'João';
$people->age = 18;
$people->height = 1.80;

echo $people;

echo $people();
