<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>

    <h1>Controle Financeiro - Pequena Empresa</h1>

    <form method="POST">
        <label>Receita mensal (R$):</label>
        <input type="number" name="receita" min="0" step="0.01" required>
        <br><br>

        <label>Aluguel (R$):</label>
        <input type="number" name="aluguel" min="0" step="0.01" required>
        <br><br>

        <label>Gastos com funcionários (R$):</label>
        <input type="number" name="funcionarios" min="0" step="0.01" required>
        <br><br>

        <label>Gastos com energia e internet (R$):</label>
        <input type="number" name="energiaInternet" min="0" step="0.01" required>
        <br><br>

        <label>Outras despesas (R$):</label>
        <input type="number" name="outrasDespesas" min="0" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular resultado">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $receita = $_POST['receita'];
        $aluguel = $_POST['aluguel'];
        $funcionarios = $_POST['funcionarios'];
        $energiaInternet = $_POST['energiaInternet'];
        $outrasDespesas = $_POST['outrasDespesas'];

        require_once 'class/classe7.php';

        $empresa = new classe7();
        $empresa->calcularResultado($receita, $aluguel, $funcionarios, $energiaInternet, $outrasDespesas);
    }
    ?>


