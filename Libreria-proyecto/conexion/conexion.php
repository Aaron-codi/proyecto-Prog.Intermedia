<?php
function conectarBD(){
    $conecta=mysqli_connect("localhost","root","","libreria");
    return $conecta;
}
?>