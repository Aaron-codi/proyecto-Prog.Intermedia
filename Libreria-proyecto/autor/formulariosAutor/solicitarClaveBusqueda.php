<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRERIA</title>
</head>
<body>
     <h1>LIBRERIA</h1>
    <h2>Ingrese la clave de autor para buscar</h2>
     <!-- /* 
Esquema: Autor 
o id_autor (INT, PK) tenga en cuenta para name el valor id_autor
o nombre (VARCHAR) 
o apellido (VARCHAR) 
o nacionalidad (VARCHAR) 
o fecha_nacimiento (DATE)  
*/ -->
     <form action="../controllerAutor/mostrarUno.php" method="post">
       <label for="id_autor">Nro de Legajo : </label> 
        <input type="text" name="id_autor" />  <!--tenga en cuenta para name el valor id_autor-->
        <button type="submit" name="accion" value="buscar">Buscar</button>
        
    </form>

    <a href="../../index.html">Volver al menu principal</a>
</body>
</html>