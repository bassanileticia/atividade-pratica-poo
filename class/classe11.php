
<?php

class classe11
{
    public function subtotal($quantidade, $preco)
    {
        return $quantidade * $preco;
    }

    public function taxa($subtotal, $taxa)
    {
        return $subtotal * $taxa / 100;
    }

    public function desconto($subtotal, $desconto)
    {
        return $subtotal * $desconto / 100;
    }

    public function total($subtotal, $taxa, $desconto)
    {
        return $subtotal + $taxa - $desconto;
    }
}

?>
