<?php
  //function nome(){
//
  //}
  
  function escrever(){
 echo"Ola mundo <br>";
  }

escrever();
escrever();
escrever();
escrever();

  function calcular($n1, $n2){
    $r = $n1 * $n2;
    return $r;
  }

echo "Valor: " . calcular(4,5) ."<br>";

  function testes(){
    return "oi <br>";
  }
echo testes();

  $x = 2;
  function soma(){
    $x = 1;
  }
  soma();
  echo "<br>";
  echo $x . "<br>";
  
//    function soma(){
//     global $x;
//     $x = 1;
//   }
//   soma();
//   echo $x;

$x = 2;
function soma2(&$x){
  $x = 1;
  echo $x;
}
soma2($x);
echo $x;

?>