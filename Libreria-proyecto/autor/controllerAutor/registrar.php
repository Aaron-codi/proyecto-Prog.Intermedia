<?php
// 1. Conexión a la base de datos
// incluya aqui la ruta para realizar la conexion con la base de datos
require_once "../../conexion/conexion.php";
// incluya aqui la ruta para acceder a los subprogramas que acceden a la base de datos a la tabla que 
//esta implementando

include "../nombre del modulo .php";

$conexion = conectarBD();

if (!$conexion) {
    echo "No pudo conectarse.<br>";
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Recuperar los datos del formulario (con seguridad básica)
   $id_clave  = intval($_POST['id_']); // para campos de tipo number
    $atributo1 = mysqli_real_escape_string($conexion, $_POST['  ']); //name="nombre" // campos de tipo txt
    $atributo2 = mysqli_real_escape_string($conexion, $_POST['']);//name="apellido"
    $atributo3 = mysqli_real_escape_string($conexion, $_POST['']);
    $atributo4 = mysqli_real_escape_string($conexion, $_POST['']);
    $atributo5 = mysqli_real_escape_string($conexion, $_POST['']);
    $atributo6 = mysqli_real_escape_string($conexion, $_POST['']);
// 3. Ejecutar el alta del paciente sobre la base de datos
$verificarConsulta = alta.....($conexion, $id_clave,  $atributo1, $atributo2 , $atributo3, $atributo4, $atributo5, $atributo6);

if (!$verificarConsulta) { 
    echo "Error al registrar paciente: " . mysqli_error($conexion);
} 

echo '<p><a href="../formularios/Alta.php">Registrar otro paciente</a></p>';
echo '<p><a href="../../index.html">Volver al menú principal</a></p>';

// 4. Cerrar conexión
mysqli_close($conexion);
?>