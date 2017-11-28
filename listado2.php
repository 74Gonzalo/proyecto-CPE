<?php
require_once("funciones.php");
// var_dump(traerTodos());
echo "<br>";
echo "<br>";


$info = traerTodos();
$nombre= "Pedro";
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
  // var_dump($values['materia']);
  $materia = $values['materia'];
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

require_once 'header.php';
 ?>

   <body>
     <table>

       <tr>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>e-mail</th>
         <th>Celular</th>
         <th>Materias</th>
         <th>Comentarios</th>
       </tr>
          <td><?php foreach ($info as $data => $values) {
            echo $values['nombre'];
          echo "<br>";}; ?></td>
          <td><?php foreach ($info as $data => $values) {
            echo $values['apellido'];
          echo "<br>";}; ?></td>
          <td><?php foreach ($info as $data => $values) {
            echo $values['mail'];
          echo "<br>";}; ?></td>
          <td><?php foreach ($info as $data => $values) {
            echo $values['celu'];
          echo "<br>";}; ?></td>
          <td><?php foreach ($info as $data => $values)
            $materia = $values['materia'];
          // para recorrer el array no asociativo de las materias, utilizo un for
            for ($i=0; $i <3 ; $i++) {
              if (!empty ($materia[$i])) {
                echo $materia[$i];
                echo ", ";
                }
              }
              echo "<br>";
             ?></td>
          <td><?php foreach ($info as $data => $values) {
            echo $values['comentarios'];
          echo "<br>";}; ?></td>

     </table>
     <button type="button" name="button">Bajar listado</button>
   </body>
 </html>
