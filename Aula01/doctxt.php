<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Extras</title>

</head>
<body>

<?php
 //sitaxe e variaveis
 # comentario
 /*comentarios de 
 varias linhas
 */
//sintaxe para mostrar coisa na tela

 echo "Olá"; //99,9 das vezes vai usar esse
 echo "<h1>PHP-ESTUDANDO</h1>";
 print("<h3>Aula 02</h3>");
 print_r("Vamos estudar!!"); //quando der erro usar

 echo "<h3> Mensagem</h3>";
 echo 9.99;

echo "<br>";
echo "<br>";

$nome = "Dantas"; // texto = string
$idade = 22; // numérico inteiro = integer
$altura = 1.83; // numérico decimal = double
$fumante = false; // booleano = boolean

echo gettype($nome) . "<br>";
echo gettype($idade);
echo "<br>";
echo gettype($altura);
echo "<br>";
echo gettype($fumante);

echo $nome . "<br>";
echo $nome . "-" . $idade . "<br>";
echo "nome:" . $nome . "<br>";
echo "nome: $nome <br>";
echo 'nome: $nome <br>';

echo "<h1> Operações </h1>";
$n1 = 10;
$n2 = 2;
echo $n1+$n2;
echo "<br>";
echo "$n1 + $n2 = " . $n1+$n2 . " <br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % $n2 . "<br>";
echo $n1 ** $n2 . "<br>";

 ?>
 
</body>
</html>
