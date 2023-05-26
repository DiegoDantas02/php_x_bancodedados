<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <?php

    echo "<h1>Escreva um programa que verifique se um número é divisível por 3 e por 5. Se for, imprima a mensagem 'O número é divisível por 3 e por 5' . Caso contrário, imprima a mensagem 'O número não é divisível por 3 e por 5'. </h1>";
    echo "<br>";
    $valor = 10;
    if($valor %  3 == 0 && $valor % 5 == 0){
        echo "O número é divisível por 3 e por 5 <br>";
    }else{
        echo "O número NÃO é divisível por 3 e por 5!! ";
    }

    //echo (3 == 5 && 10 > 5) . "TRUE<br>";
    ?>

</body>

</html>