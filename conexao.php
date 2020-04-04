<?php
   $servername = "sql185.main-hosting.eu";
   $database = "u816723436_lista_tel";
   $username = "u816723436_lista_tel";
   $password = "fE=8Qo1H";
   // Create connection
   $conexao = mysqli_connect($servername, $username, $password, $database);
   // Check connection
   if (!$conexao) {
       die("Connection failed: " . mysqli_connect_error());
   }
   //echo "Connected successfully";
  // mysqli_close($conn);
   ?>

