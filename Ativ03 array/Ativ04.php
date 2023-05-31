<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Crie um array numérico com 5 números aleatórios. Em seguida, ordene o array em ordem crescente e imprima o resultado. </p>

    <?php
    $numero = array("222", "27", "835", "474", "58");
    echo "<br>";
    sort($numero);
    print_r($numero);
    
    ?>


</body>
</html>