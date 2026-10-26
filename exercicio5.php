<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 5</title>
</head>
<body>
    
    <h1>Orçamento - Assistência Técnica</h1>

    <form method="POST">
        <label>Nome do cliente:</label>
        <input type="text" name="cliente" required>
        <br><br>

        <label>Valor das peças (R$):</label>
        <input type="number" name="pecas" min="0" step="0.01" required>
        <br><br>

        <label>Quantidade de horas de serviço:</label>
        <input type="number" name="horas" min="0" step="0.5" required>
        <br><br>

        <label>Valor cobrado por hora (R$):</label>
        <input type="number" name="valorHora" min="0" step="0.01" required>
        <br><br>

        <label>Percentual de desconto (%):</label>
        <input type="number" name="desconto" min="0" max="100" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular orçamento">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente = $_POST['cliente'];
        $pecas = $_POST['pecas'];
        $horas = $_POST['horas'];
        $valorHora = $_POST['valorHora'];
        $desconto = $_POST['desconto'];

        require_once 'class/classe5.php';

        $orcamento = new classe5();
        $orcamento->calcularOrcamento($cliente, $pecas, $horas, $valorHora, $desconto);
    }
    ?>

