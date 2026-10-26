<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16. Inventário — Avaliação de Patrimônio</title>
</head>
<body>
    
<h1>Inventário de Equipamentos</h1>

<form method="POST">
    Nome do equipamento:
    <input type="text" name="nome" required>
    <br><br>

    Valor de compra:
    <input type="number" step="0.01" name="valor" required>
    <br><br>

    Desvalorização anual (%):
    <input type="number" step="0.01" name="percentual" required>
    <br><br>

    Anos de uso:
    <input type="number" name="anos" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>

<?php
include 'class/classe16.php';

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $percentual = $_POST['percentual'];
    $anos = $_POST['anos'];

    $equipamento = new classe16();

    $desvalorizacao = $equipamento->desvalorizacao($valor, $percentual);
    $perda = $equipamento->perda($desvalorizacao, $anos);
    $residual = $equipamento->residual($valor, $perda);

    echo "<h2>Resultado</h2>";
    echo "Equipamento: " . $nome . "<br>";
    echo "Valor de compra: R$ " . number_format($valor, 2, ',', '.') . "<br>";
    echo "Desvalorização por ano: R$ " . number_format($desvalorizacao, 2, ',', '.') . "<br>";
    echo "Perda acumulada: R$ " . number_format($perda, 2, ',', '.') . "<br>";
    echo "Valor residual: R$ " . number_format($residual, 2, ',', '.') . "<br>";

    if ($perda > $valor * 0.5) {
        echo "Situação: perdeu mais de 50% do valor original.";
    } else {
        echo "Situação: perdeu até 50% do valor original.";
    }
}
?>






</body>
</html>