<?php
// 1. Conexión a la base de datos
// incluya aqui la ruta para realizar la conexion con la base de datos
require_once "../../conexion/conexion.php";
// incluya aqui la ruta para acceder a los subprogramas que acceden a la base de datos a la tabla que 
//esta implementando
include "../autor.php";
$conecta=conectarBD();
$consulta="SELECT * FROM autor ";
mostrarAutores($conecta,$consulta);
echo '<a href="../../index.html">Volver al menu principal </a>';
mysqli_close($conecta);
?>