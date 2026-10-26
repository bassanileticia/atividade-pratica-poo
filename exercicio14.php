<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14. Viagem a Trabalho — Reembolso de Despesas</title>
</head>
<body>
    
<h1>Reembolso de Viagem</h1>

<form method="POST">
    Distância percorrida em km:
    <input type="number" name="km" required>
    <br><br>

    Valor por quilômetro:
    <input type="number" step="0.01" name="valor" required>
    <br><br>

    Gastos com alimentação:
    <input type="number" step="0.01" name="alimentacao" required>
    <br><br>

    Gastos com hospedagem:
    <input type="number" step="0.01" name="hospedagem" required>
    <br><br>

    Outros gastos:
    <input type="number" step="0.01" name="outros" required>
    <br><br>

    Limite de reembolso:
    <input type="number" step="0.01" name="limite" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>

<?php
include 'class/classe14.php';

if (isset($_POST['km'])) {
    $km = $_POST['km'];
    $valor = $_POST['valor'];
    $alimentacao = $_POST['alimentacao'];
    $hospedagem = $_POST['hospedagem'];
    $outros = $_POST['outros'];
    $limite = $_POST['limite'];

    $viagem = new classe14();

    $quilometragem = $viagem->quilometragem($km, $valor);

    $total = $viagem->despesas(
        $km, $valor, $alimentacao, $hospedagem, $outros
    );

    $permitido = $viagem->permitido($total, $limite);
    $excedente = $viagem->excedente($total, $limite);

    echo "<h2>Resultado</h2>";
    echo "Valor por quilometragem: R$ " . number_format($quilometragem, 2, ',', '.') . "<br>";
    echo "Total das despesas: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Valor permitido para reembolso: R$ " . number_format($permitido, 2, ',', '.') . "<br>";
    echo "Valor não reembolsado: R$ " . number_format($excedente, 2, ',', '.');
}
?>









</body>
</html>