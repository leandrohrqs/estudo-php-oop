<?php

class Pessoa {
    const name = "Leandro";

    public function exibirNome(){
        echo self::name;
    }
}

class Leandro extends Pessoa{
    const name = "Henriques";

    public function exibirNome(){
        echo parent::name;
    }
}

$leandro = new Leandro();
$leandro->exibirNome();