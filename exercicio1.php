<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 1 </title>
</head>
<body>
    
    <h1>Sistema de Caixa - Loja</h1>

    <form method="POST">

        <label>Nome do produto:</label>
        <input type="text" name="produto" required>

        <br><br>

        <label>Quantidade vendida:</label>
        <input type="number" name="quantidade" min="1" required>

        <br><br>

        <label>Preço unitário (R$):</label>
        <input type="number" name="preco" min="0" step="0.01" required>

        <br><br>

        <label>Desconto (%):</label>
        <input type="number" name="desconto" min="0" max="100" step="0.01" required>

        <br><br>

        <label>Valor pago pelo cliente (R$):</label>
        <input type="number" name="pago" min="0" step="0.01" required>

        <br><br>

        <input type="submit" value="Registrar venda">

    </form>
</body>
</html>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
        $pago = $_POST['pago'];

        require_once 'class/classe1.php';

        $caixa = new classe1();
        $caixa->calcularVenda($produto, $quantidade, $preco, $desconto, $pago);

    }

    ?>

