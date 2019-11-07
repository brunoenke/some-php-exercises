<form action= "validar.php" method= "POST">
    <input type="text" name="nome" placeholder="Nome"><br>
    <input type="text" name="end" placeholder="End"><br>
    <input type="text" name="email" placeholder="e-mail"><br>
    <input type="text" name="idade" placeholder="idade"><br>
    <input type="submit" name="enviar" value="Enviar">

<?php
  print_r($_POST);
  echo"<br>";
if(isset($_POST["enviar"])){
    $erros = array();
    $vnome = strlen($_POST["nome"]);
    if ($vnome <5) {
        $erros[] = "Nome invalido!";
    }
    $vemail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


}

  

?>