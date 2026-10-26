
<?php
class classe12
{
    public function produtividade($pecas, $horas)
    {
        return $pecas / $horas;
    }

    public function esperada($meta, $horas)
    {
        return $meta * $horas;
    }

    public function pagamento($pecas, $valor)
    {
        return $pecas * $valor;
    }

    public function bonus($pagamento)
    {
        return $pagamento * 10 / 100;
    }
}
?>
