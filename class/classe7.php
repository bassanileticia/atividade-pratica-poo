
<?php
class classe7 {
    
    public function calcularResultado($receita, $aluguel, $funcionarios, $energiaInternet, $outrasDespesas) {
        $despesas = $aluguel + $funcionarios + $energiaInternet + $outrasDespesas;

        $resultado = $receita - $despesas;

        echo "<h2>Resultado Financeiro</h2>";

        echo "Receita total: R$ $receita <br>";
        echo "Despesas totais: R$ $despesas <br>";

        if ($resultado > 0) {
            echo "Lucro: R$ $resultado <br>";
        } else if ($resultado < 0) {
            $prejuizo = $resultado * -1;
            echo "Prejuízo: R$ $prejuizo <br>";
        } else {
            echo "A empresa não teve lucro nem prejuízo. <br>";
        }

        if ($receita > 0) {
            $margemLucro = $resultado / $receita * 100;
            echo "Margem de lucro: $margemLucro% <br>";
        } else {
            echo "Não é possível calcular a margem, pois a receita é zero. <br>";
        }
    }
}
?>
