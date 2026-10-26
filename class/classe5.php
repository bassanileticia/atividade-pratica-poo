
<?php
class classe5 {
    
    public function calcularOrcamento($cliente, $pecas, $horas, $valorHora, $desconto) {
        $maoDeObra = $horas * $valorHora;

        $subtotal = $pecas + $maoDeObra;

        $valorDesconto = $subtotal * $desconto / 100;

        $total = $subtotal - $valorDesconto;

        echo "<h2>Resultado do Orçamento</h2>";

        echo "Cliente: $cliente <br>";
        echo "Valor das peças: R$ $pecas <br>";
        echo "Valor da mão de obra: R$ $maoDeObra <br>";
        echo "Valor do desconto: R$ $valorDesconto <br>";
        echo "Total do orçamento: R$ $total <br>";

        if ($total > 1000) {
            echo "<h3>É necessária a aprovação do cliente.</h3>";
        } else {
            echo "O orçamento não precisa de aprovação pelo valor.";
        }
    }
}
?>
