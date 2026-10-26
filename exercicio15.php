<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15. Contratação de Freelancer — Desenvolvimento de Site</title>
</head>
<body>
    
<h1>Contratação de Freelancer</h1>

<form method="POST">
    Quantidade de horas:
    <input type="number" name="horas" required>
    <br><br>

    Valor por hora:
    <input type="number" step="0.01" name="valorHora" required>
    <br><br>

    Quantidade de páginas:
    <input type="number" name="paginas" required>
    <br><br>

    Valor adicional por página:
    <input type="number" step="0.01" name="valorPagina" required>
    <br><br>

    Percentual de entrada:
    <input type="number" name="percentual" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>

<?php
include 'class/classe15.php';

if (isset($_POST['horas'])) {
    $horas = $_POST['horas'];
    $valorHora = $_POST['valorHora'];
    $paginas = $_POST['paginas'];
    $valorPagina = $_POST['valorPagina'];
    $percentual = $_POST['percentual'];

    $freelancer = new classe15();

    $custoHoras = $freelancer->horas($horas, $valorHora);
    $custoPaginas = $freelancer->paginas($paginas, $valorPagina);

    $total = $custoHoras + $custoPaginas;

    $entrada = $freelancer->entrada($total, $percentual);
    $saldo = $freelancer->saldo($total, $entrada);

    echo "<h2>Resultado</h2>";
    echo "Custo de desenvolvimento: R$ " . number_format($custoHoras, 2, ',', '.') . "<br>";
    echo "Custo das páginas: R$ " . number_format($custoPaginas, 2, ',', '.') . "<br>";
    echo "Valor total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Valor da entrada: R$ " . number_format($entrada, 2, ',', '.') . "<br>";
    echo "Saldo restante: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

    if ($total > 3000) {
        $parcelas = $saldo / 3;

        echo "O pagamento pode ser dividido em 3 parcelas.<br>";
        echo "Valor de cada parcela: R$ " . number_format($parcelas, 2, ',', '.');
    }
}
?>






</body>
</html>