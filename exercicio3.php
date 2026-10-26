<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>

    <h1>Controle de Estoque - Loja de Informática</h1>

    <form method="POST">
        <label>Nome do produto:</label>
        <input type="text" name="produto" required>
        <br><br>

        <label>Quantidade em estoque:</label>
        <input type="number" name="quantidade" min="0" required>
        <br><br>

        <label>Preço de custo por unidade (R$):</label>
        <input type="number" name="preco" min="0" step="0.01" required>
        <br><br>

        <label>Estoque mínimo desejado:</label>
        <input type="number" name="estoqueMinimo" min="0" required>
        <br><br>

        <label>Quantidade que será comprada:</label>
        <input type="number" name="quantidadeCompra" min="0" required>
        <br><br>

        <input type="submit" value="Verificar estoque">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $estoqueMinimo = $_POST['estoqueMinimo'];
        $quantidadeCompra = $_POST['quantidadeCompra'];

        require_once 'class/classe3.php';

        $estoque = new classe3();
        $estoque->verificarEstoque($produto, $quantidade, $preco, $estoqueMinimo, $quantidadeCompra);
    }
    ?>

