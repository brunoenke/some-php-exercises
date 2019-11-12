<?php
//   if (isset($_POST['enviar'])) {
//     $altura = $_POST['altura'];
//     $peso = $_POST['peso'];
//   function imc($peso, $altura){
//     $res = $peso / ($altura * $altura);
    
//     //swicth
//     switch ($res) {
//         case $res < 18.5 :
//             return "Abaixo do peso";
//             break;
//         case ($res >= 18.5) && ($res <= 24.9):
//             return "Peso normal";
//             break;        
//         case ($res >= 25) && ($res <= 29.9):
//             return "Sobrepeso";
//             break;
//         case ($res >= 30) && ($res <= 34.9):
//             return "Obesidade Grau I";
//             break;
//         case ($res >= 35.0) && ($res <= 39.9):
//             return "Obesidade Grau II";
//             break;
//         case ($res >= 40.0):
//             return "Obesidade Grau III";
//             break;            
//         default:
//             return "nenhum";
//             break;
//     }
//     echo "<br>";

// }
// $cauculo_imc = imc($peso, $altura);
// echo "<h2 align='center'>";
// echo "O IMC de  está {$cauculo_imc}";
// echo "</h2>";
// }

if (isset($_POST['enviar'])) {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    function imc($peso, $altura){
    $imc = round($peso / ($altura * $altura));
    if ($imc < 20) {
        return "abaixo do peso. <br> Seu imc é {$imc}.";
    }
    if ($imc >= 20 || $imc <= 25 && $imc >= 20) {
        return "normal. <br> Seu imc é {$imc}.";
    }
    if ($imc > 25 || $imc <= 30 && $imc > 25) {
        return "com excesso de peso. <br> Seu imc é {$imc}.";
    }
    if ($imc > 30 || $imc <= 35 && $imc > 30) {
        return "no nível de obesidade. <br> Seu imc é {$imc}.";
    }
    if ($imc > 35) {
        return "no nível de obesidade mórbida. <br> Seu imc é {$imc}.";
    }
}
$cauculo_imc = imc($peso, $altura);
echo "<h2 align='center'>";
echo "O IMC de  está {$cauculo_imc}";
echo "</h2>";
}
?>