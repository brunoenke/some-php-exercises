<?php
  $num = 10;
  if ($num == 10){
    echo "O numero é 10!" . "<br>";
  }
  if (($num == 10) || ($num == 20)){
    echo "O numero é 10 ou 20" . "<br>";
  }
  if ($num != 11) {
    echo "O numero é diferente de 10" . "<br>";
  }
  if (($num > 5) && ($num <20)) {
    echo "O numero é maior que 5 e menor que 20" . "<br>";
  }
    
//incorreto eh exibido um notice
//   if (!$x) {
//     echo "nao existe <br>";
//   }
//
  if (!isset($x)) {
    echo "não existe x" . "<br>";
  }
  if (isset($x)) {
    echo "existe x" . "<br>";
  }
//elseif
  if ($num > 5) {
    echo "O numero é maior que 5" . "<br>";
  } else {
    echo "O numero é menor que 5" . "<br>";
  }

//elseifelse
if ($num == 5) {
    echo "O numero é 5" . "<br>";
} elseif ($num == 10) {
    echo "O numero é 10" . "<br>";
} else {
    echo "O numero não é 5 ou 10" . "<br>";
}

// elseif ternário
  $numero = ($num >5) ? "maior" : "menor" . "<br>";
  echo "Numero $numero que 5" . "<br>";

//swicth
    switch ($num) {
        case 5:
            echo "Num 5";
            break;
        case $num > 5:
            echo "maior que 5";
            break;        
        case $num < 5:
            echo "menor que 5";
            break;    
        default:
            echo "nenhum";
            break;
    }
    echo "<br>";


//foreach
    $vetor=array(1,2,3);
    foreach ($vetor as $n) {
        echo "O valor do elemento atual é: $n <br>";
    }
//for

for ($num=1; $num <= 10; $num++)
{
  echo "Número: $num <br>";
}

for ($n=1; $n <= 6; $n++)
{
  echo "<h$n>Cabeçalho $n <h$n>";
}

//while
$n = 1;
while ($n <= 10) {
   echo "Número: $num <br>";
  $n++;
}

//while
$a = 1;
do{
  echo "<h$a>Teste $a <h$a>";
  $a++;
}while ($a <= 6);

?>