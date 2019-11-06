<?php
//strlen conta a quantidade de caracteres
  echo strlen("Ola") . "<br>";
  echo strlen(" Ola ") . "<br>";

//substr retorna uma parte da string
echo substr("ola Mundo",1,6) . "<br>";

//strpos procura uma parte de uma string
// echo strpos(string,str_proc)

$email = "teste@testes.com";
$verificar= strpos($email,"@");
if ($verificar === false) {
    echo("inválido! <br>");
}else{
    echo("correto!  <br>");
}
//retira espaços do início da string
//ltrim();
//retira espaços do final da string
//rtrim();
//retira espaços do início e do final da string
//trim();

//substitui strings
echo str_replace("ola", "hello", "ola amigo") . "<br>";
echo str_replace("velho", "novo", "onde tiver velho") . "<br>";

$Url = "htpp://www.nome.com.br/Arquivo.ext";
$vetor = explode("/",$Url);
$arrayReverso = array_reverse($vetor);
echo $arrayReverso[0];
?>