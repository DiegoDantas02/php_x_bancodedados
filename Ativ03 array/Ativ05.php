<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
</head>

<body>
    <P>Crie um array chamado "cores" contendo cinco cores diferentes. Em seguida, imprima a quantidade de elementos presentes no array. </P>
    <br>
    <?php
    $cores = array("Preto", "Azul", "Vermelha", "Cinza", "Verde");
    print_r($cores);

    $quantidadeCores = count($cores);
    echo "<br>";
    echo "<h2><br>A quantidade de cores no array é: </h2>" . "<h1>$quantidadeCores</h1>";

    ?>

</body>

</html>