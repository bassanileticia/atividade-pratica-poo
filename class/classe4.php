
<?php
class classe4 {

    public function calcularComissao($nome, $vendas, $percentual, $salarioFixo) {
        $comissao = $vendas * $percentual / 100;

        $bonus = 0;

        if ($vendas > 10000) {
            $bonus = 200;
        }

        $salarioTotal = $salarioFixo + $comissao + $bonus;

        echo "<h2>Resultado das Vendas</h2>";
        echo "Vendedor: $nome <br>";
        echo "Total vendido: R$ $vendas <br>";
        echo "Comissão calculada: R$ $comissao <br>";
        echo "Bônus: R$ $bonus <br>";
        echo "Salário total: R$ $salarioTotal <br>";
    }
}
?>
