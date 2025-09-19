<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 1</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Hola mundo en PHP</h1>
    <h3 style="color:red">PRUEBA EN ROJO</h3>
        <i>
    <?php
        /* Haz un programa en PHP que muestre el mensaje “Hello world” de 
        diferentes formas: 
        ● como texto plano html 
        ● como un encabezado de nivel 2 html 
        ● como un párrafo con estilo: color, tipografía, alineación, etc. 
        ● con un salto de línea entre hello y world 
        ● añádele la información sobre la instalación php (phpversion() y phpinfo() 
        en 
        ● investiga en la siguiente dirección como mostrar la fecha y la hora del 
        sistema 
        el 
        momento 
        de 
        https://www.php.net/manual/es/function.date.php */
        $nombre = "Álvaro"; // Las variables empiezan por $ y no son fuertemente tipadas
        echo "Hola $nombre"; // Una variable entre comillas dobles es sustituida por su valor
        echo '<br>Hola mundo'; // Puedo usar comillas simples
        echo '<br>Hola ',$nombre; // La variable con $ no se interpreta entre comillas simples
        echo "<br>Hola ", strtoupper($nombre);
        echo "<br>Hoy es ", date("d/m/y H:m:s");
        // echo "<br>".phpversion(),"<br>",phpinfo();
    ?>
        </i>
</body>
</html>