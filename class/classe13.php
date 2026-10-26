
<?php
class classe13
{
    public function custo($consumo, $preco)
    {
        return $consumo * $preco;
    }

    public function total($custo, $taxa, $multa)
    {
        return $custo + $taxa + $multa;
    }

    public function reducao($consumo, $preco)
    {
        return ($consumo * 0.85) * $preco;
    }
}
?>
