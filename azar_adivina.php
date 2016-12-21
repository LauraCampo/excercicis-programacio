<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivinar el número</title>
</head>
<body>
    <h1>Adivina un número entre el 1 y el 10</h1>
    <h5>Escribe el número:</h5>
    <form action="azar_adivina.php" method="post">
        <input type="text" name="numeroUsuario" size="10">
        <input type="submit" name="Adivinar" value="Adivinar">
        <input type="reset" name="Borrar" value="Borrar">
    </form>
</body>
</html>
<?php
        echo($_COOKIE["azar"]);
        //Comprobamos si se ha enviado el formulario
        if (isset($_POST["Adivinar"])){
            if($_POST["numeroUsuario"]>$_COOKIE["azar"]){
                echo("El número introducido es mayor que el número que tienes que adivinar.");   
            }
            else {
                if($_POST["numeroUsuario"]=$_COOKIE["azar"]){
                    echo("Has acertado el número.");
                }
                else{
                    echo("El número introducido es menor que el número que tienes que adivinar.");
                }
            }
        }
    ?>