<?php

//aredondar os números
//para cima
echo ceil(4.3) . "<br>";
//para baixo
echo floor(4.3) . "<br>";
//para o mais próximo
echo round(3.4) . "<br>";
echo round(3.7) . "<br>";
echo round(3.5) . "<br>";
//aredonda os números e define quantas casas decimais
echo round(3.53427651234,3) . "<br>";
//subtitui , por . arredonda e define quantas casas decimais
$x = "3,59";
$x = str_replace(",", ".",$x);
echo round($x, 1);

?>