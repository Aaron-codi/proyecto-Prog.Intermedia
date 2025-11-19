<?php
// 1. Conexión a la base de datos
// incluya aqui la ruta para realizar la conexion con la base de datos
require_once "../../conexion/conexion.php";
// incluya aqui la ruta para acceder a los subprogramas que acceden a la base de datos a la tabla que 
//esta implementando

include "../nombre del modulo .php";

$conecta=conectarBD();

$clave=$_POST['clave'];

mostrarUn.....($conecta,$clave);

 echo '<a href="../formularios/solicitarClaveBuscqueda.php">Nueva Busqueda </a>';

?>