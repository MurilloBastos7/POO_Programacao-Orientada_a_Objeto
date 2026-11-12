<?php

require_once 'FuncionarioInterface.php';

class FuncionarioCLT implements FuncionarioInterface
{
    private string $nome;
    private string $ctps;

    public function __construct(string $nome, string $ctps)
    {
        $this->nome = $nome;
        $this->ctps = $ctps;
    }

    public function contratar(): string
    {
        return "Funcionário CLT: {$this->nome} (CTPS: {$this->ctps}).Contratado com registro em carteira e benefícios.";
    }

    public function demitir(): string
    {
        return "Funcionário CLT: {$this->nome}.Desligado com cálculo de aviso prévio, FGTS e rescisão.";
    }
}
?>