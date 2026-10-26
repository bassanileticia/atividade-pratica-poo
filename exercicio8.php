<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>

    <h1>Compra de Materiais - Escritório</h1>

    <form method="POST">
        <h3>Cadernos</h3>
        <label>Quantidade:</label>
        <input type="number" name="qtdCadernos" min="0" required>
        <br><br>

        <label>Preço unitário (R$):</label>
        <input type="number" name="precoCaderno" min="0" step="0.01" required>
        <br><br>

        <h3>Canetas</h3>
        <label>Quantidade:</label>
        <input type="number" name="qtdCanetas" min="0" required>
        <br><br>

        <label>Preço unitário (R$):</label>
        <input type="number" name="precoCaneta" min="0" step="0.01" required>
        <br><br>

        <h3>Resmas de papel</h3>
        <label>Quantidade:</label>
        <input type="number" name="qtdResmas" min="0" required>
        <br><br>

        <label>Preço unitário (R$):</label>
        <input type="number" name="precoResma" min="0" step="0.01" required>
        <br><br>

        <label>Orçamento disponível (R$):</label>
        <input type="number" name="orcamento" min="0" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular compra">
    </form>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $qtdCadernos = $_POST['qtdCadernos'];
        $precoCaderno = $_POST['precoCaderno'];
        $qtdCanetas = $_POST['qtdCanetas'];
        $precoCaneta = $_POST['precoCaneta'];
        $qtdResmas = $_POST['qtdResmas'];
        $precoResma = $_POST['precoResma'];
        $orcamento = $_POST['orcamento'];

        require_once 'class/classe8.php';

        $compra = new classe8();
        $compra->calcularCompra($qtdCadernos, $precoCaderno, $qtdCanetas, $precoCaneta, $qtdResmas, $precoResma, $orcamento);
    }
    ?>


