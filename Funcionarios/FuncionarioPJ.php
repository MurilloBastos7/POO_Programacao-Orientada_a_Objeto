<?php

require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario
{
    private int $horasTrabalhadas;

    public function __construct(string $nome, string $documento, float $valorHora, int $horasTrabalhadas)
    {
        parent::__construct($nome, $documento, $valorHora);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    // Sobrescrita do método calcularPagamento
    public function calcularPagamento(): float
    {
        return $this->valorBase * $this->horasTrabalhadas;
    }
}