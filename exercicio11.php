<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11. Gestão de Pedidos — Restaurante</title>
</head>
<body>
    
<h1>Gestão de Pedidos - Restaurante</h1>

<form method="POST">

    Quantidade de pratos:
    <input type="number" name="qtdPratos" required>
    <br><br>

    Preço dos pratos:
    <input type="number" name="precoPratos" step="0.01" required>
    <br><br>

    Quantidade de bebidas:
    <input type="number" name="qtdBebidas" required>
    <br><br>

    Preço das bebidas:
    <input type="number" name="precoBebidas" step="0.01" required>
    <br><br>

    Quantidade de sobremesas:
    <input type="number" name="qtdSobremesas" required>
    <br><br>

    Preço das sobremesas:
    <input type="number" name="precoSobremesas" step="0.01" required>
    <br><br>

    Taxa de serviço (%):
    <input type="number" name="taxa" step="0.01" required>
    <br><br>

    Desconto (%):
    <input type="number" name="desconto" step="0.01" required>
    <br><br>

    Valor pago:
    <input type="number" name="pago" step="0.01" required>
    <br><br>

    <input type="submit" value="Calcular">

</form>

</body>
</html>

<?php

include 'class/classe11.php';

if (isset($_POST['qtdPratos'])) {

    $pedido = new classe11();

    $pratos = $pedido->subtotal(
        $_POST['qtdPratos'],
        $_POST['precoPratos']
    );

    $bebidas = $pedido->subtotal(
        $_POST['qtdBebidas'],
        $_POST['precoBebidas']
    );

    $sobremesas = $pedido->subtotal(
        $_POST['qtdSobremesas'],
        $_POST['precoSobremesas']
    );

    $subtotal = $pratos + $bebidas + $sobremesas;

    $taxa = $pedido->taxa($subtotal, $_POST['taxa']);

    $desconto = $pedido->desconto($subtotal, $_POST['desconto']);

    $total = $pedido->total($subtotal, $taxa, $desconto);

    $pago = $_POST['pago'];

    echo "<h2>Resultado</h2>";

    echo "Subtotal dos pratos: R$ " . number_format($pratos, 2, ',', '.') . "<br>";

    echo "Subtotal das bebidas: R$ " . number_format($bebidas, 2, ',', '.') . "<br>";

    echo "Subtotal das sobremesas: R$ " . number_format($sobremesas, 2, ',', '.') . "<br>";

    echo "Subtotal dos produtos: R$ " . number_format($subtotal, 2, ',', '.') . "<br>";

    echo "Taxa de serviço: R$ " . number_format($taxa, 2, ',', '.') . "<br>";

    echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";

    echo "Total do pedido: R$ " . number_format($total, 2, ',', '.') . "<br>";

    if ($pago >= $total) {
        echo "Troco: R$ " . number_format($pago - $total, 2, ',', '.');
    } else {
        echo "Falta pagar: R$ " . number_format($total - $pago, 2, ',', '.');
    }
}

?>











</body>
</html>