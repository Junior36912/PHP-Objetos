<?php

class BancoNovo
{
    private float $saldo;

    public function __construct(
        private readonly string $usuario,
        private readonly int $numeroConta
    ) {
        $this->saldo = 0.0;
    }

    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
        } else {
            throw new InvalidArgumentException("O valor do depósito deve ser maior que zero.");
        }
    }

    public function sacar(float $valorSaque): void
    {
        if ($valorSaque <= 0) {
            throw new InvalidArgumentException("O valor do saque deve ser maior que zero.");
        }

        if ($valorSaque > $this->saldo) {
            throw new RuntimeException("Saldo insuficiente para realizar o saque.");
        }

        $this->saldo -= $valorSaque;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getUsuario(): string
    {
        return $this->usuario;
    }

    public function getNumeroConta(): int
    {
        return $this->numeroConta;
    }
}

// Criando uma instância do objeto BancoNovo
$banco = new BancoNovo(
    usuario: "Junior",
    numeroConta: 123
);

// Operações com a conta
$banco->depositar(100.00);
$banco->sacar(50.00);

echo "Usuário: {$banco->getUsuario()}\n";
echo "Número da Conta: {$banco->getNumeroConta()}\n";
echo "Saldo: {$banco->getSaldo()}\n";
