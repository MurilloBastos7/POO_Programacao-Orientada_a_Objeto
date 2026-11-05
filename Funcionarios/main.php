<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$funcionario1 = new FuncionarioCLT("Murillo Cena", "123.456.789-00", 3000.00, 500.00, 300.00);
$funcionario2 = new FuncionarioPJ("Fut Base LTDA", "12.345.678/0001-99", 80.00, 160);

$folhaDePagamento = [$funcionario1, $funcionario2];

foreach ($folhaDePagamento as $funcionario) {
    echo "Nome: " . $funcionario->getNome() . "\n";
    echo "Documento: " . $funcionario->getDocumento() . "\n";
    echo "Pagamento Total: R$ " . number_format($funcionario->calcularPagamento(), 2, ',', '.') . "\n";
    echo "----------------------------------------\n";
}