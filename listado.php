<?php
require_once("funciones.php");
var_dump(traerTodos());
echo "<br>";
echo "<br>";


$info = traerTodos();

var_dump($info);
echo "<br>";
foreach ($info as $data => $value) {

  echo "Nombre:";
  echo$value['nombre'];
  echo "<br>";
  echo "Apellido:";
  echo $value['apellido'];
  echo "<br>";
  echo "<br>";


}


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <button type="button" name="button">Bajar listado</button>
   </body>
 </html>
