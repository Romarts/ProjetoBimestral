<?php
class Pessoa{
    public float $massa;
    public string $altura;
    public string $nome;
    
    public function __construct(string $nome, float $massa, float $altura){
        $this->massa = $massa;
        $this->altura = $altura;
        $this->nome = $nome;
    }
    public function calculaIMC(): float
    {
        return $this->massa / ($this->altura ** 2);
    }

        public function getNome(): string
    {
        return $this->nome;
    }
}

$pessoa = new Pessoa(nome: "João", massa:70, altura:1.75);

echo "O IMCS da pessoa é {$pessoa->nome} é {$pessoa->calcularIMC()}\n";