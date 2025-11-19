<?php

/**
 * Inserta un nuevo autor en la base de datos
 */
function altaAutor($conexion, $id_autor, $nombre, $apellido, $nacionalidad, $fecha_nacimiento) {

    if (is_null(obtenerAutor($conexion, $id_autor))) {
        // Insertar nuevo autor
        $sql = "INSERT INTO Autor (id_autor, nombre, apellido, nacionalidad, fecha_nacimiento)
                VALUES ($id_autor, '$nombre', '$apellido', '$nacionalidad', '$fecha_nacimiento')";

        $resultadoInsert = mysqli_query($conexion, $sql);

        if ($resultadoInsert == true) {
            echo "<p>✅ Autor registrado con éxito.</p>";
        } else {
            echo "❌ Error al registrar autor: " . mysqli_error($conexion);
        }

        return $resultadoInsert;
    } else {
        echo "<p>⚠️ El autor con ID $id_autor ya está registrado.</p>";
        return false;
    }
}

/**
 * Muestra una lista de autores según la consulta SQL recibida
 */
function mostrarAutores($conexion, $consulta) {

    $resultado = mysqli_query($conexion, $consulta);

    if (!$resultado) {
        echo "<p>❌ Error al ejecutar la consulta.</p>";
    } else {

        $filas = mysqli_num_rows($resultado);

        if ($filas == 0) {
            echo "<p>⚠️ No hay datos disponibles.</p>";
        } else {
            echo '<h2>Autores registrados</h2>';

            echo '<table border="1" cellpadding="5">
                <thead>
                    <tr>
                        <th>ID Autor</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nacionalidad</th>
                        <th>Fecha de Nacimiento</th>
                    </tr>
                </thead><tbody>';

            while ($fila = mysqli_fetch_array($resultado)) {
                echo '
                    <tr>
                        <td>' . $fila['id_autor'] . '</td>
                        <td>' . $fila['nombre'] . '</td>
                        <td>' . $fila['apellido'] . '</td>
                        <td>' . $fila['nacionalidad'] . '</td>
                        <td>' . $fila['fecha_nacimiento'] . '</td>
                    </tr>
                ';
            }

            echo '</tbody></table>';
        }
    }
}

/**
 * Elimina un autor por su ID
 */
function eliminarAutor($conexion, $id_autor) {

    $consulta = "SELECT nombre, apellido FROM Autor WHERE id_autor = $id_autor";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $autor = mysqli_fetch_assoc($resultado);

        $delete = "DELETE FROM Autor WHERE id_autor = $id_autor";
        if (mysqli_query($conexion, $delete)) {
            return "<p>✅ Autor <strong>{$autor['nombre']} {$autor['apellido']}</strong> (ID $id_autor) eliminado correctamente.</p>";
        } else {
            return "<p>❌ Error al eliminar: " . mysqli_error($conexion) . "</p>";
        }
    } else {
        return "<p>⚠️ No existe ningún autor con ID $id_autor.</p>";
    }
}

/**
 * Actualiza los datos de un autor existente
 */
function actualizarAutor($conexion, $id_autor, $nombre, $apellido, $nacionalidad, $fecha_nacimiento) {

    $sql = "UPDATE Autor 
            SET nombre='$nombre', apellido='$apellido', 
                nacionalidad='$nacionalidad', fecha_nacimiento='$fecha_nacimiento'
            WHERE id_autor=$id_autor";

    if (mysqli_query($conexion, $sql)) {
        return "✅ Autor actualizado correctamente.<br>";
    } else {
        return "❌ Error al actualizar: " . mysqli_error($conexion);
    }
}

/**
 * Muestra los datos de un autor en particular
 */
function mostrarUnAutor($conexion, $id_autor) {

    $consulta = "SELECT * FROM Autor WHERE id_autor=$id_autor";
    mostrarAutores($conexion, $consulta);
}

/**
 * Retorna los datos de un autor como array asociativo
 */
function obtenerAutor($conexion, $id_autor) {

    $sql = "SELECT * FROM Autor WHERE id_autor = $id_autor";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $autor = mysqli_fetch_assoc($resultado);
    } else {
        $autor = null;
    }

    return $autor;
}

?>