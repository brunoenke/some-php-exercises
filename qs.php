<a href="qs.php">Sem parametro</a><br>
<a href="qs.php?sessao=1">Um parametro</a><br>
<a href="qs.php?sessao=2&prod=teste">Dois parametros</a><br>
<?php
    if (isset($_GET["sessao"])) {
        $sessao = $_GET["sessao"];
        $prod = (isset($_GET["prod"])) ? $_GET ["prod"]: false ;
        echo "Secao $sessao <br>";
        echo "Produto $prod <br>";
}

?>