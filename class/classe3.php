
<?php
class classe3 {
    
    public function verificarEstoque($produto, $quantidade, $preco, $estoqueMinimo, $quantidadeCompra) {
        $valorEstoque = $quantidade * $preco;

        $custoCompra = $quantidadeCompra * $preco;

        $reposicao = $estoqueMinimo - $quantidade;

        echo "<h2>Resultado do Estoque</h2>";

        echo "Produto: $produto <br>";
        echo "Valor do estoque atual: R$ $valorEstoque <br>";

        if ($quantidade < $estoqueMinimo) {
            echo "Situação: Estoque abaixo do mínimo. É necessário comprar produtos. <br>";
            echo "Quantidade recomendada para reposição: $reposicao unidades <br>";
        } else {
            echo "Situação: Estoque suficiente. <br>";
            echo "Quantidade recomendada para reposição: 0 unidades <br>";
        }

        echo "Custo total da compra informada: R$ $custoCompra <br>";
    }
}
?>
