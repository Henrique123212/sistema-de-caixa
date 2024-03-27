<?php
$nome = $_POST['nome_cliente'];
$produto1 = $_POST['primeiro_produto'];
$valor1 = $_POST['valor_primeiro_produto'];
$produto2 = $_POST['segundo_produto'];
$valor2 = $_POST['valor_segundo_produto'];
$total = $_POST['valor_pago'];

$total_produtos = $valor1 + $valor2;
$troco = $total - $total_produtos;

echo "O nome do cliente é: $nome";
echo "\n";
echo "O valor total a ser pago é: $total_produtos";
echo "\n";
echo "O troco é: $troco";
echo "\n";
?>