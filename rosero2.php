<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>División en PHP</title>
</head>

<body>

<h1>División entre dos números</h1>

<?php
$num1 = 10;
$num2 = 0; // cambia este valor para probar

echo "Numero 1: " . $num1;
echo "<br>";
echo "Numero 2: " . $num2;
echo "<br><br>";

if ($num2 != 0) {
    $resultado = $num1 / $num2;
    echo "El resultado de la division es: " . $resultado;
} else {
    echo "No se puede dividir entre cero";
}
?>

</body>
</html>