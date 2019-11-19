<?php
  $nome = (isset($_COOKIE["nome"])) ? $_COOKIE["nome"] : false ;
  //$nome = $_COOKIE["nome"];
  echo "Usuário logado é o $nome";
?>
<br><a href="cookies_verificar.php">Verificar o que foi gravado</a>
<br><a href="cookies_excluir.php">Excluir cookies</a>