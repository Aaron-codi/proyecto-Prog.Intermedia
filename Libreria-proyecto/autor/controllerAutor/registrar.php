<?php
// 1. Conexión a la base de datos
// incluya aqui la ruta para realizar la conexion con la base de datos
require_once "../../conexion/conexion.php";
// incluya aqui la ruta para acceder a los subprogramas que acceden a la base de datos a la tabla que 
//esta implementando

include "../autor.php";

$conexion = conectarBD();

if (!$conexion) {
    echo "No pudo conectarse.<br>";
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Recuperar los datos del formulario (con seguridad básica)
   $id_clave  = intval($_POST['id_autor']); // para campos de tipo number
    $atributo1 = mysqli_real_escape_string($conexion, $_POST['nombre']); //name="nombre" // campos de tipo txt
    $atributo2 = mysqli_real_escape_string($conexion, $_POST['apellido']);//name="apellido"
    $atributo3 = mysqli_real_escape_string($conexion, $_POST['nacionalidad']);
    $atributo4 = mysqli_real_escape_string($conexion, $_POST['fecha_nacimiento']);
// 3. Ejecutar el alta del paciente sobre la base de datos
$verificarConsulta = altaAutor($conexion, $id_clave,  $atributo1, $atributo2 , $atributo3, $atributo4);

if (!$verificarConsulta) { 
    echo "Error al registrar paciente: " . mysqli_error($conexion);
} 

echo '<p><a href="../formulariosAutor/Alta.php">Registrar otro autor</a></p>';
echo '<p><a href="../../index.html">Volver al menú principal</a></p>';

// 4. Cerrar conexión
mysqli_close($conexion);
?>