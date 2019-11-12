<form action= "validar.php" method= "POST">
    <input type="text" name="nome" placeholder="Nome"><br>
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
    if (!$vemail) {
        $erros[] = "E-mail invalido!";
    }
    $veidade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);
    if(!$veidade){
        $erros[] = "Idade invalida!";
    }
    if (!empty($erros)){
        foreach ($erros as $erro) {
            echo "$erro <br>";
        }
        exit();
    }

}

  

?>