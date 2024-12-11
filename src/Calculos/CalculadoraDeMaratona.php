<?php

class CalculadoraDeMaratona
{
    private int $duracaoMaratona = 0; // Corrigido o nome da propriedade

    public function inclui(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos(); // Usa o nome correto da propriedade
    }

    public function duracao(): int
    {
        return $this->duracaoMaratona; // Usa o nome correto da propriedade
    }
}
