<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>
<body>
    <h2>Resultado de la Suma</h2>
    <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 + $num2;
            echo "<p>El resultado de la suma de $num1 y $num2 es: $resultado</p>";
        } else {
            echo "<p>No se recibieron los números correctamente.</p>";
        }
        
        echo '<p>Aun no sabes sumar? Aprende en el siguente video: <a href= "https://www.youtube.com/watch?v=oF-rZLIShC8">CLASE</a></p>';
        
    ?>
    <a href="inicio.html">Volver</a>
</body>
</html>
