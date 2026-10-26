
<?php
class classe6 {
    public function calcularFrete($distancia, $valorKm, $peso, $taxaKg, $valorProdutos) {
        $custoDistancia = $distancia * $valorKm;

        $taxaPeso = $peso * $taxaKg;

        $frete = $custoDistancia + $taxaPeso;

        $desconto = 0;

        if ($valorProdutos > 500) {
            $desconto = $frete * 50 / 100;
        }

        $freteFinal = $frete - $desconto;

        $totalCompra = $valorProdutos + $freteFinal;

        echo "<h2>Resultado da Entrega</h2>";

        echo "Custo por distância: R$ $custoDistancia <br>";
        echo "Taxa por peso: R$ $taxaPeso <br>";
        echo "Desconto aplicado: R$ $desconto <br>";
        echo "Valor final do frete: R$ $freteFinal <br>";
        echo "Total da compra com frete: R$ $totalCompra <br>";
    }
}
?>
