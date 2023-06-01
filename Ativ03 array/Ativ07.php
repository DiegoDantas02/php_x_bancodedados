<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Crie um array de strings contendo o nome de 5 países diferentes. Em seguida, percorra o array e imprima cada país em uma linha separada. </p>

    <?php
    $pais = array("EUA", "CANADA","ITALIA", "ESPANHA","PORTUGAL");
    print_r($pais);
    echo "<br>";
    foreach($pais as $pais){
    echo $pais . "<br>";}
   
    
    ?>


</body>
</html>