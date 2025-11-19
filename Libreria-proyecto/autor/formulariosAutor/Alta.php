<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Alta autor</title>
</head>
<body>
  <h1>LIBRERIA</h1>
  <h2>Formulario de Alta de autor</h2>
  <h3>Ingrese los datos del autor a registrar</h3>
<!-- /* 
Esquema: Autor 
o id_autor (INT, PK) 
o nombre (VARCHAR) 
o apellido (VARCHAR) 
o nacionalidad (VARCHAR) 
o fecha_nacimiento (DATE)  
*/ -->

  <form method="post" action="../controllerAutor/registrar.php">
  <!--copie y pegue el box para cada campo segun su tipo -->

    <!-- para atributos de tipo int-->
    <label>Id del autor:<br>
      <input name="id_autor" required type="number">
    </label><br><br>

    <!-- para atributos de tipo varchar-->
    <label>Nombre:<br>
      <input name="nombre"  required type="text">
    </label><br><br>
    
    <label>Apellido:<br>
      <input name="apellido"  required type="text">
    </label><br><br>

    <label>Nacionalidad<br>
      <input name="nacionalidad"  required type="text">
    </label><br><br>

    <label>Fecha de nacimiento: <br>
      <input name="fecha_nacimiento"  required type="date">
    </label><br><br>

    

    <button type="submit">Registrar AUTOR</button>
  </form>

  <p><a href="../../index.html">Volver al menú principal</a></p>
</body>
</html>