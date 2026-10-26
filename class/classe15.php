
<?php
class classe15
{
    public function horas($quantidade, $valor)
    {
        return $quantidade * $valor;
    }

    public function paginas($quantidade, $valor)
    {
        return $quantidade * $valor;
    }

    public function entrada($total, $percentual)
    {
        return $total * $percentual / 100;
    }

    public function saldo($total, $entrada)
    {
        return $total - $entrada;
    }
}
?>
