
<?php
class classe14
{
    public function quilometragem($km, $valor)
    {
        return $km * $valor;
    }

    public function despesas($km, $valor, $alimentacao, $hospedagem, $outros)
    {
        return ($km * $valor) + $alimentacao + $hospedagem + $outros;
    }

    public function permitido($total, $limite)
    {
        if ($total > $limite) {
            return $limite;
        } else {
            return $total;
        }
    }

    public function excedente($total, $limite)
    {
        if ($total > $limite) {
            return $total - $limite;
        } else {
            return 0;
        }
    }
}
?>
