<?php
/*
 * Herança é um recurso que permite que classes compartilher atributos e metodos.
 */

class Veiculo {
    public $modelo;
    public $cor;
    protected $ano;

    public function Acelerar() {
        echo "Acelerando";
    }

    public function Parar() {
        echo "Parando";
    }
}
class Carro extends Veiculo {
    public function ligarArCondicionado() {
        echo "Ligando ar condicionado";
    }
    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Dando grau";
    }
}

//$carro = new Carro();
//$carro->modelo = "Fiat";
//$carro->cor = "Azul";
//$carro->ano = "2020";
//$carro->ligarArCondicionado();

//$mo = new Moto();
//$mo->modelo = "Yamaha";
//$mo->cor = "Preto";
//$mo->ano = "2019";
//echo "<br>";
//$mo->darGrau();

$carro = new Carro();
$carro->modelo = "Fiat";
$carro->cor = "Azul";
$carro->setAno(2020);

echo $carro->getAno();

