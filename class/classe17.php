
<?php
class classe17 {
    
    public function calcularInvestimento($valorInicial, $aporte, $taxa, $meses, $objetivo) {
        $saldo = $valorInicial;
        $totalAportes = 0;

        for ($i = 1; $i <= $meses; $i++) {
            $saldo = $saldo + ($saldo * $taxa / 100);
            $saldo = $saldo + $aporte;
            $totalAportes = $totalAportes + $aporte;
        }

        $totalInvestido = $valorInicial + $totalAportes;
        $rendimentos = $saldo - $totalInvestido;

        echo "<h2>Resultado do Investimento</h2>";

        echo "Valor inicial investido: R$ $valorInicial <br>";
        echo "Total de aportes realizados: R$ $totalAportes <br>";
        echo "Saldo final com rendimentos: R$ $saldo <br>";
        echo "Total estimado de rendimentos: R$ $rendimentos <br>";

        if ($saldo >= $objetivo) {
            $superado = $saldo - $objetivo;
            echo "Meta atingida! Valor acima do objetivo: R$ $superado <br>";
        } else {
            $falta = $objetivo - $saldo;
            echo "Meta não atingida. Falta: R$ $falta <br>";
        }
    }
}
?>
