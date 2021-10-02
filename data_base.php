<?php
  $connection = mysqli_connect(
    "localhost",//Servidor local
    "hungry-student",//Usuario
    "abcd",//Contraseña
    "delta"//Nombre de la base de datos
  );
  mysqli_set_charset(
    $connection, //Argumentos para hacer la conexión
    "utf8"//Formato
  );
?>