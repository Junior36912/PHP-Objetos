<?php

require_once 'ContaCorrente.php';

$contaCorrente = new ContaCorrente(titular: "Junior", numeroConta: 1234);

$contaCorrente->depositar(100.00);
echo "Saldo após depósito: {$contaCorrente->consultarSaldo()}\n";

$contaCorrente->sacar(20.00);
echo "Saldo após saque (com taxa): {$contaCorrente->consultarSaldo()}\n";

$contaCorrente->cobrarTarifaMensal();
echo "Saldo após cobrança da tarifa mensal: {$contaCorrente->consultarSaldo()}\n";