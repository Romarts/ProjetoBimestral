<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class ContaBancaria
{
    // ✅ Propriedades privadas
    private string $titular;
    private string $numero;
    private float $saldo;
    private float $limiteEspecial;

    // ✅ Método construtor
    public function __construct(string $titular, string $numero, float $limiteEspecial = 0.0)
    {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = 0.0;
        $this->limiteEspecial = $limiteEspecial;
    }

    // ✅ Método para depositar
    public function depositar(float $valor): void
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    // ✅ Método para sacar
    public function sacar(float $valor): bool
    {
        $totalDisponivel = $this->saldo + $this->limiteEspecial;

        if ($valor > 0 && $valor <= $totalDisponivel) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    // ✅ Método para consultar saldo
    public function consultarSaldo(): string
    {
        return "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.');
    }

    // ✅ Método para consultar limite disponível
    public function consultarLimiteDisponivel(): string
    {
        $limiteDisponivel = $this->saldo < 0 ? $this->limiteEspecial + $this->saldo : $this->limiteEspecial;
        return "Limite disponível: R$ " . number_format($limiteDisponivel, 2, ',', '.');
    }
}

// Exemplo de uso da classe
$conta = new ContaBancaria("Gabriel", "123456", 500.00);

$conta->depositar(200.00);
echo $conta->consultarSaldo(); // Deve exibir: Saldo atual: R$ 200,00
er
?>