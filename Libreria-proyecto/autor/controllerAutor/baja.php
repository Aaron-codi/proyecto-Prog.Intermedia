<?php


// 1. Conexión a la base de datos
// incluya aqui la ruta para realizar la conexion con la base de datos
require_once "../../conexion/conexion.php";
// incluya aqui la ruta para acceder a los subprogramas que acceden a la base de datos a la tabla que 
//esta implementando

include "../nombre del modulo .php";

// Conectarse a la base de datos
$conecta = conectarBD();

if (!$conecta) {
    die("❌ Error al conectar con la base de datos.");
}

// 2. Recuperar los datos del formulario (con seguridad básica)

// El índice de $_POST debe coincidir con el atributo 'name' de cada campo del formulario.
// Así, el controlador puede recibir correctamente los datos enviados por el formulario.

$clave = intval($_POST['clave']);



// Ejecutar la eliminación usando la función existente
$resultado = eliminar....($conecta, $clave);

// Mostrar el resultado
echo $resultado;

// Enlaces de regreso
echo '<p><a href="../formEmpleado/solicitarLegajoEmpleado.php">Eliminar otro empleado</a></p>';
echo '<p><a href="../../index.html">Volver al menú principal</a></p>';

// Cerrar conexión
mysqli_close($conecta);
?>