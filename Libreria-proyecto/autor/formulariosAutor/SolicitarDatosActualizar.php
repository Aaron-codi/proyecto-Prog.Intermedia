<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Actualizar Autor</title>
</head>
<body>

<?php
// Conexión con la BD (modo procedimental)
require_once "../../conexion/conexion.php";

$conexion = conectarBD();

if (!$conexion) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}

/*
Esquema: Autor 
  id_autor (INT, PK) 
  nombre (VARCHAR) 
  apellido (VARCHAR) 
  nacionalidad (VARCHAR) 
  fecha_nacimiento (DATE)
*/

$autor = null;

// Si viene del formulario de búsqueda
if (isset($_POST['buscar'])) {
    $id_autor = intval($_POST['id_autor']);

    $sql = "SELECT * FROM Autor WHERE id_autor = $id_autor";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $autor = mysqli_fetch_assoc($resultado);
    } else {
        echo "⚠️ No se encontró ningún autor con ese ID.<br>";
    }
}

mysqli_close($conexion);
?>

<h1>Gestión de Autores</h1>
<h2>Actualizar Autor</h2>
<h3>Ingrese el ID del autor</h3>

<!-- Formulario de búsqueda -->
<form method="POST">
    <label>ID Autor:</label>
    <input type="number" name="id_autor" required>
    <button type="submit" name="buscar">Buscar</button>
</form>

<?php if (is_array($autor)) { ?>
<!-- Formulario de actualización -->
<form method="POST" action="../controller/actualizarAutor.php">
    <input type="hidden" name="id_autor" value="<?php echo $autor['id_autor']; ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $autor['nombre']; ?>" required><br><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="<?php echo $autor['apellido']; ?>" required><br><br>

    <label>Nacionalidad:</label>
    <input type="text" name="nacionalidad" value="<?php echo $autor['nacionalidad']; ?>" required><br><br>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?php echo $autor['fecha_nacimiento']; ?>" required><br><br>

    <button type="submit" name="actualizar">Actualizar</button>
</form>
<?php } ?>

<p><a href="../../index.html">Volver al menú principal</a></p>

</body>
</html>
