<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 6</title>
</head>
<body>

    <h1>Entregas - Cálculo de Frete</h1>

    <form method="POST">
        <label>Distância da entrega (km):</label>
        <input type="number" name="distancia" min="0" step="0.1" required>
        <br><br>

        <label>Valor cobrado por quilômetro (R$):</label>
        <input type="number" name="valorKm" min="0" step="0.01" required>
        <br><br>

        <label>Peso da mercadoria (kg):</label>
        <input type="number" name="peso" min="0" step="0.1" required>
        <br><br>

        <label>Taxa adicional por quilograma (R$):</label>
        <input type="number" name="taxaKg" min="0" step="0.01" required>
        <br><br>

        <label>Valor dos produtos (R$):</label>
        <input type="number" name="valorProdutos" min="0" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular frete">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $distancia = $_POST['distancia'];
        $valorKm = $_POST['valorKm'];
        $peso = $_POST['peso'];
        $taxaKg = $_POST['taxaKg'];
        $valorProdutos = $_POST['valorProdutos'];

        require_once 'class/classe6.php';

        $entrega = new classe6();
        $entrega->calcularFrete($distancia, $valorKm, $peso, $taxaKg, $valorProdutos);
    }
    ?>



