<?php
    //variaveis começam  com $
    $dado=10;
    $nome="Paulo";
    $var='Paulo';
    $num=10.50;
    echo "Ola meu amigo $nome";
    echo "<br>";
    echo 'Ola meu amigo $nome';
    echo "<br>";
    echo "O valor é $dado";
    echo "<br>";
    //apostrofe
    echo 'Oi "meu amigo" mario <br>';
    //caracter de escape
    echo "Oi \"meu amigo\" mario <br>";
    echo "Ola meu amigo " . $nome . "<br>";

    //Sobrescreve a variável
    // $t="Primeiro";
    // $t="Segundo";
    // $t="Terceiro";

    //usando o . ele concatena .= => var = var + var . novo valor
    $t="Primeiro ";
    $t.="Segundo ";
    $t.="Terceiro";
    echo $t;
    echo "<br>";
    //constante não vai $
    //define("Constante","Valor");
    define("db_nome","site");
    echo "O nome do BD é:  ".db_nome;
    echo "<br>";
    define("db_porta","8800");
    echo "A porta do banco é:  ".db_porta;
?>

<h1>testes</h1>
<h1> <?=$nome; ?> </h1>
