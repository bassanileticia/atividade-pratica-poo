<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9. Formação de Preço — Venda de Produtos</title>
</head>
<body>
    
<h1>Formação de Preço - Venda de Produtos</h1>

<form method="POST">

    Nome do produto:
    <input type="text" name="nome" required>
    <br><br>

    Custo de compra:
    <input type="number" name="compra" step="0.01" required>
    <br><br>

    Custo adicional:
    <input type="number" name="adicional" step="0.01" required>
    <br><br>

    Lucro desejado (%):
    <input type="number" name="lucro" step="0.01" required>
    <br><br>

    Quantidade vendida:
    <input type="number" name="quantidade" required>
    <br><br>

    <input type="submit" value="Calcular">

</form>

</body>
</html>

<?php

include 'class/classe9.php';

if (isset($_POST['nome'])) {

    $nome = $_POST['nome'];
    $compra = $_POST['compra'];
    $adicional = $_POST['adicional'];
    $lucro = $_POST['lucro'];
    $quantidade = $_POST['quantidade'];

    $produto = new classe9();

    $custo = $produto->custo($compra, $adicional);

    $preco = $produto->preco($custo, $lucro);

    $faturamento = $produto->faturamento($preco, $quantidade);

    $lucroTotal = $produto->lucro($preco, $custo, $quantidade);

    echo "<h2>Resultado</h2>";

    echo "Produto: " . $nome . "<br>";
    echo "Custo unitário: R$ " . $custo . "<br>";
    echo "Preço de venda: R$ " . $preco . "<br>";
    echo "Faturamento: R$ " . $faturamento . "<br>";
    echo "Lucro total: R$ " . $lucroTotal . "<br>";
}

?>








</body>
</html>