<?php

class Pessoa {
    
    private $nome;
    private $idade;
    private $email;

    
    public function __construct($nome, $idade, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getEmail() {
        return $this->email;
    }

    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    
    public function exibirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}


$pessoa = new Pessoa("José Jackson", 18, "juniojackson369@gmail.com");
$pessoa->exibirDados();


$pessoa->setNome("Jackson Lima");
$pessoa->setIdade(19);
$pessoa->exibirDados();

?>
