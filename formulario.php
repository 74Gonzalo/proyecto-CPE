
<?php

require_once ("funciones.php");
$nombre = "";
$apellido = "";
$mail = "";
$celu = "";
$materia = "";
$comentarios = "";

$errores = [];

// recupero los datos por POST
if($_POST){
$errores = validarInformacion($data);
// hay que tener cuidado con declarar errores dentro de la función, para que no sea una variable global
if (count($errores)==0){
  $infoUsuario = crearUsuario($informacion);
  $a = json_encode($infoUsuario);
  $fp = fopen('dbUsuarios.json','a');
  fwrite($fp,$a.PHP_EOL);
  fclose($fp);
  header("Location:registro.php");exit;
}
}

// si hay errores, como no está seteado, acá lo que hago es declarar el índice que corresponde
// del array errores

if (!isset($errores)>0){
  $nombre = $_POST["Nombre"];
}
if(!isset($errores)>0){
  $apellido = $_POST["Apellido"];
}

if(!isset($errores)>0){
  $mail = $_POST["mail"];
}
if(!isset($errores)>0){
  $celular = $_POST["celular"];
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CENTRO DE PREPARACION DE EXAMENES-CONTACTANOS</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <section class="container">
      <header>
  <img src="images/golden_phi.jpg" alt="CPE_badge">
    <h1>CENTRO DE PREPARACION DE EXAMENES</h1>

<nav>
  <ul>
    <li><a href="formulario.php">Contactanos</a></li>
    <li><a href="us.php">Nosotros</a></li>
    <li><a href="novedades.php">Novedades</a></li>
    <li><a href="faq.php">FAQ's</a></li>
  </ul>
</nav>

      </header>
<?php if(count($errores)>0){ ?>
  <ul>
    <?php foreach ($errores as $error) {?>
    <li><?=$error?></li>
  <?php }?>
</ul>
  <?php } ?>

  <p>CONTACTANOS</p>
<form class="" action="formulario.php" method="post" enctype="multipart/form-data">

  <fieldset class="formulario">
      <input type="text" name="Nombre" value="" placeholder="Nombre">
  <br>
      <input type="text" name="Apellido" value="" placeholder="Apellido">
  <br>
      <input type="text" name="mail" value=""placeholder="Correo electrónico">
  <br>
      <input type="text" name="celular" value="" placeholder="Celular">
  <br>
  <fieldset>
      <label >Materias</label>
  <br>
      <label>Matemáticas</label><input type="checkbox" name="materia[]" value="matematicas">
      <label>Estadística</label><input type="checkbox" name="materia[]" value="estadisticas">
      <label>Contabilidad</label><input type="checkbox" name="materia[]" value="contabilidad">
      </fieldset>
  <br>
      <label>Contanos que necesitás</label>
  <br>
      <textarea name="contanos" rows="8" cols="80"></textarea>
  <br>
        <button type="submit" name="button">Enviar</button>
    </fieldset>
</form>
    <a href="index.php">VOLVER</a>
</article>
  <footer>
<p>Desarrollado por Yabin Web </p>
<br>
Copyright (c) 2017 Copyright Holder All Rights Reserved.

</footer>


    </section>
  </body>
</html>
