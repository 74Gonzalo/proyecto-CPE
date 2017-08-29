<?php
// Nombre; Apellido; mail; celular; materia; contanos: son las claves del array post

$data= $_POST;
$informacion = $_POST;
$nombre="";
$apellido="";
$mail="";
$celular="";

function validarInformacion($informacion){

// Es el array que contiene los errores, si es 0 es señal que se envía a la base de datos
  $errores = [];

    $nombre = trim($informacion["Nombre"]);
      if (strlen($nombre)==0){

          $errores["Nombre"] = "Por favor ingresá tu nombre";
          }
   $apellido = trim($informacion["Apellido"]);
      if(strlen($apellido)==0){
          $errores["Apellidos"] = "Por favor ingresá tu apellido";
          }
    $mail = trim($informacion["mail"]);
      if(!filter_var($mail,FILTER_VALIDATE_EMAIL)&&strlen($mail==0)) {
          $errores["mail"] = "Ingresá un mail válido";
          }
    $celular = trim($informacion["celular"]);
      if(strlen($celular)<10){
        $errores["celular"] = "Ingresá un celular válido";
      }
          return $errores;
}

function crearUsuario($informacion){

// cada cliente es un array, por eso primero declaro un array vacío
// que se va llenando con cada cosa que viene desde post en la variable
// información
$datosClientes = [];

$datosClientes = [
  "nombre"=>$informacion["Nombre"],
  "apellido"=>$informacion["Apellido"],
  "mail"=>$informacion["mail"],
  "celu"=>$informacion["celular"],
  "materia"=>$informacion["materia"],
  "comentarios"=>$informacion["contanos"]
];
return $datosClientes;
}
// acá declaro la función para obtener el listado de alumnos
function traerTodos(){
  $archivo = file_get_contents("dbUsuarios.json");
  $listadoJSON = explode(PHP_EOL,$archivo);
  array_pop($listadoJSON);
  foreach ($listadoJSON as $json) {
    $listadoFinal [] = json_decode($json,true);
  }

    return($listadoFinal);
  }
?>
