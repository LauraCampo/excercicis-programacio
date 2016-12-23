<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ARRAYs - Funciones Key y Current</title>
</head>
<body>
    <?php
        $director[4]="Pedro Almodovar";
        $director[0]="Tim Burton";
        $director[2]="George A. Romero";
        $director[1]="Steven Spielberg";
        $director[3]="George Lucas";
        
        $reg_pos=key($director);
        echo("La clave del registro actual en la tabla de directores de cine es: <b>".$reg_pos. "<b><br><br>");
        
        $director_pos=current($director);
        echo("Y el nombre del director al que apunta es: <b>".$director_pos."</b><br>");
    ?>
</body>
</html>
