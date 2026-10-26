
<?php

class classe1 {

    public function calcularVenda($produto, $quantidade, $preco, $desconto, $pago) {

        $bruto = $quantidade * $preco;

        $valorDesconto = $bruto * $desconto / 100;

        $total = $bruto - $valorDesconto;

        echo "<h2>Resultado da venda</h2>";

        echo "Produto: $produto <br>";
        echo "Valor bruto: R$ $bruto <br>";
        echo "Valor do desconto: R$ $valorDesconto <br>";
        echo "Total a pagar: R$ $total <br>";

        if ($pago >= $total) {

            $troco = $pago - $total;

            echo "Troco: R$ $troco";

        } else {

            $falta = $total - $pago;

            echo "Valor que falta pagar: R$ $falta";

        }

    }

}

?>
