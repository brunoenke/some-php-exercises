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
<div class="row">
<div class="col s3 m3 l3">
<form action= "formulario_recebe.php" method= "POST" class="container" >
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="end" placeholder="End">
    <input type="submit" name="enviar" value="Enviar">
    </div>
    </div>


  <!-- JavaScript no final do body para otimizar o carregamento -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>