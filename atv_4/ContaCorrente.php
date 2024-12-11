<?php

require_once 'ContaBancaria.php';

class ContaCorrente extends ContaBancaria
{
    private const TAXA_SAQUE = 2.50; 
    private const TARIFA_MENSAL = 15.00; 

    public function sacar(float $valor): void
    {
        $valorComTaxa = $valor + self::TAXA_SAQUE;

        if ($valorComTaxa > $this->saldo) {
            throw new RuntimeException("Saldo insuficiente para realizar o saque com a taxa.");
        }

        parent::sacar($valorComTaxa);
    }

    public function cobrarTarifaMensal(): void
    {
        if (self::TARIFA_MENSAL > $this->saldo) {
            throw new RuntimeException("Saldo insuficiente para cobrar a tarifa mensal.");
        }

        $this->saldo -= self::TARIFA_MENSAL;
    }
}
