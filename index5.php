<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5:</title>
    <!-- Busca un número ingresado por el usuario en un arreglo predefinido y retorne la posición en la cual se encuentra este número. -->
</head>

<body>
    <form method="post">
        <label for="numero">Ingrese un número (del 1 al 10):</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Buscar en array</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $arregloPredefinido = [3, 7, 10, 2, 9, 6, 1, 4, 8, 5];
        $posicion= array_search($numero, $arregloPredefinido);
        if ($posicion === false) {
            echo "<p>El número $numero es invalido, tiene que ser del 1 al 10.</p>";
            exit;
        } else {
            echo "<p>El número $numero se encuentra en la posición $posicion del arreglo.</p>";
        }

    }
    ?>
</body>

</html>