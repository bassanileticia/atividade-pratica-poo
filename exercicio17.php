<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>

    <h1>Investimento Empresarial - Reserva Financeira</h1>

    <form method="POST">
        <label>Valor inicial investido (R$):</label>
        <input type="number" name="valorInicial" min="0" step="0.01" required>
        <br><br>

        <label>Aporte mensal (R$):</label>
        <input type="number" name="aporte" min="0" step="0.01" required>
        <br><br>

        <label>Taxa de rendimento mensal (%):</label>
        <input type="number" name="taxa" min="0" step="0.01" required>
        <br><br>

        <label>Quantidade de meses:</label>
        <input type="number" name="meses" min="0" required>
        <br><br>

        <label>Objetivo financeiro (R$):</label>
        <input type="number" name="objetivo" min="0" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular investimento">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valorInicial = $_POST['valorInicial'];
        $aporte = $_POST['aporte'];
        $taxa = $_POST['taxa'];
        $meses = $_POST['meses'];
        $objetivo = $_POST['objetivo'];

        require_once 'class/classe17.php';

        $investimento = new classe17();
        $investimento->calcularInvestimento($valorInicial, $aporte, $taxa, $meses, $objetivo);
    }
    ?>


    