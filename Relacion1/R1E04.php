<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 4</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Manejo básico de Arrays</h1>
    <?php
        /* En un programa PHP, declara un array constante en el que se almacenarán 
        los días de la semana. Muestra por pantalla: 
        ● el primer dia de la semana 
        ● todos los días secuencialmente 
        ● lo mismo que el anterior, pero en formato de lista numerada */

        // Para desactivar los warnings se puede indicar:
        // error_reporting(E_ALL & ~E_WARNING);

        // Para desactivar los warnings, de momento no lo uso

        // PHP es case sensitive
        // Las constantes se ponen en mayúsculas (por convenio)
        // Si declaro una const no sebo usar $ en el nombre

        const SEMANA = ["LUNES",
                        "MARTES",
                        "MIÉRCOLES",
                        "JUEVES",
                        "VIERNES",
                        "SÁBADO",
                        "DOMINGO"];

        echo "<br> El primer día de la semana es: ",SEMANA[0];
        echo "<br>";
        echo "<br> Una semana tiene ". count(SEMANA)." días";
        // La función que calcula la longitud de un array es count
        echo "<br>";
        echo "<br> Todos los días de la semana son: <br>";
        for ($i = 0; $i < count(SEMANA); $i++) {
            echo SEMANA[$i],"<br>";
        };
        echo "<br>";
        echo "<br> Todos los días de la semana son: ";
        echo "<ol>"; // Apertura de lista
        for ($i = 0; $i < count(SEMANA); $i++) {
            echo "<li>",SEMANA[$i],"</li>";
        };
        echo "<ol>"; // Cierre de lista

    ?>
</body>
</html>