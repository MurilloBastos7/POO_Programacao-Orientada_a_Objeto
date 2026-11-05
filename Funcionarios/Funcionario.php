<?php

class Funcionario
{
    protected string $nome;
    protected string $documento;
    protected float $valorBase;

    public function __construct(string $nome, string $documento, float $valorBase)
    {
        $this->nome = $nome;
        $this->documento = $documento;
        $this->valorBase = $valorBase;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDocumento(): string
    {
        return $this->documento;
    }

    public function getValorBase(): float
    {
        return $this->valorBase;
    }

    public function calcularPagamento(): float
    {
        return $this->valorBase;
    }
}