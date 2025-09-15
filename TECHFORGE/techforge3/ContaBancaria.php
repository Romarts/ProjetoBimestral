<?php

class ContaBancaria
{
    private float $saldo;
    public function deposito(float $valor): void
    {
        $this->saldo = $valor;
    }

    public function saque(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function __construct(
        float $limiteEspecial,
        float $saldo = 0,
        string $titular,
        string $numero

    )
}