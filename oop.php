<?php

//class Pessoa {
//    public $nome;
//    public $idade;
//
//    public function Falar(): void{
//        echo "$this->nome tem $this->idade anos";
//    }
//}
//
//$leandro = new Pessoa();
//$leandro->nome = "Leandro";
//$leandro->idade = "19";
//$leandro->Falar();
//
//echo "<hr>";

class Login {
    private $email;
    private $password;

    private $name;

    public function __construct($email, $password, $name) {
        $this->name = $name;
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $emailLimpo = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $emailLimpo;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->password == "123456"){
            echo "Logado com sucesso";
        }
        else {
            echo "Dados Invalidos";
        }
    }
}

$logar = new Login("teste@teste.com", "123456", "Leandro");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getName();