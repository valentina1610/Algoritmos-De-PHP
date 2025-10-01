<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1:</title>
    <!--  Sumar números pares hasta un número dado por el usuario -->
</head>

<body>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $suma = 0;

        for ($i = 2; $i <= $numero; $i += 2) {
            $suma += $i;
        }

        echo "<p>La suma de los números pares hasta $numero es: $suma </p>";
    }
    ?>
</body>

</html>