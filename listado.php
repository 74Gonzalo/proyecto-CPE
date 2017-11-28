<?php
require_once("funciones.php");
// var_dump(traerTodos());
echo "<br>";
echo "<br>";


$info = traerTodos();
//
// var_dump($info);
// var_dump($materia);

echo "<br>";
foreach ($info as $data => $values) {

  echo "Nombre: ";
  echo $values['nombre'];
  echo "<br>";
  echo "Apellido: ";
  echo $values['apellido'];
  echo "<br>";
  echo $values['mail'];
  echo "<br>";
  echo "Celular: ";
  echo $values['celu'];
  echo "<br>";
  echo "materias: ";
  // // echo $value['materia'];
  $materia = $values['materia'];
  // var_dump($values['materia']);
// para recorrer el array no asociativo de las materias, utilizo un for
  for ($i=0; $i <3 ; $i++) {
    if (!empty ($materia[$i])) {
      echo $materia[$i];
      echo ", ";
      }
    }
  echo "<br>";
  echo "Comentarios: ";
  echo $values['comentarios'];
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
