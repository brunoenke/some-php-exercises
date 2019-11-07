<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <!-- Google Icon Font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- materialize.css -->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- CSS Customizado -->
  <link rel="stylesheet" href="css/customizado.css">

  <!-- viewport para mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<?php
//   include("inc_cabecalho.php");
  require("inc_cabecalho.php");
  require("inc_funcoes.php");
  card("Dolorem quos quidem quia vero quos doloremque dolorem ipsam et.", "red");
  card("Esse necessitatibus aliquid est. Veritatis eligendi beatae non soluta. Ut laboriosam labore deserunt porro autem cum.", "blue");
  include("inc_rodape.php");
?>
  <!-- JavaScript no final do body para otimizar o carregamento -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>