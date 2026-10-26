<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12. Produtividade — Funcionário de uma Fábrica</title>
</head>
<body>
    
<h1>Produtividade do Funcionário</h1>

<form method="POST">
    Quantidade de peças produzidas:
    <input type="number" name="pecas" required>
    <br><br>

    Horas trabalhadas:
    <input type="number" name="horas" required>
    <br><br>

    Meta de peças por hora:
    <input type="number" name="meta" required>
    <br><br>

    Valor pago por peça:
    <input type="number" step="0.01" name="valor" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>

<?php
include 'class/classe12.php';

if (isset($_POST['pecas'])) {
    $pecas = $_POST['pecas'];
    $horas = $_POST['horas'];
    $meta = $_POST['meta'];
    $valor = $_POST['valor'];

    $funcionario = new classe12();

    $produtividade = $funcionario->produtividade($pecas, $horas);
    $esperada = $funcionario->esperada($meta, $horas);
    $pagamento = $funcionario->pagamento($pecas, $valor);

    $percentual = ($pecas / $esperada) * 100;

    $bonus = 0;

    if ($percentual >= 120) {
        $bonus = $funcionario->bonus($pagamento);
    }

    $total = $pagamento + $bonus;

    echo "<h2>Resultado</h2>";
    echo "Produtividade por hora: " . number_format($produtividade, 2, ',', '.') . "<br>";
    echo "Produção esperada: " . $esperada . " peças<br>";
    echo "Meta atingida: " . number_format($percentual, 2, ',', '.') . "%<br>";
    echo "Pagamento variável: R$ " . number_format($pagamento, 2, ',', '.') . "<br>";
    echo "Bônus: R$ " . number_format($bonus, 2, ',', '.') . "<br>";
    echo "Total a receber: R$ " . number_format($total, 2, ',', '.');
}
?>










</body>
</html>