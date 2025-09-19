<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 3</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Superglobals</h1>
    <?php
        /* Investiga 
        qué y cuales son las superglobals en php  
        (https://www.php.net/manual/es/language.variables.superglobals.php), y haz 
        un programa que muestre, en forma de lista no numerada, para $_SERVER: 
        ‘DOCUMENT-ROOT’ 
        ‘PHP-SELF’ 
        ‘SERVER-NAME’ 
        'SERVER_SOFTWARE'  
        'SERVER_PROTOCOL'  
        'HTTP_HOST'  
        'HTTP_USER_AGENT'  
        'REMOTE_ADDR'  
        'REMOTE_PORT'  
        'SCRIPT_FILENAME'  
        'REQUEST_URI'  
        Prueba un volcado con var_dump($_SERVER) y también con 
        print_r($_SERVER). ¿Cuál es la diferencia? */

        $nombre = "Álvaro";
        $verdadero = true;
        $nivel = 19;
        $distancia = 37.56;

        echo "Booleano: ", $verdadero, "<br>String: ", $nombre, "<br>Entero: ", $nivel, "<br>Real: ", $distancia;
        echo "<br>";
        var_dump($distancia);
        echo "<br>";
        printf("El número 31 en binario es: %b <br>",30);
        printf("El número 31 en octal es: %o <br>",30);
        printf("El número 31 en hexadecimal es: %X <br>",30);
        printf("El carácter ASCII que corresponde a 64 es: %c <br>",64);
        printf("Un valor real en notación científica se expresa %E <br>",1.9);
        printf("Un valor real en notación científica se expresa %E <br>",753);

        printf("El número 73 con dos decimales sería: %1\$.2f <br>",73);
        printf("El número 69.158307 con dos decimales sería: %1\$.2f <br>",69.158307);
    ?>
</body>
</html>