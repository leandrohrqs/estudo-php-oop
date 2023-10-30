<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract  protected function Sacar($valor);
    abstract  protected function Depositar($valor);


    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

}

class Itau extends Banco {
    public function Sacar($valor){
        $this->saldo -= $valor;
        echo "<br>Sacou: ".$valor;
    }

    public function Depositar($valor){
        $this->saldo += $valor;
        echo "<br>Depositou: ".$valor;
    }

}

Class Bradesco extends Banco {

    public function Sacar($valor){
        $this->saldo -= $valor;
    }

    public function Depositar($valor){
        $this->saldo += $valor;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(100);
$itau->Depositar(100);