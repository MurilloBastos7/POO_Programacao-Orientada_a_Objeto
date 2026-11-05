<?php

require_once 'Funcionario.php';

class FuncionarioCLT extends Funcionario
{
    private float $beneficios;
    private float $descontos;

    public function __construct(string $nome, string $documento, float $salarioBruto, float $beneficios, float $descontos)
    {
        parent::__construct($nome, $documento, $salarioBruto);
        $this->beneficios = $beneficios;
        $this->descontos = $descontos;
    }

    // Sobrescrita do método calcularPagamento
    public function calcularPagamento(): float
    {
        return $this->valorBase + $this->beneficios - $this->descontos;
    }
}