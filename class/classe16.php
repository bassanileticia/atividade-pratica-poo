
<?php
class classe16
{
    public function desvalorizacao($valor, $percentual)
    {
        return $valor * $percentual / 100;
    }

    public function perda($desvalorizacao, $anos)
    {
        return $desvalorizacao * $anos;
    }

    public function residual($valor, $perda)
    {
        $residual = $valor - $perda;

        if ($residual < 0) {
            return 0;
        } else {
            return $residual;
        }
    }
}
?>
