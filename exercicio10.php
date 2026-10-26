<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10. Plano de Internet — Comparação de Planos</title>
</head>
<body>
    
<h1>Plano de Internet - Comparação de Planos (GB - Gigabyte)</h1>

<form method="POST">

    Consumo mensal (GB):
    <input type="number" name="consumo" step="0.01" required>
    <br><br>

    Franquia do plano (GB):
    <input type="number" name="franquia" step="0.01" required>
    <br><br>

    Mensalidade (R$):
    <input type="number" name="mensalidade" step="0.01" required>
    <br><br>

    Valor por GB excedente (R$):
    <input type="number" name="valorGB" step="0.01" required>
    <br><br>

    <input type="submit" value="Calcular">

</form>

</body>
</html>

<?php

include 'class/classe10.php';

if (isset($_POST['consumo'])) {

    $consumo = $_POST['consumo'];
    $franquia = $_POST['franquia'];
    $mensalidade = $_POST['mensalidade'];
    $valorGB = $_POST['valorGB'];

    $plano = new classe10();

    $dentro = $consumo;

    if ($consumo > $franquia) {
        $dentro = $franquia;
    }

    $excedente = $plano->excedente($consumo, $franquia);

    $adicional = $plano->adicional($excedente, $valorGB);

    $total = $plano->total($mensalidade, $adicional);

    $novoConsumo = $plano->simular($consumo);

    $novoExcedente = $plano->excedente($novoConsumo, $franquia);

    $novoAdicional = $plano->adicional($novoExcedente, $valorGB);

    $novoTotal = $plano->total($mensalidade, $novoAdicional);

    echo "<h2>Resultado</h2>";

    echo "Consumo dentro da franquia: " . $dentro . " GB<br>";

    echo "Quantidade excedente: " . $excedente . " GB<br>";

    echo "Valor adicional: R$ " . number_format($adicional, 2, ',', '.') . "<br>";

    echo "Total mensal: R$ " . number_format($total, 2, ',', '.') . "<br>";

    echo "<h2>Simulação com aumento de 20%</h2>";

    echo "Novo consumo: " . number_format($novoConsumo, 2, ',', '.') . " GB<br>";

    echo "Novo excedente: " . number_format($novoExcedente, 2, ',', '.') . " GB<br>";

    echo "Novo valor adicional: R$ " . number_format($novoAdicional, 2, ',', '.') . "<br>";

    echo "Novo total mensal: R$ " . number_format($novoTotal, 2, ',', '.') . "<br>";
}

?>