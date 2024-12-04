<?php

class Filme {
    private string $nome = 'Nome padrão';
    private int $anoLancamento = 2023;
    private string $genero = 'ação';
    private array $notas = [];


    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    
    public function GetNome() {
        return $this->nome;
    }

    public function SetNome($nomeNovo) {
        $this->nome = $nomeNovo;
    }

    public function GetAnoLancamento(): int {
        return $this->anoLancamento;
    }

    public function SetAnoLancamento(int $anoLancamentoNovo) {
        $this->anoLancamento = $anoLancamentoNovo;
    }

    public function GetGenero() {
        return $this->genero;
    }

    public function SetGenero($generoNovo) {
        $this->genero = $generoNovo;
    }
}

