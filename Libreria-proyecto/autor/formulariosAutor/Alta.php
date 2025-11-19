<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Alta Paciente</title>
</head>
<body>
  <h1>Centro Médico</h1>
  <h2>Formulario de Alta de Paciente</h2>
  <h3>Ingrese los datos del paciente a registrar</h3>
<!-- /* 
Esquema: Autor 
o id_autor (INT, PK) 
o nombre (VARCHAR) 
o apellido (VARCHAR) 
o nacionalidad (VARCHAR) 
o fecha_nacimiento (DATE)  
*/ -->

  <form method="post" action="indique aqui la ruta al controlador que recepciona los datos de este formulario">
  <!--copie y pegue el box para cada campo segun su tipo -->

    <!-- para atributos de tipo int-->
    <label>nombre del campo :<br>
      <input name="escriba el atributo segun la entidad que debe implementar" required type="number">
    </label><br><br>

    <!-- para atributos de tipo varchar-->
    <label>Nombre del campo:<br>
      <input name="escriba el atributo segun la entidad que debe implementar"  required type="text">
    </label><br><br>

    

    <button type="submit">Registrar Paciente</button>
  </form>

  <p><a href="../../index.html">Volver al menú principal</a></p>
</body>
</html>
