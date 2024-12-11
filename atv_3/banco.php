<?php

// 1) Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. 
// Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;

enum TipoConta
{
    case Corrente;
    case Investimento;
    case Poupanca;
    case Universitaria;

    public function possuiTaxa(): bool
    {
        return match ($this) {
            self::Corrente, self::Investimento => true,
            self::Poupanca, self::Universitaria => false,
        };
    }
}

class BancoJu
{
    public function __construct(
        public string $usuario,
        public int $numeroConta,
        public float $saldoConta,
        public TipoConta $tipoConta
    ) {}

    public function possuiTaxa(): bool
    {
        return $this->tipoConta->possuiTaxa();
    }
}

$banco = new BancoJu(
    usuario: "Junior",
    numeroConta: 123,
    saldoConta: 100.00,
    tipoConta: TipoConta::Corrente
);


echo "Usuário: {$banco->usuario}\n";
echo "Número da Conta: {$banco->numeroConta}\n";
echo "Saldo: {$banco->saldoConta}\n";
echo "Tipo de Conta: {$banco->tipoConta->name}\n";
echo "Possui Taxa? " . ($banco->possuiTaxa()) . "\n";
