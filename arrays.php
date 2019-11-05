<?php
  $frutas = array('maçã','banana','abacate');
  echo $frutas[2];
  $frutas = array("a" => "maça","b" =>"banana", "c" => "abacate");
  //add novo iten
  $frutas=['pera', 'morango', 'laranja'];
  echo "<br>";
  echo count($frutas);
  echo "<br>";
  echo print_r($frutas);
  echo "<br>";
  echo var_dump($frutas);
  echo "<br>";
  //in_array("pesquisa", array);
  echo in_array("banana",$frutas); //retorna true ou vazio
  echo "<br>";
  //array_search("pesquisa", array);
  echo array_search("mamao",$frutas);

//  echo $_SERVER['PHP_SELF'];
//  echo $_SERVER['PHP_SERVERNAME'];
//  echo $_SERVER['PHP_SELF'];


?>