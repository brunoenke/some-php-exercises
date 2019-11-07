<?php
//   print_r($_POST);
//   echo"<br>";
  if ((isset($_POST["nome"]))&&(isset($_POST["end"]))){
    $nome = ($_POST["nome"]);
    $end = ($_POST["end"]);
    echo "Nome: $nome<br>" . "End: $end<br>";
}

?>
<a href="formulario.php">Voltar</a><br>