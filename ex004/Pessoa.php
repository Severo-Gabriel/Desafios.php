<?php
class Pessoa {

    private string $nome;
    private float $idade;

    public function falar() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
    public function setarNome (string $nome): void {
        $this->nome = $nome;

    }
    public function pegarNome (): string { 
        return $this->nome;
    }
}
?>