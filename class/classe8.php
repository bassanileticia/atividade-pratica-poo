
<?php
class classe8 {
    
    public function calcularCompra($qtdCadernos, $precoCaderno, $qtdCanetas, $precoCaneta, $qtdResmas, $precoResma, $orcamento) {
        $custoCadernos = $qtdCadernos * $precoCaderno;
        $custoCanetas = $qtdCanetas * $precoCaneta;
        $custoResmas = $qtdResmas * $precoResma;

        $total = $custoCadernos + $custoCanetas + $custoResmas;

        echo "<h2>Resultado da Compra</h2>";

        echo "Custo dos cadernos: R$ $custoCadernos <br>";
        echo "Custo das canetas: R$ $custoCanetas <br>";
        echo "Custo das resmas de papel: R$ $custoResmas <br>";
        echo "Valor total da compra: R$ $total <br>";

        if ($total <= $orcamento) {
            $saldo = $orcamento - $total;
            echo "Sobrou: R$ $saldo <br>";
        } else {
            $falta = $total - $orcamento;
            $excedido = $falta / $orcamento * 100;

            echo "Valor que falta: R$ $falta <br>";
            echo "Percentual excedido: $excedido% <br>";
        }
    }
}
?>
