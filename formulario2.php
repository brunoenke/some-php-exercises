<?php
  function formulario(){
?>
<form action= "formulario2.php" method= "POST">
    <input type="text" name="nome" placeholder="Nome"><br>
    <input type="text" name="end" placeholder="End"><br>
    <input type="submit" name="enviar" value="Enviar">

<?php
  }
  function enviar(){
    if ((isset($_POST["nome"]))&&(isset($_POST["end"]))){
        $nome = ($_POST["nome"]);
        $end = ($_POST["end"]);
        echo "Nome: $nome<br>" . "End: $end<br>";
        } else {
            echo"Favor digitar o Nome e o Endereço";
        }
    }
    if (!array_key_exists("enviar",$_POST)) {
        formulario();
    } else {
        enviar();
        echo'<br>
        <a href="formulario2.php">Voltar</a><br>';
    }
?>
