<?php
  $data = date("j/m/Y H:i:s");
  echo $data . "<br>";
  echo date_default_timezone_get() . "<br>";
  echo date_default_timezone_set('Brazil/East') . "<br>";
  $data = date("j/m/Y H:i:s");
  echo $data . "<br>";
?>