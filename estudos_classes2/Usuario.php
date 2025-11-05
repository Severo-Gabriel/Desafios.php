<?php 
//Classe (Sempre com letra maíuscula);
class Usuario {

    //componentes internos - 
    //Atributos:
    private string $nome = "";
    private string $email = "";
    private bool $ativo = true;

    //metódos: 

    // modificadores de acesso: Private(-), Public(-) e protect(#)

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getNome (): string {
        return $this->nome;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function getEmail (): string {
        return $this->email;
    }
    
}

?>