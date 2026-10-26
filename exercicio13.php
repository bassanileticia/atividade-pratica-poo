<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13. Consumo de Energia — Empresa</title>
</head>
<body>
    
<h1>Consumo de Energia</h1>

<form method="POST">
    Consumo mensal em kWh:
    <input type="number" name="consumo" required>
    <br><br>

    Preço por kWh:
    <input type="number" step="0.01" name="preco" required>
    <br><br>

    Taxa adicional:
    <input type="number" step="0.01" name="taxa" required>
    <br><br>

    Tem multa por atraso?
    <select name="atraso">
        <option value="nao">Não</option>
        <option value="sim">Sim</option>
    </select>
    <br><br>

    Valor da multa:
    <input type="number" step="0.01" name="multa">
    <br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>

<?php
include 'class/classe13.php';

if (isset($_POST['consumo'])) {
    $consumo = $_POST['consumo'];
    $preco = $_POST['preco'];
    $taxa = $_POST['taxa'];
    $atraso = $_POST['atraso'];
    $multa = $_POST['multa'];

    $energia = new classe13();

    $custo = $energia->custo($consumo, $preco);

    if ($atraso == "nao") {
        $multa = 0;
    }

    $total = $energia->total($custo, $taxa, $multa);

    $novoConsumo = $consumo * 0.85;
    $novoCusto = $energia->reducao($consumo, $preco);
    $economia = $custo - $novoCusto;

    echo "<h2>Resultado</h2>";
    echo "Custo de energia: R$ " . number_format($custo, 2, ',', '.') . "<br>";
    echo "Taxa adicional: R$ " . number_format($taxa, 2, ',', '.') . "<br>";
    echo "Multa: R$ " . number_format($multa, 2, ',', '.') . "<br>";
    echo "Valor total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Consumo com redução de 15%: " . number_format($novoConsumo, 2, ',', '.') . " kWh<br>";
    echo "Nova conta sem multa: R$ " . number_format($novoCusto + $taxa, 2, ',', '.') . "<br>";
    echo "Economia estimada: R$ " . number_format($economia, 2, ',', '.');
}
?>











</body>
</html>