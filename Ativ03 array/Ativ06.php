<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>Escreva um programa que receba um array de números como parâmetro e retorne a média dos valores. </p>

<?php
function calcularMedia($arrayNumeros) {
    $soma = 0;
    $quantidade = count($arrayNumeros);

    // Calculando a soma dos valores do array
    foreach ($arrayNumeros as $numero) {
        $soma += $numero;
    }

    // Calculando a média
    $media = $soma / $quantidade;

    return $media;
}
$numeros = array(5, 8, 3, 7, 1);
$media = calcularMedia($numeros);

echo "A média dos numeros é: " . $media;
?>



</body>
</html>