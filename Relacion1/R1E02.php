<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 2</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Tipos y formatos de salida</h1>
    <?php
        /* Haz un programa PHP que muestre un valor de ejemplo de cada tipo de 
        dato escalar en php con echo utilizando la función var_dump(), y también 
        con printf  formateado. Prueba todas las posibilidades tal y como vienen 
        descritas en: https://www.w3schools.com/php/func_string_printf.asp */

        $nombre = "Álvaro";
        $verdadero = true;
        $nivel = 19;
        $distancia = 37.56;

        echo "Booleano: ", $verdadero, "<br>String: ", $nombre, "<br>Entero: ", $nivel, "<br>Real: ", $distancia;
        echo "<br>";
        var_dump($distancia);
        echo "<br>";
        printf("El número 98 en binario es: %b <br>",98);
        printf("El número 317 en octal es: %o <br>",317);
        printf("El número 6059 en hexadecimal es: %X <br>",6059);
        printf("El número 77660031 en hexadecimal es: %X <br>",77660031);
        printf("El carácter ASCII que corresponde a 64 es: %c <br>",64);
        printf("Un valor real en notación científica se expresa %E <br>",1.9);
        printf("Un valor real en notación científica se expresa %E <br>",753);

        printf("El número 73 con dos decimales sería: %1\$.2f <br>",73);
        printf("El número 69.158307 con dos decimales sería: %1\$.2f <br>",69.158307);
    ?>
</body>
</html>