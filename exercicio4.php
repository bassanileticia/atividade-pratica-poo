<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 </title>
</head>
<body>

    <h1>Comissão de Vendas - Funcionário Comercial</h1>

    <form method="POST">
        <label>Nome do vendedor:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Total vendido no mês (R$):</label>
        <input type="number" name="vendas" min="0" step="0.01" required>
        <br><br>

        <label>Percentual de comissão (%):</label>
        <input type="number" name="percentual" min="0" step="0.01" required>
        <br><br>

        <label>Salário fixo (R$):</label>
        <input type="number" name="salarioFixo" min="0" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular salário">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $vendas = $_POST['vendas'];
        $percentual = $_POST['percentual'];
        $salarioFixo = $_POST['salarioFixo'];

        require_once 'class/classe4.php';

        $vendedor = new classe4();
        $vendedor->calcularComissao($nome, $vendas, $percentual, $salarioFixo);
    }
    ?>

