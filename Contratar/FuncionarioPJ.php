<?php

require_once 'FuncionarioInterface.php';

class FuncionarioPJ implements FuncionarioInterface
{
    private string $nome;
    private string $cnpj;

    public function __construct(string $nome, string $cnpj)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function contratar(): string
    {
        return "Prestador PJ: {$this->nome} (CNPJ: {$this->cnpj}).Contratado mediante contrato de prestação de serviços.";
    }

    public function demitir(): string
    {
        return "Contrato do prestador PJ: {$this->nome}.Encerrado conforme cláusula de distrato.";
    }
}
?>