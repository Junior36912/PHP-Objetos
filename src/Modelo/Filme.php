<?php

class Filme
{
    private array $notas;

    public function __construct(
        private readonly string $nome,
        private readonly int $anoLancamento,
        private readonly Genero $genero
    ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float {
        if (count($this->notas) === 0) {
            return 0;
        }
        return array_sum($this->notas) / count($this->notas);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function getGenero(): Genero
    {
        return $this->genero;
    }
}
