<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
<!-- Convierte una cantidad dada en metros a pulgadas, centímetros o pies-->
</head>
<body>
    <form method="post">
        <label for="matros">Ingrese la cantidad en metros</label>
        <input type="number" name="metros" id="metros" step="0.01" required>

        <button type="submit" name="unidad" value="centimetros">Calcular centimetros</button>
        <button type="submit" name="unidad" value="pulgadas">Calcular pulgadas</button>
        <button type="submit" name="unidad" value="pies">Calcular pies</button>
    </form>
    <?php
    if (($_SERVER)['REQUEST_METHOD'] == 'POST') {
        $metros = floatval($_POST['metros']);
        $unidad = $_POST['unidad'];
        $resultado = 0;

        switch ($unidad) {
            case 'centimetros':
                $resultado = $metros * 100;
                break;
            case 'pulgadas':
                $resultado = $metros * 39.3701;
                break;
            case 'pies':
                $resultado = $metros * 3.28084;
                break;    
        }

        echo "<p>El resultado de $metros metros pasados a $unidad es: $resultado</p>";
    }
    ?>
</body>
</html>