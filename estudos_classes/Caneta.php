<?php 
class Caneta {
    private string $modelo;
    private string $cor;
    private float $ponta;
    private bool $estaTampada;

    
    public function tampar (): void {
        $this->estaTampada = true;
    }

    public function destampar (): void {
        $this->estaTampada = false;
    }
     public function setarModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function pegarModelo(): string
    {
        return $this->modelo;
    }

   
    public function setarCor(string $cor): void
    {
        $this->cor = $cor;
    }
    public function pegarCor(): string
    {
        return $this->cor;
    }

    public function setarPonta(float $ponta): void
    {
        $this->ponta = $ponta;
    }
    public function pegarPonta(): float
    {
        return $this->ponta;
    }
}
?>