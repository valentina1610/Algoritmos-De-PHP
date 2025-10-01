<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <!-- Calcular el factorial de un número entero ingresado por el usuario. -->
</head>

<body>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular factorial</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $factorial = 1;

        for ($i = 1; $i >= $numero; $i--) {
            $factorial *= $i;
        }
        echo "<p>El factorial de $numero es: $factorial </p>";
    }
    ?>


</body>

</html>