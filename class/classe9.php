<?php

class classe9
{
    public function custo($compra, $adicional)
    {
        return $compra + $adicional;
    }

    public function preco($custo, $lucro)
    {
        return $custo + ($custo * $lucro / 100);
    }

    public function faturamento($preco, $quantidade)
    {
        return $preco * $quantidade;
    }

    public function lucro($preco, $custo, $quantidade)
    {
        return ($preco - $custo) * $quantidade;
    }
}

?>