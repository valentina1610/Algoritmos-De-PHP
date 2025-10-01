<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
<!-- Determina si un número ingresado por el usuario es primo o no (dentro de los primeros 100)-->
</head>
<body>
    <form method="post">
        <label for="numero">Ingrese un numero (del 2 al 100):</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular si es primo</button>
    </form>
    <?php
    if (($_SERVER)['REQUEST_METHOD'] == 'POST') {
    $numero = intval($_POST["numero"]);
    if ($numero > 100 || $numero < 2) {
        echo"<p>[ERROR]: Ingrese un numero entre 2 y 100!</p>";
        exit;
    } else {
        $esPrimo = true;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
        
    }
    if ($esPrimo) {
            echo"<p>El numero $numero es primo.</p>";
        } else {
            echo"<p>El numero $numero no es primo.</p>";
        }

    }
    ?>
</body>
</html>