<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

function processarAdmissao(FuncionarioInterface $funcionario)
{
    echo $funcionario->contratar() . "\n";
}

function processarDesligamento(FuncionarioInterface $funcionario)
{
    echo $funcionario->demitir() . "\n";
}

$clt1 = new FuncionarioCLT("Murillo Cena", "123456-SP");
$pj1 = new FuncionarioPJ("Miguel Gomes", "12.345.678/0001-XX");

$clt2 = new FuncionarioCLT("Sophie Neri", "123456-SP");
$pj2 = new FuncionarioPJ("Catarine Sant", "12.345.678/0001-XX");

echo "ADMISSÕES\n";
processarAdmissao($clt1);
processarAdmissao($pj1);

echo "\nDESLIGAMENTOS\n";
processarDesligamento($clt2);
processarDesligamento($pj2);
?>