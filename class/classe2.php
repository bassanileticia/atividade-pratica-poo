
<?php

class classe2 {

    public function calcularSalario($nome, $valorHora, $horasNormais, $horasExtras) {

        $salarioNormal = $valorHora * $horasNormais;

        $valorHoraExtra = $valorHora * 1.5;

        $salarioExtras = $valorHoraExtra * $horasExtras;

        $salarioBruto = $salarioNormal + $salarioExtras;

        echo "<h2>Folha de Pagamento</h2>";

        echo "Funcionário: $nome <br>";
        echo "Salário normal: R$ $salarioNormal <br>";
        echo "Valor das horas extras: R$ $salarioExtras <br>";
        echo "Salário bruto: R$ $salarioBruto <br>";

        if ($horasExtras > 10) {
            echo "<h3>Atenção: volume elevado de horas extras!</h3>";
        }

    }

}

?>
