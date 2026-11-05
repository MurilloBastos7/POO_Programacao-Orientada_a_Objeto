<?php 
class Produtos{
    public $nome;
    public $preco;

    public function mostrarProduto()
    {
        echo "\nProdutos: $this->nome" . "\n";
        echo "Preço: $this->preco" . "\n";
    }
}
$p1 = new Produtos();
$p1->nome = "Skin Care";
$p1->preco = 50;
$p1->mostrarProduto();

$p2 = new Produtos();
$p2->nome = "Mascara Hidratação";
$p2->preco = 50;
$p2->mostrarProduto();
?>