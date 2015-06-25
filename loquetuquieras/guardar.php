<?php
require('conexion.php');
$correo=$_POST['correo'];
$comentario=$_POST['comentario'];


$sql = "INSERT INTO comentarios (id,correo,comentario)

VALUES ('#','$correo','$comentario')";

if ($conectar->query($sql) === TRUE) {
   echo " Se gusrdó exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conectar->error;
}

$conectar->close();

?>
