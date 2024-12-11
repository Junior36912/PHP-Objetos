<?php

class ContaBancaria
{
    protected float $saldo;

    public function __construct(
        protected string $titular,
        protected int $numeroConta
    ) {
        $this->saldo = 0.0;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("O valor do depósito deve ser maior que zero.");
        }
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("O valor do saque deve ser maior que zero.");
        }

        if ($valor > $this->saldo) {
            throw new RuntimeException("Saldo insuficiente para realizar o saque.");
        }

        $this->saldo -= $valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function getNumeroConta(): int
    {
        return $this->numeroConta;
    }
}
