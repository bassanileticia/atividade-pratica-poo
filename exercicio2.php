<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>

    <h1>Folha de Pagamento - Funcionário</h1>

    <form method="POST">

        <label>Nome do funcionário:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>Valor da hora trabalhada (R$):</label>
        <input type="number" name="valorHora" min="0" step="0.01" required>

        <br><br>

        <label>Quantidade de horas normais:</label>
        <input type="number" name="horasNormais" min="0" required>

        <br><br>

        <label>Quantidade de horas extras:</label>
        <input type="number" name="horasExtras" min="0" required>

        <br><br>

        <input type="submit" value="Calcular salário">

    </form>
</body>
</html>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['nome'];
        $valorHora = $_POST['valorHora'];
        $horasNormais = $_POST['horasNormais'];
        $horasExtras = $_POST['horasExtras'];

        require_once 'class/classe2.php';

        $funcionario = new classe2();

        $funcionario->calcularSalario($nome, $valorHora, $horasNormais, $horasExtras);

    }

    ?>


