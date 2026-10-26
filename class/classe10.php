<?php

class classe10
{
    public function excedente($consumo, $franquia)
    {
        if ($consumo > $franquia) {
            return $consumo - $franquia;
        } else {
            return 0;
        }
    }

    public function adicional($excedente, $valorGB)
    {
        return $excedente * $valorGB;
    }

    public function total($mensalidade, $adicional)
    {
        return $mensalidade + $adicional;
    }

    public function simular($consumo)
    {
        return $consumo * 1.2;
    }
}

?>