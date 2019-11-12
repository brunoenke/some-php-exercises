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

<nav>
    <div class="nav-wrapper">
      <a href="imc_index.php" class="brand-logo" method= "POST">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

  <form action="#" method="post" class="container">
          
          <label>Altura:</label>
          <input type="text" name="altura" id="altura" placeholder="1.71"/>
          <label>Peso:</label>
  
          <input type="text" name="peso" id="peso" placeholder="70" />
  
          <input type="submit" value="Enviar" name="enviar" id="enviar"/>
  
      </form>

<?php
    
        include("imc_funcoes.php");
    
    ?>