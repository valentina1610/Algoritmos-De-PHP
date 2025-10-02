<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1:</title>
    <!--  Genera una secuencia numérica o alfabética -->
</head>

<body>
    <form method="post">
        <label for="tipo">Ingrese la longitud de la secuencia:</label>
        <input type="number" name="longitud" id="longitud" required>

        <label for="tipo">Ingrese el tipo de secuencia:</label>
        <button type="submit" name="tipo" value="numerica">Secuencia Numerica</button>
        <button type="submit" name="tipo" value="alfabetica">Secuencia Alfabetica</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $longitud = intval($_POST["longitud"]);
        $tipo = $_POST['tipo'];
        $abecedario = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

        switch ($tipo) {
            case 'numerica':
                if ($longitud < 1) {
                    echo "<p>La longitud minima para la secuencia numerica es 1.</p>";
                    exit;
                }
                for ($i = 1; $i <= $longitud; $i++) {
                    echo $i . " ";
                }
                break;
            case 'alfabetica':
                if ($longitud > 26 || $longitud < 1) {
                    echo "<p>La longitud para la secuencia alfabética es de 1 a 26.</p>";
                    exit;
                }
                for ($i = 0; $i < $longitud; $i++) {
                    echo $abecedario[$i] . " ";
                }
                break;
            default:
                echo "<p>Tipo de secuencia no válido.</p>";
                break;
        }
    }
    ?>
</body>

</html>